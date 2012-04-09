<?php /* Smarty version Smarty-3.1.8, created on 2012-04-09 16:34:03
         compiled from "C:\workspace\caketest\app\front\View\Book\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141684f82f35b5097f8-99472447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38af8d6595f71d04837406f53f1ddcc07793d2d5' => 
    array (
      0 => 'C:\\workspace\\caketest\\app\\front\\View\\Book\\index.tpl',
      1 => 1333553957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141684f82f35b5097f8-99472447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f82f35be00a05_66113855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f82f35be00a05_66113855')) {function content_4f82f35be00a05_66113855($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\workspace\\caketest\\vendors\\smarty\\plugins\\modifier.date_format.php';
?>こんにちは、<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
さん!!
今日は<?php echo smarty_modifier_date_format(time(),'%Y年%m月%d日');?>
です。<?php }} ?>