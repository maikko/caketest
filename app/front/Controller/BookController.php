<?php
App::uses('AppController', 'Controller');

class BookController extends AppController {
	public function beforeFilter(){
// 		if (isset($this->params['admin'])) {
// 			$this->Auth->authError = 'このページへのアクセスは認証が必要です。';
// 			$this->set('username', $this->Auth->user('username'));

// 			$this->layout = 'admin';
// 		} else {
// 			$this->Auth->allow($this->params['action']);
// 		}
	}
	public function index() {
		//$this->autoLayout = false;
	}


}
