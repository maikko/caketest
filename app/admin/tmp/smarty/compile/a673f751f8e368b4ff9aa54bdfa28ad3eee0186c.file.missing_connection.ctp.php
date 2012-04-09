<?php /* Smarty version Smarty-3.1.8, created on 2012-04-09 16:42:03
         compiled from "C:\workspace\caketest\lib\Cake\View\Errors\missing_connection.ctp" */ ?>
<?php /*%%SmartyHeaderCode:55814f82f53b1be196-07384505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a673f751f8e368b4ff9aa54bdfa28ad3eee0186c' => 
    array (
      0 => 'C:\\workspace\\caketest\\lib\\Cake\\View\\Errors\\missing_connection.ctp',
      1 => 1332667826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55814f82f53b1be196-07384505',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f82f53b27e4a5_92650088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f82f53b27e4a5_92650088')) {function content_4f82f53b27e4a5_92650088($_smarty_tpl) {?><<?php ?>?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?<?php ?>>
<h2><<?php ?>?php echo __d('cake_dev', 'Missing Database Connection'); ?<?php ?>></h2>
<p class="error">
	<strong><<?php ?>?php echo __d('cake_dev', 'Error'); ?<?php ?>>: </strong>
	<<?php ?>?php echo __d('cake_dev', '%s requires a database connection', $class); ?<?php ?>>
</p>
<p class="error">
	<strong><<?php ?>?php echo __d('cake_dev', 'Error'); ?<?php ?>>: </strong>
	<<?php ?>?php echo __d('cake_dev', 'Confirm you have created the file : %s.', APP_DIR . DS . 'Config' . DS . 'database.php'); ?<?php ?>>
</p>
<p class="notice">
	<strong><<?php ?>?php echo __d('cake_dev', 'Notice'); ?<?php ?>>: </strong>
	<<?php ?>?php echo __d('cake_dev', 'If you want to customize this error message, create %s.', APP_DIR . DS . 'View' . DS . 'Errors' . DS . basename(__FILE__)); ?<?php ?>>
</p>

<<?php ?>?php
echo $this->element('exception_stack_trace');
<?php }} ?>