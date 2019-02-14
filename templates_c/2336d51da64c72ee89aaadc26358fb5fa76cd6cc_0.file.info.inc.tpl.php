<?php
/* Smarty version 3.1.32, created on 2019-02-13 16:33:42
  from 'C:\xampp\htdocs\mylittleforum\themes\default\subtemplates\info.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c6446e6cd4f46_32533215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2336d51da64c72ee89aaadc26358fb5fa76cd6cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mylittleforum\\themes\\default\\subtemplates\\info.inc.tpl',
      1 => 1550072548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6446e6cd4f46_32533215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\mylittleforum\\modules\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ($_smarty_tpl->tpl_vars['lang_section']->value) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['language_file']->value, $_smarty_tpl->tpl_vars['lang_section']->value, 0);
}
if ($_smarty_tpl->tpl_vars['custom_message']->value) {?>
<p><?php echo $_smarty_tpl->tpl_vars['custom_message']->value;?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['message']->value) {?>
<p><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value),"[var]",$_smarty_tpl->tpl_vars['var']->value);?>
</p>
<?php }
}
}
