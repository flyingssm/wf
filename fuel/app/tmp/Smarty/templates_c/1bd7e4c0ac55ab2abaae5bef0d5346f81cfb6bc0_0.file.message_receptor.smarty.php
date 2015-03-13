<?php /* Smarty version 3.1.22-dev/6, created on 2015-02-08 15:55:46
         compiled from "/Users/anoChick/Projects/waterflea/fuel/app/views/common/message_receptor.smarty" */ ?>
<?php
/*%%SmartyHeaderCode:20656332754d70872562f99_09146801%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bd7e4c0ac55ab2abaae5bef0d5346f81cfb6bc0' => 
    array (
      0 => '/Users/anoChick/Projects/waterflea/fuel/app/views/common/message_receptor.smarty',
      1 => 1423378538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20656332754d70872562f99_09146801',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'msgs' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.22-dev/6',
  'unifunc' => 'content_54d708725ad1f6_02399173',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_54d708725ad1f6_02399173')) {function content_54d708725ad1f6_02399173 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '20656332754d70872562f99_09146801';
?>
<div id='messageReceptor' class='hide'>
<?php if (isset($_smarty_tpl->tpl_vars['msgs']->value)) {?>
<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msgs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
<span class='hide' data-status="<?php echo $_smarty_tpl->tpl_vars['msg']->value['status'];?>
" data-text="<?php echo $_smarty_tpl->tpl_vars['msg']->value['text'];?>
">
<?php } ?>
<?php }?>
<div><?php }
}
?>