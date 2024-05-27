<?php
/* Smarty version 4.2.1, created on 2024-05-27 14:02:20
  from 'C:\xampp\htdocs\prestashop_website\modules\psxdesign\views\templates\hook\displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6654e6cc929b42_73108854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a28a71394ce6bbe20d279f3284a582370c72c4ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_website\\modules\\psxdesign\\views\\templates\\hook\\displayModuleTag.tpl',
      1 => 1715777794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6654e6cc929b42_73108854 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
