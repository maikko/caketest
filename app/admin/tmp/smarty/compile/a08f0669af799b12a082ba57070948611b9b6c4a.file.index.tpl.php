<?php /* Smarty version Smarty-3.1.8, created on 2012-04-09 16:42:02
         compiled from "C:\workspace\caketest\app\admin\View\Login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285164f82f53a46f523-79668149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a08f0669af799b12a082ba57070948611b9b6c4a' => 
    array (
      0 => 'C:\\workspace\\caketest\\app\\admin\\View\\Login\\index.tpl',
      1 => 1333982430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285164f82f53a46f523-79668149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Session' => 0,
    'Form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f82f53a8a0ac8_10845463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f82f53a8a0ac8_10845463')) {function content_4f82f53a8a0ac8_10845463($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Session']->value->flash('auth');?>
admin
<?php echo $_smarty_tpl->tpl_vars['Form']->value->create('Member',array('url'=>'/login/login'));?>

<p><?php echo $_smarty_tpl->tpl_vars['Form']->value->error('Member.mail');?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['Form']->value->error('Member.password');?>
</p>
<table>
	<tr>
		<th>mail</th>
		<td><?php echo $_smarty_tpl->tpl_vars['Form']->value->text('Member.mail');?>
</td>
	</tr>
	<tr>
		<th>pass</th>
		<td><?php echo $_smarty_tpl->tpl_vars['Form']->value->password('Member.password');?>
</td>
	</tr>
</table>
<?php echo $_smarty_tpl->tpl_vars['Form']->value->end('Login');?>
<?php }} ?>