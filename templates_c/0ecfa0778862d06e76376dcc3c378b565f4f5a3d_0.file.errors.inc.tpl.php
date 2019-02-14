<?php
/* Smarty version 3.1.32, created on 2019-02-14 09:22:30
  from 'C:\xampp\htdocs\mylittleforum\themes\default\subtemplates\errors.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c6533560689d3_32036597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ecfa0778862d06e76376dcc3c378b565f4f5a3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mylittleforum\\themes\\default\\subtemplates\\errors.inc.tpl',
      1 => 1550072548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6533560689d3_32036597 (Smarty_Internal_Template $_smarty_tpl) {
?><p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'error_headline');?>
</p>
<ul>
<?php
$__section_mysec_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_mysec_0_total = $__section_mysec_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_mysec'] = new Smarty_Variable(array());
if ($__section_mysec_0_total !== 0) {
for ($__section_mysec_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] = 0; $__section_mysec_0_iteration <= $__section_mysec_0_total; $__section_mysec_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']++){
$_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] : null)]);?>
<li><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value);?>
</li>
<?php
}
}
?>
</ul>
<?php }
}
