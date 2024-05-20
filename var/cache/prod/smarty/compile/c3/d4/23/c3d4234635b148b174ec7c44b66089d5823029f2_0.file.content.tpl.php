<?php
/* Smarty version 4.2.1, created on 2024-05-20 14:47:34
  from 'C:\xampp\htdocs\prestashop_website\adminRoot\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_664bb6e6a5ab44_49396344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3d4234635b148b174ec7c44b66089d5823029f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_website\\adminRoot\\themes\\default\\template\\content.tpl',
      1 => 1715777794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664bb6e6a5ab44_49396344 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
