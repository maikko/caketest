<?php
App::uses('AppModel', 'Model');

class AutoLogin extends AppModel {
	public $useTable = 'AutoLogin';
	public $belongsTo = array(
			'Member' => array(
					'foreignKey' => 'member_id'
			)
	);
}