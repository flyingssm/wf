<?php /* Smarty version 3.1.22-dev/6, created on 2015-02-13 00:23:59
         compiled from "/Users/anoChick/Projects/waterflea/fuel/app/views/common/topnav.smarty" */ ?>
<?php
/*%%SmartyHeaderCode:88969346254dcc58fdccc22_09624746%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d5a966af49325c7ff0ad0816b5e60b9fa7d28cd' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/common/topnav.smarty',
      1 => 1423754637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88969346254dcc58fdccc22_09624746',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/6',
  'unifunc' => 'content_54dcc58fe248a0_56767887',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54dcc58fe248a0_56767887')) {function content_54dcc58fe248a0_56767887 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '88969346254dcc58fdccc22_09624746';
?>

<div class="modal fade" id='createAccountModal' tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">アカウント作成</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">ユーザ名:</label>
            <input type="text" class="form-control" id="registerAccountUsername">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">メールアドレス:</label>
            <input type="text" class="form-control" id="registerAccountEmail">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">パスワード:</label>
            <input type="text" class="form-control" id="registerAccountPassword">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">キャンセル</button>
        <button type="button" class="btn btn-primary" id='registerAccount'>登録</button>
      </div>
    </div>
  </div>
</div>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">WF</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li><a href="/pet">ペット</a></li>
        <li><a href="/arena">闘技場</a></li>
      </ul>
      <!--<form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/book/list">図鑑</a></li>
        
        <?php if (empty($_smarty_tpl->tpl_vars['user_data']->value)) {?>
        <li><button class='btn btn-info btn-xs' id='createAccountButton' data-toggle="modal" data-target="#createAccountModal">アカウント作成</button></li>
        <li class="dropdown">
          <a href="/login">ログイン </a>

        </li>
        <?php } else { ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['user_data']->value['screen_name'];?>
<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            <li class="divider"></li>
            <li><a href="/logout">ログアウト</a></li>
          </ul>
        </li>
        <?php }?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><?php }
}
?>