<?php /* Smarty version Smarty-3.1.8, created on 2012-04-09 16:42:03
         compiled from "C:\workspace\caketest\app\admin\View\Layouts\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:229314f82f53bb3c1d7-25219417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f58213fbce9ec9c4c62840060b916a4ca63624d6' => 
    array (
      0 => 'C:\\workspace\\caketest\\app\\admin\\View\\Layouts\\default.tpl',
      1 => 1333778261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229314f82f53bb3c1d7-25219417',
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
  'unifunc' => 'content_4f82f53bb6e560_08685174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f82f53bb6e560_08685174')) {function content_4f82f53bb6e560_08685174($_smarty_tpl) {?><html>
<head>
<title>TEST</title>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['content_for_layout']->value;?>

<?php echo $_smarty_tpl->tpl_vars['View']->value->element('sql_dump');?>

</body>
</html><?php }} ?>