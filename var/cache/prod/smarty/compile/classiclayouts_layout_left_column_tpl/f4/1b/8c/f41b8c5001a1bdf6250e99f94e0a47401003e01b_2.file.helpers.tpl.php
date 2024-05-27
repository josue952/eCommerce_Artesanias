<?php
/* Smarty version 4.2.1, created on 2024-05-27 14:58:28
  from 'C:\xampp\htdocs\prestashop_website\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6654f3f4495584_81517015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f41b8c5001a1bdf6250e99f94e0a47401003e01b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_website\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1666730272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6654f3f4495584_81517015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashop_website\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\f4\\1b\\8c\\f41b8c5001a1bdf6250e99f94e0a47401003e01b_2.file.helpers.tpl.php',
    'uid' => 'f41b8c5001a1bdf6250e99f94e0a47401003e01b',
    'call_name' => 'smarty_template_function_renderLogo_19618585566654f3f448f5f9_56213397',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_19618585566654f3f448f5f9_56213397 */
if (!function_exists('smarty_template_function_renderLogo_19618585566654f3f448f5f9_56213397')) {
function smarty_template_function_renderLogo_19618585566654f3f448f5f9_56213397(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_19618585566654f3f448f5f9_56213397 */
}
