<?php
App::uses('AppController', 'Controller');

class LoginController extends AppController {
 	public $uses = array('Member','AutoLogin');
// 	public $name = 'Login';
 	public $components = array('Session', 'Cookie');
 	public $expires = 1209600; //60 * 60 * 24 * 14


	public function index() {
		//$this->autoLayout = false;
	}

	public function login() {
		//入力チェック
		$this->Member->set($this->data);
		if($this->Member->validates()){
			//memberテーブル検索
			$member = $this->Member->find('first', array('conditions' =>
					array('Member.mail' => $this->data['Member']['mail'], 'Member.password' => md5($this->data['Member']['password']))));
			if($member){
				$this->Session->write('member', $member);
				//ログイン後ページへ
				$this->redirect('index');
			}
		}
		//入力画面再表示
		$this->render('index');
	}

	/* token発行 */
	private function tokenWrite($member){
		$token = array();
		$token['member_id'] = $member['Member']['id'];
		$token['passport'] = Security::generateAuthKey();

		if (isset($member['AutoLogin']['id'])) {
			$token['id'] = $member['AutoLogin']['id'];
		}
		$this->AutoLogin->save($token);

		$cookie = array(
				'token' => $token['token']
		);
		$this->Cookie->write('Member', $cookie, true, $this->expires);
	}

	/* token削除 */
	private function tokentDelete($member){
		$this->Cookie->delete('Member');

		$conditions = array(
				'AutoLogin.member_id' => $member['Member']['id']
		);
		$this->AutoLogin->deleteAll($conditions);
	}
}
