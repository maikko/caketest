<?php
App::uses('AppModel', 'Model');

class Member extends AppModel {
	public $useTable = 'Member';
	public $validate = array(
		'mail'=>array(
				'rule'=>'email',
				'required'=>true,
				'message'=>'メールアドレスを入力ください。'
		),
		'password'=>array(
				'rule'=>'alphaNumeric',
				'required'=>true,
				'message'=>'パスワードは半角英数字で入力ください。'
		)
	);
}