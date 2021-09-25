<?php
/* Smarty version 3.1.39, created on 2021-09-25 15:47:38
  from '/var/www/goparking/htdocs/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614f8aea011488_89968139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96779ec3f59a7be4dffa604f7e879b699f67b179' => 
    array (
      0 => '/var/www/goparking/htdocs/themes/classic/templates/page.tpl',
      1 => 1632602315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614f8aea011488_89968139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163882638614f8aea00c831_05586466', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1360265096614f8aea00d2f8_62948824 extends Smarty_Internal_Block
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
class Block_1159805768614f8aea00ccc8_16984973 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1360265096614f8aea00d2f8_62948824', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1387295720614f8aea00ef49_58498837 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1790825165614f8aea00f724_31646159 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_695026371614f8aea00e770_87076157 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1387295720614f8aea00ef49_58498837', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1790825165614f8aea00f724_31646159', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_199483582614f8aea010643_28011578 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1068038809614f8aea010191_18474490 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199483582614f8aea010643_28011578', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_163882638614f8aea00c831_05586466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_163882638614f8aea00c831_05586466',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1159805768614f8aea00ccc8_16984973',
  ),
  'page_title' => 
  array (
    0 => 'Block_1360265096614f8aea00d2f8_62948824',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_695026371614f8aea00e770_87076157',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1387295720614f8aea00ef49_58498837',
  ),
  'page_content' => 
  array (
    0 => 'Block_1790825165614f8aea00f724_31646159',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1068038809614f8aea010191_18474490',
  ),
  'page_footer' => 
  array (
    0 => 'Block_199483582614f8aea010643_28011578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1159805768614f8aea00ccc8_16984973', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_695026371614f8aea00e770_87076157', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1068038809614f8aea010191_18474490', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
