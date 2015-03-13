<?php /* Smarty version 3.1.22-dev/6, created on 2015-02-13 00:51:03
         compiled from "/Users/anoChick/Projects/waterflea/fuel/app/views/arena/result.smarty" */ ?>
<?php
/*%%SmartyHeaderCode:31016354754dccbe7d29fb2_14940872%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6732f825a2c20ebf6f679339806f3a5eef89969e' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/arena/result.smarty',
      1 => 1423756257,
      2 => 'file',
    ),
    '788e73c1f3b203f79404975603a28d1a96d06b69' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/common/template.smarty',
      1 => 1423376940,
      2 => 'file',
    ),
    '0a5c15653b928e663ae44af5b70673d4633743a4' => 
    array (
      0 => '0a5c15653b928e663ae44af5b70673d4633743a4',
      1 => 0,
      2 => 'string',
    ),
    '5409bd728b3c65d0a433186ba46a53e05ad679e2' => 
    array (
      0 => '5409bd728b3c65d0a433186ba46a53e05ad679e2',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '31016354754dccbe7d29fb2_14940872',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/6',
  'unifunc' => 'content_54dccbe7da9b04_07356877',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54dccbe7da9b04_07356877')) {function content_54dccbe7da9b04_07356877 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '31016354754dccbe7d29fb2_14940872';
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
$_smarty_tpl->properties['nocache_hash'] = '31016354754dccbe7d29fb2_14940872';
?>

	</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ('common/topnav.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php
$_smarty_tpl->properties['nocache_hash'] = '31016354754dccbe7d29fb2_14940872';
?>

<div class='container'>

	<h3 class='page-header'>闘技場</h3>
	<div class='col-md-6'>
		<div class="thumbnail pet-room" >
			<div class='pet-entity text-center'>
<h5>自分</h5><h4><?php echo $_smarty_tpl->tpl_vars['mypet']->value['life']['name_jp'];?>
</h4>
				<img src="/imgs/<?php echo $_smarty_tpl->tpl_vars['mypet']->value['life']['img_src'];?>
" alt="..." class="img-thumbnail" style="height:200px;">
				<div class="caption">
				<p class='pet-status-lv'>Lv.<?php echo $_smarty_tpl->tpl_vars['mypet']->value['pet']['level'];?>
</p>
				<p class='pet-status-strength'>強さ : <?php echo $_smarty_tpl->tpl_vars['mypet']->value['pet']['strength'];?>
</p>
				<p class='pet-status-inteligence'>賢さ : <?php echo $_smarty_tpl->tpl_vars['mypet']->value['pet']['inteligence'];?>
</p>
				<p class='pet-status-fertility'>繁殖力 : <?php echo $_smarty_tpl->tpl_vars['mypet']->value['pet']['fertility'];?>
</p>
				<p class='pet-status-lifespan'>寿命 : <?php echo $_smarty_tpl->tpl_vars['mypet']->value['pet']['lifespan'];?>
</p>
				</div>
			</div>
		</div>

	</div>



	<div class='col-md-6'>

		<div class="thumbnail pet-room" >
			<div class='pet-entity text-center'>
<h5>相手</h5><h4><?php echo $_smarty_tpl->tpl_vars['enemypet']->value['life']['name_jp'];?>
</h4>
				<img src="/imgs/<?php echo $_smarty_tpl->tpl_vars['enemypet']->value['life']['img_src'];?>
" alt="..." class="img-thumbnail" style="height:200px;">
				<div class="caption">
				<p class='pet-status-lv'>Lv.<?php echo $_smarty_tpl->tpl_vars['enemypet']->value['pet']['level'];?>
</p>
				<p class='pet-status-strength'>強さ : <?php echo $_smarty_tpl->tpl_vars['enemypet']->value['pet']['strength'];?>
</p>
				<p class='pet-status-inteligence'>賢さ : <?php echo $_smarty_tpl->tpl_vars['enemypet']->value['pet']['inteligence'];?>
</p>
				<p class='pet-status-fertility'>繁殖力 : <?php echo $_smarty_tpl->tpl_vars['enemypet']->value['pet']['fertility'];?>
</p>
				<p class='pet-status-lifespan'>寿命 : <?php echo $_smarty_tpl->tpl_vars['enemypet']->value['pet']['lifespan'];?>
</p>
				</div>
			</div>
		</div>
	</div>
		<div class='col-md-12'>
		<hr>
		<div class='battle-log'>
			<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['battle_log']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
			<p class="<?php echo $_smarty_tpl->tpl_vars['line']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['line']->value['text'];?>
</p>
			<?php } ?>


		</div>

	</div>
	<div class='col-md-12'>
		<hr>
		<a href = '/arena' class='btn btn-default'>闘技場トップへ戻る</a>

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
?>