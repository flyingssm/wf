<?php /* Smarty version 3.1.22-dev/6, created on 2015-02-12 01:50:04
         compiled from "/Users/anoChick/Projects/waterflea/fuel/app/views/arena/index.smarty" */ ?>
<?php
/*%%SmartyHeaderCode:188494794354db883c6de6d3_72944752%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73bfd0f3f152373a9f719ca94f63de2ae9f98839' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/arena/index.smarty',
      1 => 1423673397,
      2 => 'file',
    ),
    '788e73c1f3b203f79404975603a28d1a96d06b69' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/common/template.smarty',
      1 => 1423376940,
      2 => 'file',
    ),
    'e511286c8d213d0b3c4638b8a903fc40d5015540' => 
    array (
      0 => 'e511286c8d213d0b3c4638b8a903fc40d5015540',
      1 => 0,
      2 => 'string',
    ),
    'fd7d848e81d0fc450c45df14c509466f529afe37' => 
    array (
      0 => 'fd7d848e81d0fc450c45df14c509466f529afe37',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '188494794354db883c6de6d3_72944752',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/6',
  'unifunc' => 'content_54db883c731fe3_22940360',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54db883c731fe3_22940360')) {function content_54db883c731fe3_22940360 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '188494794354db883c6de6d3_72944752';
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
$_smarty_tpl->properties['nocache_hash'] = '188494794354db883c6de6d3_72944752';
?>

	</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ('common/topnav.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php
$_smarty_tpl->properties['nocache_hash'] = '188494794354db883c6de6d3_72944752';
?>

<div class='container'>
	<h3 class='page-header'>闘技場</h3>
	<form action='/arena/result' method = 'GET'>
		<div class='col-md-12'>
		<select class="form-control" name='room_no'>

		<?php  $_smarty_tpl->tpl_vars['pet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mypets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pet']->key => $_smarty_tpl->tpl_vars['pet']->value) {
$_smarty_tpl->tpl_vars['pet']->_loop = true;
?>
			<option value ="<?php echo $_smarty_tpl->tpl_vars['pet']->value['pet']['room_no'];?>
" ><?php echo $_smarty_tpl->tpl_vars['pet']->value['life']['name_jp'];?>
 (Lv.<?php echo $_smarty_tpl->tpl_vars['pet']->value['pet']['level'];?>
)</option>
		<?php } ?>
</select>
	</div>
	<div class='col-md-12'>
		<button class='btn btn-info'>ランダム対戦</button>
	</div>
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