<?php
/* Smarty version 4.2.1, created on 2024-05-27 14:02:14
  from 'C:\xampp\htdocs\prestashop_website\adminRoot\themes\default\template\controllers\not_found\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6654e6c68de7c0_65977073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2efb70de3c976993ea287c5128274ea280236b47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_website\\adminRoot\\themes\\default\\template\\controllers\\not_found\\content.tpl',
      1 => 1715777794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6654e6c68de7c0_65977073 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['controller']->value)) && !empty($_smarty_tpl->tpl_vars['controller']->value) && $_smarty_tpl->tpl_vars['controller']->value != 'adminnotfound') {?>
	<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The controller %s is missing or invalid.','sprintf'=>array($_smarty_tpl->tpl_vars['controller']->value)),$_smarty_tpl ) );?>
</h1>
<?php }?>
<a class="btn btn-default" href="javascript:window.history.back();">
	<i class="icon-arrow-left"></i>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to the previous page'),$_smarty_tpl ) );?>

</a>
<a class="btn btn-default" href="index.php">
	<i class="icon-dashboard"></i>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to the dashboard'),$_smarty_tpl ) );?>

</a>
<?php }
}
