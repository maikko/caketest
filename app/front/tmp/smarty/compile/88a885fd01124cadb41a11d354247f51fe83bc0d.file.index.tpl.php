<?php /* Smarty version Smarty-3.1.8, created on 2012-04-08 19:17:08
         compiled from "C:\workspace\parupun\app\front\View\Login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193834f81c81481bfd7-97424789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88a885fd01124cadb41a11d354247f51fe83bc0d' => 
    array (
      0 => 'C:\\workspace\\parupun\\app\\front\\View\\Login\\index.tpl',
      1 => 1333782413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193834f81c81481bfd7-97424789',
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
  'unifunc' => 'content_4f81c814e7ef02_86337823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f81c814e7ef02_86337823')) {function content_4f81c814e7ef02_86337823($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['Session']->value->flash('auth');?>

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