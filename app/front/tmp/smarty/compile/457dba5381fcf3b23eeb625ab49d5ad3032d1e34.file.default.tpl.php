<?php /* Smarty version Smarty-3.1.8, created on 2012-04-09 16:34:04
         compiled from "C:\workspace\caketest\app\front\View\Layouts\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147424f82f35ca6b933-41605430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '457dba5381fcf3b23eeb625ab49d5ad3032d1e34' => 
    array (
      0 => 'C:\\workspace\\caketest\\app\\front\\View\\Layouts\\default.tpl',
      1 => 1333778261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147424f82f35ca6b933-41605430',
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
  'unifunc' => 'content_4f82f35cabf235_16896226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f82f35cabf235_16896226')) {function content_4f82f35cabf235_16896226($_smarty_tpl) {?><html>
<head>
<title>TEST</title>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['content_for_layout']->value;?>

<?php echo $_smarty_tpl->tpl_vars['View']->value->element('sql_dump');?>

</body>
</html><?php }} ?>