<?php /* Smarty version Smarty-3.1.8, created on 2012-04-09 16:34:34
         compiled from "C:\workspace\caketest\app\front\View\Login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:234994f82f37a4d66d5-67159678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd6400b6036a57035bbadd64f6d049f8bb87c660' => 
    array (
      0 => 'C:\\workspace\\caketest\\app\\front\\View\\Login\\index.tpl',
      1 => 1333782413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234994f82f37a4d66d5-67159678',
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
  'unifunc' => 'content_4f82f37a5ff341_01851500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f82f37a5ff341_01851500')) {function content_4f82f37a5ff341_01851500($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Session']->value->flash('auth');?>

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