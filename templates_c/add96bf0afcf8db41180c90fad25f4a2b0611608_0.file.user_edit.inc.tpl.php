<?php
/* Smarty version 3.1.32, created on 2019-02-14 09:14:07
  from 'C:\xampp\htdocs\mylittleforum\themes\default\subtemplates\user_edit.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c65315fa24473_01417549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'add96bf0afcf8db41180c90fad25f4a2b0611608' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mylittleforum\\themes\\default\\subtemplates\\user_edit.inc.tpl',
      1 => 1550072548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c65315fa24473_01417549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\mylittleforum\\modules\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['language_file']->value, "user_edit", 0);
?>

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
<li><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value),"[profile_length]",$_smarty_tpl->tpl_vars['profil_length']->value),"[profile_maxlength]",$_smarty_tpl->tpl_vars['settings']->value['profile_maxlength']),"[signature_length]",$_smarty_tpl->tpl_vars['signature_length']->value),"[signature_maxlength]",$_smarty_tpl->tpl_vars['settings']->value['signature_maxlength']),"[word]",$_smarty_tpl->tpl_vars['word']->value),"[not_accepted_word]",$_smarty_tpl->tpl_vars['not_accepted_word']->value),"[not_accepted_words]",$_smarty_tpl->tpl_vars['not_accepted_words']->value);?>
</li>
<?php
}
}
?>
</ul>
<?php }
if ($_smarty_tpl->tpl_vars['msg']->value) {?><p class="ok"><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['msg']->value);?>
</p><?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<input type="hidden" name="mode" value="user" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_name');?>
</strong></td>
<td class="d"><strong><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</strong></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['settings']->value['avatars'] > 0) {?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_avatar');?>
</strong></td>
<td class="d">
<div id="avatar_wrapper"><?php if ($_smarty_tpl->tpl_vars['avatar']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['image'];?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_avatar_link_title');?>
" width="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['height'];?>
" /><?php }?></div>
<span class="small">[ <a id="edit_avatar" href="index.php?mode=avatar"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_avatar_link');?>
</a> ]</span>
</td>
</tr>
<?php }?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_pw');?>
</strong></td>
<td class="d"><span class="small">[ <a href="index.php?mode=user&amp;action=edit_pw"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_pw');?>
</a> ]</span></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_email');?>
</strong></td>
<td class="d"><!--<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>
">--><?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>
<!--</a>--> &nbsp;<span class="small">[ <a href="index.php?mode=user&amp;action=edit_email"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_email');?>
</a> ]</span><br />
<span class="small"><input id="email_contact" type="checkbox" name="email_contact" value="1"<?php if ($_smarty_tpl->tpl_vars['email_contact']->value == 1) {?> checked="checked"<?php }?> /><label for="email_contact"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_email_contact');?>
</label></span></td>
</tr>
<tr>
<td class="c"><label for="user_hp"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_hp');?>
</strong></label></td>
<td class="d"><input id="user_hp" type="text" size="40" name="user_hp" value="<?php echo $_smarty_tpl->tpl_vars['user_hp']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['hp_maxlength'];?>
" /></td>
</tr>
<tr>
<td class="c"><label for="user_real_name"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_real_name');?>
</strong></label></td>
<td class="d"><input id="user_real_name" type="text" size="40" name="user_real_name" value="<?php echo $_smarty_tpl->tpl_vars['user_real_name']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['name_maxlength'];?>
" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_gender');?>
</strong></td>
<td class="d">
<input id="no-gender" type="radio" name="user_gender" value="0"<?php if ($_smarty_tpl->tpl_vars['user_gender']->value == "0") {?> checked="checked"<?php }?> /><label for="no-gender"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'gender_not_specified');?>
</label><br />
<input id="male" type="radio" name="user_gender" value="1"<?php if ($_smarty_tpl->tpl_vars['user_gender']->value == "1") {?> checked="checked"<?php }?> /><label for="male"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'male');?>
</label><br />
<input id="female" type="radio" name="user_gender" value="2"<?php if ($_smarty_tpl->tpl_vars['user_gender']->value == "2") {?> checked="checked"<?php }?> /><label for="female"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'female');?>
</label></td>
</tr>
<tr>
<td class="c"><label for="user_birthday"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_birthday');?>
</strong></label></td>
<td class="d"><input id="user_birthday" type="text" size="40" name="user_birthday" value="<?php echo $_smarty_tpl->tpl_vars['user_birthday']->value;?>
" /> <span class="small">(<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'birthday_format');?>
)</span></td>
</tr>
<tr>
<td class="c"><label for="user_location"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_location');?>
</strong></label></td>
<td class="d"><input id="user_location" type="text" size="40" name="user_location" value="<?php echo $_smarty_tpl->tpl_vars['user_location']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['location_maxlength'];?>
" /></td>
</tr>
<tr>
<td class="c"><label for="profile"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_profile');?>
</strong></label></td>
<td class="d"><textarea id="profile" cols="65" rows="12" name="profile"><?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
</textarea></td>
</tr>
<tr>
<td class="c"><label for="signature"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_signature');?>
</strong></label></td>
<td class="d"><textarea id="signature" cols="65" rows="4" name="signature"><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</textarea></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_cat_selection');?>
</strong></td>
<td class="d">
<ul class="checkboxlist">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
if ($_smarty_tpl->tpl_vars['key']->value != 0) {?><li><input id="category_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="checkbox" name="category_selection[]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['category_selection']->value) && in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['category_selection']->value)) {?> checked="checked"<?php }?> /><label for="category_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</label></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['languages']->value) {?>
<tr>
<td class="c"><strong><label for="user_language"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_language');?>
</label></strong></td>
<td class="d">
<select id="user_language" name="user_language" size="1">
<option value=""<?php if ($_smarty_tpl->tpl_vars['user_language']->value == '') {?> selected="selected"<?php }?>><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_default_language'),"[default_language]",$_smarty_tpl->tpl_vars['default_language']->value);?>
</option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'l');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['l']->value['identifier'];?>
"<?php if ($_smarty_tpl->tpl_vars['l']->value['identifier'] == $_smarty_tpl->tpl_vars['user_language']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['l']->value['title'];?>
</option>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
</td>
</tr>
<?php }?>

<tr>
<td class="c"><strong><?php if ($_smarty_tpl->tpl_vars['time_zones']->value) {?><label for="user_time_zone"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_time_zone');?>
</label><?php } else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_time_zone');
}?></strong></td>
<td class="d">
<?php if ($_smarty_tpl->tpl_vars['time_zones']->value) {?>
<p>
<select id="user_time_zone" name="user_time_zone" size="1">
<option value=""<?php if ($_smarty_tpl->tpl_vars['user_time_zone']->value == '') {?> selected="selected"<?php }?>><?php if ($_smarty_tpl->tpl_vars['default_time_zone']->value) {
echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_default_time_zone'),"[default_time_zone]",$_smarty_tpl->tpl_vars['default_time_zone']->value);
} else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_default_time_zone_svr');
}?></option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['time_zones']->value, 'tz');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tz']->value) {
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['tz']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['tz']->value == $_smarty_tpl->tpl_vars['user_time_zone']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tz']->value;?>
</option>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
</p>
<?php }?>
<p><span class="small"><label for="user_time_difference"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_time_difference');?>
</label></span><br /><input id="user_time_difference" type="text" size="6" name="user_time_difference" value="<?php echo $_smarty_tpl->tpl_vars['user_time_difference']->value;?>
" maxlength="6" /></p>
</td>
</tr>

<?php if ($_smarty_tpl->tpl_vars['themes']->value) {?>
<tr>
<td class="c"><strong><label for="user_theme"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_theme');?>
</label></strong></td>
<td class="d">
<select id="user_theme" name="user_theme" size="1">
<option value=""<?php if ($_smarty_tpl->tpl_vars['user_theme']->value == '') {?> selected="selected"<?php }?>><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_default_theme'),"[default_theme]",$_smarty_tpl->tpl_vars['default_theme']->value);?>
</option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 't');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['identifier'];?>
"<?php if ($_smarty_tpl->tpl_vars['t']->value['identifier'] == $_smarty_tpl->tpl_vars['user_theme']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['title'];?>
</option>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
</td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['autologin'] == 1) {?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_auto_login');?>
</strong></td>
<td class="d"><input id="auto_login" type="checkbox" name="auto_login" value="1"<?php if ($_smarty_tpl->tpl_vars['auto_login']->value == 1) {?> checked="checked"<?php }?> /><label for="auto_login"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enable_auto_login');?>
</label></td>
</tr>
<?php }?>

<tr>
<td class="c"><strong class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'remove_user_account');?>
</strong></td>
<td class="d"><span class="small">[ <a href="index.php?mode=user&amp;action=remove_account"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'remove_user_account_link');?>
</a> ]</span></td>
</tr>

<?php if ($_smarty_tpl->tpl_vars['mod']->value || $_smarty_tpl->tpl_vars['admin']->value) {?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_notification');?>
</strong></td>
<td class="d"><input id="new_posting_notification" type="checkbox" name="new_posting_notification" value="1"<?php if ($_smarty_tpl->tpl_vars['new_posting_notification']->value == "1") {?> checked="checked"<?php }?> /><label for="new_posting_notification"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'admin_mod_notif_posting');?>
</label><br />
<input id="new_user_notification" type="checkbox" name="new_user_notification" value="1"<?php if ($_smarty_tpl->tpl_vars['new_user_notification']->value == "1") {?> checked="checked"<?php }?> /><label for="new_user_notification"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'admin_mod_notif_register');?>
</label></td>
</tr>
<?php }?>
<tr>
<td class="c">&nbsp;</td>
<td class="d"><input type="submit" name="edit_user_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'userdata_submit_button');?>
" /></td>
</tr>
</table>
</div>
</form>
<?php }
}
