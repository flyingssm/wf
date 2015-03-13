<?php /* Smarty version 3.1.22-dev/6, created on 2015-02-12 00:59:26
         compiled from "/Users/anoChick/Projects/waterflea/fuel/app/views/pet/index.smarty" */ ?>
<?php
/*%%SmartyHeaderCode:211881358154db7c5eee8f44_19690320%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb183c1ab61b54ba86f81a45a957108fca824b6' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/pet/index.smarty',
      1 => 1423670263,
      2 => 'file',
    ),
    '788e73c1f3b203f79404975603a28d1a96d06b69' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/common/template.smarty',
      1 => 1423376940,
      2 => 'file',
    ),
    '2c70d39b8d1e8460763d8de933744a675c4d69c3' => 
    array (
      0 => '2c70d39b8d1e8460763d8de933744a675c4d69c3',
      1 => 0,
      2 => 'string',
    ),
    '15fc048ae9e58da2b568db1b4f62b1365d7b4e80' => 
    array (
      0 => '15fc048ae9e58da2b568db1b4f62b1365d7b4e80',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '211881358154db7c5eee8f44_19690320',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/6',
  'unifunc' => 'content_54db7c5f03f677_08589787',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54db7c5f03f677_08589787')) {function content_54db7c5f03f677_08589787 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '211881358154db7c5eee8f44_19690320';
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
$_smarty_tpl->properties['nocache_hash'] = '211881358154db7c5eee8f44_19690320';
?>

	</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ('common/topnav.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php
$_smarty_tpl->properties['nocache_hash'] = '211881358154db7c5eee8f44_19690320';
?>

<div class='container'>
	<h3 class='page-header'>ペット</h3>
	<?php $_smarty_tpl->tpl_vars['is'] = new Smarty_Variable(array(1,2,3), null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['is']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
	<div class='col-md-4'>
		<div class="thumbnail pet-room my-pet" data-userid=<?php if ($_smarty_tpl->tpl_vars['user_data']->value) {
echo $_smarty_tpl->tpl_vars['user_data']->value['user_id'];
}?> data-roomno=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
>
			<div class='pet-empty'>
				<h4 style="height : 30px;">ペットの部屋<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</h4>
				<div class="caption">まだペットを飼っていません。
				</div>
				<div class='text-center'>
				<button class='btn btn-success generate-pet-button' data-room-no='<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
'>新しくペットを飼う</button>
				</div>
			</div>
			<div class='pet-entity hide text-center'>
				<h4 style="height : 30px;"><small><br>　</small></h4>
				<img src="" alt="..." class="img-thumbnail" style="height:200px;">
				<div class="caption">
				<p class='pet-status-lv'></p>
				<p class='pet-status-strength'></p>
				<p class='pet-status-inteligence'></p>
				<p class='pet-status-fertility'></p>
				<p class='pet-status-lifespan'></p>
				</div>
								<div class='text-center'>
				<button class='btn btn-danger release-pet-button' data-room-no='<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
'>ペットを逃がす</button>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
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