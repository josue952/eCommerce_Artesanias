<?php
/* Smarty version 4.2.1, created on 2024-05-20 14:50:43
  from 'C:\xampp\htdocs\prestashop_website\adminRoot\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_664bb7a394c171_54832603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4574e35544af69b2a07f7153aa32c8c157faafe4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_website\\adminRoot\\themes\\new-theme\\template\\content.tpl',
      1 => 1715777794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664bb7a394c171_54832603 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
