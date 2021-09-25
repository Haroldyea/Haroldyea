<?php
/* Smarty version 3.1.39, created on 2021-09-25 15:49:48
  from '/var/www/goparking/htdocs/admin331imdo04/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614f8b6cdcf311_19220281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '637ac4fb5b771df7d65f0301e485059a4d45188f' => 
    array (
      0 => '/var/www/goparking/htdocs/admin331imdo04/themes/default/template/content.tpl',
      1 => 1632602316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614f8b6cdcf311_19220281 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
