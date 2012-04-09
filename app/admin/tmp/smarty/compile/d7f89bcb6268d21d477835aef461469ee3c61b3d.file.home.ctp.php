<?php /* Smarty version Smarty-3.1.8, created on 2012-04-09 16:42:34
         compiled from "C:\workspace\caketest\app\admin\View\Pages\home.ctp" */ ?>
<?php /*%%SmartyHeaderCode:91614f82f55ada7634-57567339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7f89bcb6268d21d477835aef461469ee3c61b3d' => 
    array (
      0 => 'C:\\workspace\\caketest\\app\\admin\\View\\Pages\\home.ctp',
      1 => 1332667826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91614f82f55ada7634-57567339',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f82f55b099246_90662982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f82f55b099246_90662982')) {function content_4f82f55b099246_90662982($_smarty_tpl) {?><<?php ?>?php
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
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?<?php ?>>
<iframe src="http://cakephp.org/bake-banner" width="830" height="160" style="overflow:hidden; border:none;">
	<p>For updates and important announcements, visit http://cakefest.org</p>
</iframe>
<h2><<?php ?>?php echo __d('cake_dev', 'Release Notes for CakePHP %s.', Configure::version()); ?<?php ?>></h2>
<a href="http://cakephp.org/changelogs/<<?php ?>?php echo Configure::version(); ?<?php ?>>"><<?php ?>?php echo __d('cake_dev', 'Read the changelog'); ?<?php ?>> </a>
<<?php ?>?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?<?php ?>>
<p id="url-rewriting-warning" style="background-color:#e32; color:#fff;">
	<<?php ?>?php echo __d('cake_dev', 'URL rewriting is not properly configured on your server.'); ?<?php ?>>
	1) <a target="_blank" href="http://book.cakephp.org/2.0/en/installation/advanced-installation.html#apache-and-mod-rewrite-and-htaccess" style="color:#fff;">Help me configure it</a>
	2) <a target="_blank" href="http://book.cakephp.org/2.0/en/development/configuration.html#cakephp-core-configuration" style="color:#fff;">I don't / can't use URL rewriting</a>
</p>
<p>
<<?php ?>?php
	if (version_compare(PHP_VERSION, '5.2.8', '>=')):
		echo '<span class="notice success">';
			echo __d('cake_dev', 'Your version of PHP is 5.2.8 or higher.');
		echo '</span>';
	else:
		echo '<span class="notice">';
			echo __d('cake_dev', 'Your version of PHP is too low. You need PHP 5.2.8 or higher to use CakePHP.');
		echo '</span>';
	endif;
?<?php ?>>
</p>
<p>
	<<?php ?>?php
		if (is_writable(TMP)):
			echo '<span class="notice success">';
				echo __d('cake_dev', 'Your tmp directory is writable.');
			echo '</span>';
		else:
			echo '<span class="notice">';
				echo __d('cake_dev', 'Your tmp directory is NOT writable.');
			echo '</span>';
		endif;
	?<?php ?>>
</p>
<p>
	<<?php ?>?php
		$settings = Cache::settings();
		if (!empty($settings)):
			echo '<span class="notice success">';
				echo __d('cake_dev', 'The %s is being used for core caching. To change the config edit APP/Config/core.php ', '<em>'. $settings['engine'] . 'Engine</em>');
			echo '</span>';
		else:
			echo '<span class="notice">';
				echo __d('cake_dev', 'Your cache is NOT working. Please check the settings in APP/Config/core.php');
			echo '</span>';
		endif;
	?<?php ?>>
</p>
<p>
	<<?php ?>?php
		$filePresent = null;
		if (file_exists(APP . 'Config' . DS . 'database.php')):
			echo '<span class="notice success">';
				echo __d('cake_dev', 'Your database configuration file is present.');
				$filePresent = true;
			echo '</span>';
		else:
			echo '<span class="notice">';
				echo __d('cake_dev', 'Your database configuration file is NOT present.');
				echo '<br/>';
				echo __d('cake_dev', 'Rename APP/Config/database.php.default to APP/Config/database.php');
			echo '</span>';
		endif;
	?<?php ?>>
</p>
<<?php ?>?php
if (isset($filePresent)):
	App::uses('ConnectionManager', 'Model');
	try {
		$connected = ConnectionManager::getDataSource('default');
	} catch (Exception $connectionError) {
		$connected = false;
	}
?<?php ?>>
<p>
	<<?php ?>?php
		if ($connected && $connected->isConnected()):
			echo '<span class="notice success">';
	 			echo __d('cake_dev', 'Cake is able to connect to the database.');
			echo '</span>';
		else:
			echo '<span class="notice">';
				echo __d('cake_dev', 'Cake is NOT able to connect to the database.');
				echo '<br /><br />';
				echo $connectionError->getMessage();
			echo '</span>';
		endif;
	?<?php ?>>
</p>
<<?php ?>?php endif;?<?php ?>>
<<?php ?>?php
	App::uses('Validation', 'Utility');
	if (!Validation::alphaNumeric('cakephp')) {
		echo '<p><span class="notice">';
			echo __d('cake_dev', 'PCRE has not been compiled with Unicode support.');
			echo '<br/>';
			echo __d('cake_dev', 'Recompile PCRE with Unicode support by adding <code>--enable-unicode-properties</code> when configuring');
		echo '</span></p>';
	}
?<?php ?>>
<h3><<?php ?>?php echo __d('cake_dev', 'Editing this Page'); ?<?php ?>></h3>
<p>
<<?php ?>?php
echo __d('cake_dev', 'To change the content of this page, create: APP/View/Pages/home.ctp.<br />
To change its layout, create: APP/View/Layouts/default.ctp.<br />
You can also add some CSS styles for your pages at: APP/webroot/css.');
?<?php ?>>
</p>

<h3><<?php ?>?php echo __d('cake_dev', 'Getting Started'); ?<?php ?>></h3>
<p>
	<<?php ?>?php
		echo $this->Html->link(
			sprintf('<strong>%s</strong> %s', __d('cake_dev', 'New'), __d('cake_dev', 'CakePHP 2.0 Docs')),
			'http://book.cakephp.org/2.0/en/',
			array('target' => '_blank', 'escape' => false)
		);
	?<?php ?>>
</p>
<p>
	<<?php ?>?php
		echo $this->Html->link(
			__d('cake_dev', 'The 15 min Blog Tutorial'),
			'http://book.cakephp.org/2.0/en/tutorials-and-examples/blog/blog.html',
			array('target' => '_blank', 'escape' => false)
		);
	?<?php ?>>
</p>

<h3><<?php ?>?php echo __d('cake_dev', 'More about Cake'); ?<?php ?>></h3>
<p>
<<?php ?>?php echo __d('cake_dev', 'CakePHP is a rapid development framework for PHP which uses commonly known design patterns like Active Record, Association Data Mapping, Front Controller and MVC.'); ?<?php ?>>
</p>
<p>
<<?php ?>?php echo __d('cake_dev', 'Our primary goal is to provide a structured framework that enables PHP users at all levels to rapidly develop robust web applications, without any loss to flexibility.'); ?<?php ?>>
</p>

<ul>
	<li><a href="http://cakefoundation.org/"><<?php ?>?php echo __d('cake_dev', 'Cake Software Foundation'); ?<?php ?>> </a>
	<ul><li><<?php ?>?php echo __d('cake_dev', 'Promoting development related to CakePHP'); ?<?php ?>></li></ul></li>
	<li><a href="http://www.cakephp.org"><<?php ?>?php echo __d('cake_dev', 'CakePHP'); ?<?php ?>> </a>
	<ul><li><<?php ?>?php echo __d('cake_dev', 'The Rapid Development Framework'); ?<?php ?>></li></ul></li>
	<li><a href="http://book.cakephp.org"><<?php ?>?php echo __d('cake_dev', 'CakePHP Documentation'); ?<?php ?>> </a>
	<ul><li><<?php ?>?php echo __d('cake_dev', 'Your Rapid Development Cookbook'); ?<?php ?>></li></ul></li>
	<li><a href="http://api20.cakephp.org"><<?php ?>?php echo __d('cake_dev', 'CakePHP API'); ?<?php ?>> </a>
	<ul><li><<?php ?>?php echo __d('cake_dev', 'Quick Reference'); ?<?php ?>></li></ul></li>
	<li><a href="http://bakery.cakephp.org"><<?php ?>?php echo __d('cake_dev', 'The Bakery'); ?<?php ?>> </a>
	<ul><li><<?php ?>?php echo __d('cake_dev', 'Everything CakePHP'); ?<?php ?>></li></ul></li>
	<li><a href="http://live.cakephp.org"><<?php ?>?php echo __d('cake_dev', 'The Show'); ?<?php ?>> </a>
	<ul><li><<?php ?>?php echo __d('cake_dev', 'The Show is a live and archived internet radio broadcast CakePHP-related topics and answer questions live via IRC, Skype, and telephone.'); ?<?php ?>></li></ul></li>
	<li><a href="http://groups.google.com/group/cake-php"><<?php ?>?php echo __d('cake_dev', 'CakePHP Google Group'); ?<?php ?>> </a>
	<ul><li><<?php ?>?php echo __d('cake_dev', 'Community mailing list'); ?<?php ?>></li></ul></li>
	<li><a href="irc://irc.freenode.net/cakephp">irc.freenode.net #cakephp</a>
	<ul><li><<?php ?>?php echo __d('cake_dev', 'Live chat about CakePHP'); ?<?php ?>></li></ul></li>
	<li><a href="http://github.com/cakephp/"><<?php ?>?php echo __d('cake_dev', 'CakePHP Code'); ?<?php ?>> </a>
	<ul><li><<?php ?>?php echo __d('cake_dev', 'For the Development of CakePHP Git repository, Downloads'); ?<?php ?>></li></ul></li>
	<li><a href="http://cakephp.lighthouseapp.com/"><<?php ?>?php echo __d('cake_dev', 'CakePHP Lighthouse'); ?<?php ?>> </a>
	<ul><li><<?php ?>?php echo __d('cake_dev', 'CakePHP Tickets, Wiki pages, Roadmap'); ?<?php ?>></li></ul></li>
</ul>
<?php }} ?>