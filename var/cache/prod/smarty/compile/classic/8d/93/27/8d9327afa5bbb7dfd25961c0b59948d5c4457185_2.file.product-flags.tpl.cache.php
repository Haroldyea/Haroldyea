<?php
/* Smarty version 3.1.39, created on 2021-09-25 15:47:37
  from '/var/www/goparking/htdocs/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614f8ae9ed3200_26150245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d9327afa5bbb7dfd25961c0b59948d5c4457185' => 
    array (
      0 => '/var/www/goparking/htdocs/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1632602315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614f8ae9ed3200_26150245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '691060693614f8ae9ed1229_41776523';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_459945957614f8ae9ed18d8_06119693', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_459945957614f8ae9ed18d8_06119693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_459945957614f8ae9ed18d8_06119693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
