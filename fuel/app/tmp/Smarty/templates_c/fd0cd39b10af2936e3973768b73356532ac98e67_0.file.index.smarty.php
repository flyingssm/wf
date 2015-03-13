<?php /* Smarty version 3.1.22-dev/6, created on 2015-02-08 15:58:53
         compiled from "/Users/anoChick/Projects/waterflea/fuel/app/views/book/index.smarty" */ ?>
<?php
/*%%SmartyHeaderCode:94198565154d7092d28f840_35193550%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd0cd39b10af2936e3973768b73356532ac98e67' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/book/index.smarty',
      1 => 1422779479,
      2 => 'file',
    ),
    '788e73c1f3b203f79404975603a28d1a96d06b69' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/common/template.smarty',
      1 => 1423376940,
      2 => 'file',
    ),
    '775c2fffc220df3bd3725b9097d95135a4a77c1f' => 
    array (
      0 => '775c2fffc220df3bd3725b9097d95135a4a77c1f',
      1 => 0,
      2 => 'string',
    ),
    '62604ed1e815c874287fff752f8067040d6639e6' => 
    array (
      0 => '62604ed1e815c874287fff752f8067040d6639e6',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '94198565154d7092d28f840_35193550',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/6',
  'unifunc' => 'content_54d7092d2d79d9_33030958',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54d7092d2d79d9_33030958')) {function content_54d7092d2d79d9_33030958 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '94198565154d7092d28f840_35193550';
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
$_smarty_tpl->properties['nocache_hash'] = '94198565154d7092d28f840_35193550';
?>

	</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ('common/topnav.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php
$_smarty_tpl->properties['nocache_hash'] = '94198565154d7092d28f840_35193550';
?>


<foreach $random_lifes as $life>
</foreach>




		<div id='alertBox'>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('common/message_receptor.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php echo Asset::js('bootstrap.js');?>

	</body>
</html><?php }
}
?>