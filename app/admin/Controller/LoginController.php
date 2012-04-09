<?php
App::uses('AppController', 'Controller');

class LoginController extends AppController {
	public $uses = array('Member');
	public $name = 'Login';
	public $components = array('Auth', 'Cookie');

	function beforeFilter() {
		$this->Auth->userModel = 'Member';//Memberモデルを使用してmembersテーブルを参照する
        $this->Auth->loginAction = array(
            'controller' => 'login',
            'action' => 'login'
        );
//         $this->Auth->loginRedirect = array(
//             'controller' => 'admin',
//             'action' => 'index'
//         );
//         $this->Auth->logoutRedirect = array(
//             'controller' => 'admin',
//             'action' => 'login'
//         );
//         $this->Auth->allow('login', 'logout');
		$this->Auth->fields = array(
				'username' => 'mail',
				'password' => 'password'
			);
		$this->Auth->allow('login', 'logout','index');
// 	    $this->Auth->loginRedirect = 'login/index';
	   // $this->Auth->loginRedirect = 'pages/home';
	    $this->Auth->loginError = 'ユーザー名もしくはパスワードが違います。';
 	    $this->Auth->authError = 'ログインしてください。';
	}


	public function index() {
		//$this->autoLayout = false;
	}

	public function login() {
		print_r($this->Auth->user());
        if($this->request->is('post')) {
            if($this->Auth->login($this->request->data)) {
                return $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
            }
        }

// 		$user = $this->Auth->user();
// 		print_r($user);
		/*
		//$this->autoLayout = false;
		//$this->redirect(array('controller' => 'login', 'action' => 'index'));
		$this->Member->create($this->data);
		//入力チェック
		if($this->Member->validates()){
			//memberテーブル検索
			print $this->Auth->password($this->data['Member']['password']);
			$member = $this->Member->find('first', array('conditions' =>
					array('Member.mail' => $this->data['Member']['mail'], 'Member.password' => md5($this->data['Member']['password']))));
			if($member){
				//ログイン後ページへ
				$this->redirect('index');
			}else{
				//入力画面再表示
				$this->render('index');
			}
		}else{
			//入力画面再表示
			$this->render('index');
		}
		*/
			$this->render('index');
	}

	public function add() {
		if(!empty($this->data)) {
			// メンバー追加
			$this->Member->create();
			$this->Member->save($this->data['Member']);

			// リダイレクト
			$this->redirect('./login');
		}
	}

}
