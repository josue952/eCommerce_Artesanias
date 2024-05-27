<?php
/* Smarty version 4.2.1, created on 2024-05-27 14:30:22
  from 'C:\xampp\htdocs\prestashop_website\adminRoot\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6654ed5e31be19_23335082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45623dfd200c642b6fe384a4ab0cb740ca94b943' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_website\\adminRoot\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1715777794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6654ed5e31be19_23335082 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
