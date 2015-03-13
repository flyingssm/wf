<?php /* Smarty version 3.1.22-dev/6, created on 2015-02-09 03:40:24
         compiled from "/Users/anoChick/Projects/waterflea/fuel/app/views/book/list.smarty" */ ?>
<?php
/*%%SmartyHeaderCode:17089968954d7ad982ec385_08020767%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44a60f9389e6baccd3e6a73d1e521ff7cded3b73' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/book/list.smarty',
      1 => 1423420822,
      2 => 'file',
    ),
    '788e73c1f3b203f79404975603a28d1a96d06b69' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/common/template.smarty',
      1 => 1423376940,
      2 => 'file',
    ),
    '765e256695c9a80b70b7c760e0d89189a00d0156' => 
    array (
      0 => '765e256695c9a80b70b7c760e0d89189a00d0156',
      1 => 0,
      2 => 'string',
    ),
    '847c9fa9df77709108f1a1bfb8e7dfd18bdd548b' => 
    array (
      0 => '847c9fa9df77709108f1a1bfb8e7dfd18bdd548b',
      1 => 0,
      2 => 'string',
    ),
    '9f11f931c4cbfa5ae65937e78af20ac13b3030ad' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/common/life_card1.smarty',
      1 => 1423419641,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17089968954d7ad982ec385_08020767',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/6',
  'unifunc' => 'content_54d7ad98441ec6_50151020',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54d7ad98441ec6_50151020')) {function content_54d7ad98441ec6_50151020 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '17089968954d7ad982ec385_08020767';
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
$_smarty_tpl->properties['nocache_hash'] = '17089968954d7ad982ec385_08020767';
?>

	</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ('common/topnav.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php
$_smarty_tpl->properties['nocache_hash'] = '17089968954d7ad982ec385_08020767';
?>

<div class='container'>
	<h3 class='page-header'>図鑑</h3>
	<h4>全 <?php echo Pagination::instance('lifes')->total_items;?>
 件<small>  <?php echo Pagination::instance('lifes')->per_page;?>
/<?php echo Pagination::instance('lifes')->total_pages;?>
ページ</small></h4>

	<div class='col-md-9'>
		<?php  $_smarty_tpl->tpl_vars['life'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['life']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lifes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['life']->key => $_smarty_tpl->tpl_vars['life']->value) {
$_smarty_tpl->tpl_vars['life']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['life']->value['img_url']) {?>
		<?php /*  Call merged included template "common/life_card1.smarty" */
echo $_smarty_tpl->getInlineSubTemplate('common/life_card1.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '64667246654d7ad9842a401_68180298', 'content_54d7ad98429c59_43018701');
/*  End of included template "common/life_card1.smarty" */?>

		<?php }?>
		<?php } ?>
		<div class='row '>
		<div class='col-md-12 text-center '>
		<?php echo Pagination::instance('lifes');?>

		</div>
		</div>
	</div>
			<div class='col-md-3'><a href='/book/write' class='btn btn-info'>生物ページを書く</a>
		</div>
</div>

		<div id='alertBox'>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('common/message_receptor.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php echo Asset::js('bootstrap.js');?>

	</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:64667246654d7ad9842a401_68180298%%*/
function content_54d7ad98429c59_43018701 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '64667246654d7ad9842a401_68180298';
?>

  <div class="col-sm-6">
    <div class="thumbnail">

  <h4 style='height : 30px;'><?php echo $_smarty_tpl->tpl_vars['life']->value['name_jp'];?>
<small><br><?php echo $_smarty_tpl->tpl_vars['life']->value['name_en'];?>
　</small></h4>
      <img src="/imgs/<?php echo $_smarty_tpl->tpl_vars['life']->value['img_src'];?>
" alt="..." class="img-thumbnail" style='height:200px;'>
      <div class="caption">
		</div>
    </div>
  </div><?php
/*/%%SmartyNocache:64667246654d7ad9842a401_68180298%%*/
}
?>