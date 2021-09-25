<?php
/* Smarty version 3.1.39, created on 2021-09-25 15:47:38
  from '/var/www/goparking/htdocs/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614f8aea009584_15632274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e883e63b8c992f5c1f4c3cf34cd4f4c0b7a4064e' => 
    array (
      0 => '/var/www/goparking/htdocs/themes/classic/templates/index.tpl',
      1 => 1632602315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614f8aea009584_15632274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209496881614f8aea007773_13089448', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1773477309614f8aea007b65_64208481 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_970473437614f8aea008480_99545501 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_168477336614f8aea0081e9_25627972 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_970473437614f8aea008480_99545501', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_209496881614f8aea007773_13089448 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_209496881614f8aea007773_13089448',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1773477309614f8aea007b65_64208481',
  ),
  'page_content' => 
  array (
    0 => 'Block_168477336614f8aea0081e9_25627972',
  ),
  'hook_home' => 
  array (
    0 => 'Block_970473437614f8aea008480_99545501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1773477309614f8aea007b65_64208481', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168477336614f8aea0081e9_25627972', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
