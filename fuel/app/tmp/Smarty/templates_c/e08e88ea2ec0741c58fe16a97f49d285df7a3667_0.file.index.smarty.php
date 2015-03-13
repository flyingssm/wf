<?php /* Smarty version 3.1.22-dev/6, created on 2015-02-08 15:58:48
         compiled from "/Users/anoChick/Projects/waterflea/fuel/app/views/index.smarty" */ ?>
<?php
/*%%SmartyHeaderCode:198341529954d70928461ac3_59601754%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e08e88ea2ec0741c58fe16a97f49d285df7a3667' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/index.smarty',
      1 => 1423317420,
      2 => 'file',
    ),
    '788e73c1f3b203f79404975603a28d1a96d06b69' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/common/template.smarty',
      1 => 1423376940,
      2 => 'file',
    ),
    '7991fe782c74401a17e30fa7992e1b109500735d' => 
    array (
      0 => '7991fe782c74401a17e30fa7992e1b109500735d',
      1 => 0,
      2 => 'string',
    ),
    '97402d687229d2891685e7ede626f76b86810e86' => 
    array (
      0 => '97402d687229d2891685e7ede626f76b86810e86',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '198341529954d70928461ac3_59601754',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/6',
  'unifunc' => 'content_54d709284decd4_71130006',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54d709284decd4_71130006')) {function content_54d709284decd4_71130006 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '198341529954d70928461ac3_59601754';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja-jp" xml:lang="ja-jp">
	<head>
		<?php echo Asset::css('bootstrap.css');?>

		<?php echo Asset::css('style.css');?>

		<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo Asset::js('wf.js');?>

		<?php
$_smarty_tpl->properties['nocache_hash'] = '198341529954d70928461ac3_59601754';
?>

	</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ('common/topnav.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php
$_smarty_tpl->properties['nocache_hash'] = '198341529954d70928461ac3_59601754';
?>




		<div id='alertBox'>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('common/message_receptor.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php echo Asset::js('bootstrap.js');?>

	</body>
</html><?php }
}
?>