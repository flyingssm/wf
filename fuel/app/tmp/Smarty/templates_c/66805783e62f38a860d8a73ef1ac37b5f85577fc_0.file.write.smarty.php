<?php /* Smarty version 3.1.22-dev/6, created on 2015-02-08 15:29:03
         compiled from "/Users/anoChick/Projects/waterflea/fuel/app/views/book/write.smarty" */ ?>
<?php
/*%%SmartyHeaderCode:129085580054d7022f50c0c0_25961140%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66805783e62f38a860d8a73ef1ac37b5f85577fc' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/book/write.smarty',
      1 => 1423372618,
      2 => 'file',
    ),
    '788e73c1f3b203f79404975603a28d1a96d06b69' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/common/template.smarty',
      1 => 1423376940,
      2 => 'file',
    ),
    '7ef3f63dd32edb8aa185692a7d79019d2eae5e38' => 
    array (
      0 => '7ef3f63dd32edb8aa185692a7d79019d2eae5e38',
      1 => 0,
      2 => 'string',
    ),
    'e0d10687ee6505eb0e8fd8f525196fc967020f30' => 
    array (
      0 => 'e0d10687ee6505eb0e8fd8f525196fc967020f30',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '129085580054d7022f50c0c0_25961140',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/6',
  'unifunc' => 'content_54d7022f587394_51304709',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54d7022f587394_51304709')) {function content_54d7022f587394_51304709 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '129085580054d7022f50c0c0_25961140';
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
$_smarty_tpl->properties['nocache_hash'] = '129085580054d7022f50c0c0_25961140';
?>

	</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ('common/topnav.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php
$_smarty_tpl->properties['nocache_hash'] = '129085580054d7022f50c0c0_25961140';
?>

<div class='container'>
<h3>新しい生物ページを書く</h3>
<form enctype="multipart/form-data" method='POST'>
  <div class="form-group">
    <label for="name">生物名称</label>
    <input type="text" class="form-control" name='name'>
  </div>
  <div class="form-group">
    <label for="name">界</label>
    <input type="text" class="form-control" name='kingdom'>
  </div>
  <div class="form-group">
    <label for="name">門</label>
    <input type="text" class="form-control" name='phylum'>
  </div>
    <div class="form-group">
    <label for="name">綱</label>
    <input type="text" class="form-control" name='class'>
  </div>
    <div class="form-group">
    <label for="name">目</label>
    <input type="text" class="form-control" name='order'>
  </div>
    <div class="form-group">
    <label for="name">科</label>
    <input type="text" class="form-control" name='family'>
  </div>
    <div class="form-group">
    <label for="name">属</label>
    <input type="text" class="form-control" name='genus'>
  </div>
    <div class="form-group">
    <label for="name">種</label>
    <input type="text" class="form-control" name='species'>
  </div>
  <div class="form-group">
    <label for="image">画像</label>
    <input type="file" name='image'>
  </div>

  <button type="submit" class="btn btn-default">送信</button>
</form>
</div>




		<div id='alertBox'>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('common/message_receptor.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php echo Asset::js('bootstrap.js');?>

	</body>
</html><?php }
}
?>