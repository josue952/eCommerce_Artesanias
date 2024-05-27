<?php
/* Smarty version 4.2.1, created on 2024-05-27 14:02:24
  from 'C:\xampp\htdocs\prestashop_website\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6654e6d0e07a72_00546859',
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
function content_6654e6d0e07a72_00546859 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashop_website\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\f4\\1b\\8c\\f41b8c5001a1bdf6250e99f94e0a47401003e01b_2.file.helpers.tpl.php',
    'uid' => 'f41b8c5001a1bdf6250e99f94e0a47401003e01b',
    'call_name' => 'smarty_template_function_renderLogo_1494638016654e6d0dffc55_32004604',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1494638016654e6d0dffc55_32004604 */
if (!function_exists('smarty_template_function_renderLogo_1494638016654e6d0dffc55_32004604')) {
function smarty_template_function_renderLogo_1494638016654e6d0dffc55_32004604(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_1494638016654e6d0dffc55_32004604 */
}
