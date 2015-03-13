<?php /* Smarty version 3.1.22-dev/6, created on 2015-02-08 23:53:45
         compiled from "/Users/anoChick/Projects/waterflea/fuel/app/views/login.smarty" */ ?>
<?php
/*%%SmartyHeaderCode:161701670354d77879f3c7d0_72186017%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84cf8828344f2da008a6dcc2d4065e19c1d9c682' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/login.smarty',
      1 => 1423321558,
      2 => 'file',
    ),
    '788e73c1f3b203f79404975603a28d1a96d06b69' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/common/template.smarty',
      1 => 1423376940,
      2 => 'file',
    ),
    '4e99ee072ad3fe0d589f0a0d2058a3c6c40035d2' => 
    array (
      0 => '4e99ee072ad3fe0d589f0a0d2058a3c6c40035d2',
      1 => 0,
      2 => 'string',
    ),
    '8ee6ac66d4fdb05d228c7dd3c35e7086f74597ce' => 
    array (
      0 => '8ee6ac66d4fdb05d228c7dd3c35e7086f74597ce',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '161701670354d77879f3c7d0_72186017',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/6',
  'unifunc' => 'content_54d7787a0623d2_12991134',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54d7787a0623d2_12991134')) {function content_54d7787a0623d2_12991134 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '161701670354d77879f3c7d0_72186017';
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
$_smarty_tpl->properties['nocache_hash'] = '161701670354d77879f3c7d0_72186017';
?>

	</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ('common/topnav.smarty', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		<?php
$_smarty_tpl->properties['nocache_hash'] = '161701670354d77879f3c7d0_72186017';
?>

<div class='container'>

	<form action="/login" method="post">
		<div class="form-horizontal">
			<h3>ログイン</h3>
			<hr />
			<div class="col-md-12">
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label" for="username"> ユーザ名 or メールアドレス </label>
						<input class="form-control "  name= "username" type="text" value="">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label class="control-label" for="password">パスワード</label>
						<input class="form-control"name= "password" type="password" value="">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
					<button type="submit" class="btn btn-default pull-right">ログイン</button>

					</div>
				</div>
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