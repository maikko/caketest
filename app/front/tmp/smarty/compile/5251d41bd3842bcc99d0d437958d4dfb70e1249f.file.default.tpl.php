<?php /* Smarty version Smarty-3.1.8, created on 2012-04-08 19:17:14
         compiled from "C:\workspace\parupun\app\front\View\Layouts\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149894f81c81a5bfb82-72872123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5251d41bd3842bcc99d0d437958d4dfb70e1249f' => 
    array (
      0 => 'C:\\workspace\\parupun\\app\\front\\View\\Layouts\\default.tpl',
      1 => 1333778261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149894f81c81a5bfb82-72872123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_for_layout' => 0,
    'View' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f81c81a624f69_01614068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f81c81a624f69_01614068')) {function content_4f81c81a624f69_01614068($_smarty_tpl) {?><html>
<head>
<title>TEST</title>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['content_for_layout']->value;?>

<?php echo $_smarty_tpl->tpl_vars['View']->value->element('sql_dump');?>

</body>
</html><?php }} ?>