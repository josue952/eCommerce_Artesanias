<?php
/* Smarty version 4.2.1, created on 2024-05-20 14:38:59
  from 'C:\xampp\htdocs\prestashop_website\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_664bb4e33d60e5_66189540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bc0918a7b9f5a87155aec1f81113ea6ddfd9088' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_website\\themes\\classic\\templates\\page.tpl',
      1 => 1666730272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664bb4e33d60e5_66189540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1378005894664bb4e33d2391_23012513', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1481362365664bb4e33d2b17_16473328 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_2107397262664bb4e33d2706_85627878 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1481362365664bb4e33d2b17_16473328', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_372094480664bb4e33d4817_18675933 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1477214018664bb4e33d4cb3_68341545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1014161610664bb4e33d44d6_97057958 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_372094480664bb4e33d4817_18675933', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1477214018664bb4e33d4cb3_68341545', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1146124190664bb4e33d5809_45075578 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_172454344664bb4e33d5527_65395628 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1146124190664bb4e33d5809_45075578', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1378005894664bb4e33d2391_23012513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1378005894664bb4e33d2391_23012513',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2107397262664bb4e33d2706_85627878',
  ),
  'page_title' => 
  array (
    0 => 'Block_1481362365664bb4e33d2b17_16473328',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1014161610664bb4e33d44d6_97057958',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_372094480664bb4e33d4817_18675933',
  ),
  'page_content' => 
  array (
    0 => 'Block_1477214018664bb4e33d4cb3_68341545',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_172454344664bb4e33d5527_65395628',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1146124190664bb4e33d5809_45075578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2107397262664bb4e33d2706_85627878', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1014161610664bb4e33d44d6_97057958', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172454344664bb4e33d5527_65395628', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
