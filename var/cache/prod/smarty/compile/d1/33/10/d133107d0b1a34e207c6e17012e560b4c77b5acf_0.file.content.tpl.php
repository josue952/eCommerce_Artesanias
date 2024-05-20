<?php
/* Smarty version 4.2.1, created on 2024-05-20 14:38:55
  from 'C:\xampp\htdocs\prestashop_website\adminPepe\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_664bb4df89ae60_78966048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd133107d0b1a34e207c6e17012e560b4c77b5acf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_website\\adminPepe\\themes\\new-theme\\template\\content.tpl',
      1 => 1715777794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664bb4df89ae60_78966048 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
