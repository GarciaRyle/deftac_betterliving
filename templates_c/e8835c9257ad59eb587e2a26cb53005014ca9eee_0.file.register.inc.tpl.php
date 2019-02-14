<?php
/* Smarty version 3.1.32, created on 2019-02-13 16:32:21
  from 'C:\xampp\htdocs\mylittleforum\themes\default\subtemplates\register.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c6446958db185_25366105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8835c9257ad59eb587e2a26cb53005014ca9eee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mylittleforum\\themes\\default\\subtemplates\\register.inc.tpl',
      1 => 1550072548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6446958db185_25366105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\mylittleforum\\modules\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['language_file']->value, "register", 0);
?>

<?php if ($_smarty_tpl->tpl_vars['captcha']->value) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['language_file']->value, "captcha", 0);
}?>
<p class="normal"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_exp');?>
</p>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'error_headline');?>
</p>
<ul>
<?php
$__section_mysec_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_mysec_0_total = $__section_mysec_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_mysec'] = new Smarty_Variable(array());
if ($__section_mysec_0_total !== 0) {
for ($__section_mysec_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] = 0; $__section_mysec_0_iteration <= $__section_mysec_0_total; $__section_mysec_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']++){
$_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] : null)]);?>
<li><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value),"[characters]",$_smarty_tpl->tpl_vars['settings']->value['min_pw_length']),"[digits]",$_smarty_tpl->tpl_vars['settings']->value['min_pw_digits']),"[lowercase_letters]",$_smarty_tpl->tpl_vars['settings']->value['min_pw_lowercase_letters']),"[uppercase_letters]",$_smarty_tpl->tpl_vars['settings']->value['min_pw_uppercase_letters']),"[special_characters]",$_smarty_tpl->tpl_vars['settings']->value['min_pw_special_characters']);?>
</li>
<?php
}
}
?>
</ul>
<?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="register" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<?php if ($_smarty_tpl->tpl_vars['captcha']->value) {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['captcha']->value['session_name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['captcha']->value['session_id'];?>
" /><?php }?>

<p><label for="new_user_name" class="main"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_username');?>
</label><br />
<input id="new_user_name" class="login" type="text" size="30" name="<?php echo $_smarty_tpl->tpl_vars['fld_user_name']->value;?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['new_user_name']->value)===null||$tmp==='' ? '' : $tmp);?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['username_maxlength'];?>
" tabindex="1" /></p>

<p><label for="reg_pw" class="main"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_pw');?>
</label><br />
<input id="reg_pw" class="login" type="password" size="30" name="<?php echo $_smarty_tpl->tpl_vars['fld_pword']->value;?>
" maxlength="255" tabindex="2" /></p>

<p class="hp"><label for="phone" class="main"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_honeypot_field');?>
</label><br />
<input id="phone" class="login" type="text" size="30" name="<?php echo $_smarty_tpl->tpl_vars['fld_phone']->value;?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['honey_pot_phone']->value)===null||$tmp==='' ? '' : $tmp);?>
" maxlength="35" tabindex="-1" /></p>

<p><label for="new_user_email" class="main"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_user_email');?>
</label><br />
<input id="new_user_email" class="login" type="text" size="30" name="<?php echo $_smarty_tpl->tpl_vars['fld_user_email']->value;?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['new_user_email']->value)===null||$tmp==='' ? '' : $tmp);?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['email_maxlength'];?>
" tabindex="3" /></p>

<p class="hp"><label for="repeat_email" class="main"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_honeypot_field');?>
</label><br />
<input id="repeat_email" class="login" type="text" size="30" name="<?php echo $_smarty_tpl->tpl_vars['fld_repeat_email']->value;?>
" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['honey_pot_email']->value)===null||$tmp==='' ? '' : $tmp);?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['email_maxlength'];?>
" tabindex="-1" /></p>

<?php if ($_smarty_tpl->tpl_vars['terms_of_use_agreement']->value) {
$_smarty_tpl->_assignInScope('terms_of_use_url', $_smarty_tpl->tpl_vars['settings']->value['terms_of_use_url']);?>
<p><input tabindex="4" id="terms_of_use_agree" type="checkbox" name="terms_of_use_agree" value="1"<?php if ($_smarty_tpl->tpl_vars['terms_of_use_agree']->value && $_smarty_tpl->tpl_vars['terms_of_use_agree']->value == 1) {?> checked="checked"<?php }?> />&nbsp;<label for="terms_of_use_agree"><?php if ($_smarty_tpl->tpl_vars['terms_of_use_url']->value) {
echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'terms_of_use_agreement'),"[[","<a id=\"terms_of_use\" href=\"".((string)$_smarty_tpl->tpl_vars['terms_of_use_url']->value)."\">"),"]]","</a>");
} else {
echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'terms_of_use_agreement'),"[[",''),"]]",'');
}?></label></p>
<?php }
if ($_smarty_tpl->tpl_vars['data_privacy_agreement']->value) {
$_smarty_tpl->_assignInScope('data_privacy_statement_url', $_smarty_tpl->tpl_vars['settings']->value['data_privacy_statement_url']);?>
<p><input tabindex="5" id="data_privacy_statement_agree" type="checkbox" name="data_privacy_statement_agree" value="1"<?php if ($_smarty_tpl->tpl_vars['data_privacy_statement_agree']->value && $_smarty_tpl->tpl_vars['data_privacy_statement_agree']->value == 1) {?> checked="checked"<?php }?> />&nbsp;<label for="data_privacy_statement_agree"><?php if ($_smarty_tpl->tpl_vars['data_privacy_statement_url']->value) {
echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'data_privacy_agreement'),"[[","<a id=\"data_priv_declaration\" href=\"".((string)$_smarty_tpl->tpl_vars['data_privacy_statement_url']->value)."\">"),"]]","</a>");
} else {
echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'data_privacy_agreement'),"[[",''),"]]",'');
}?></label></p>
<?php }
if ($_smarty_tpl->tpl_vars['captcha']->value) {
if ($_smarty_tpl->tpl_vars['captcha']->value['type'] == 2) {?>
<p><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_marking');?>
</strong><br />
<img class="captcha" src="modules/captcha/captcha_image.php?<?php echo $_smarty_tpl->tpl_vars['captcha']->value['session_name'];?>
=<?php echo $_smarty_tpl->tpl_vars['captcha']->value['session_id'];?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_image_alt_reg');?>
" width="180" height="40" /><br />
<label for="captcha_code"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_expl_image');?>
</label><br />
<input id="captcha_code" type="text" name="captcha_code" value="" size="10" tabindex="6" /></p>
<?php } else { ?>
<p><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_marking');?>
</strong><br />
<label for="captcha_code"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_expl_math');?>
 <?php echo $_smarty_tpl->tpl_vars['captcha']->value['number_1'];?>
 + <?php echo $_smarty_tpl->tpl_vars['captcha']->value['number_2'];?>
 = </label><input id="captcha_code" type="text" name="captcha_code" value="" size="5" tabindex="7" /></p>
<?php }
}?>
<p><input type="submit" name="register_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit_button_ok');?>
" tabindex="8" /></p>
</div>
</form>
<?php }
}
