<?php
/* Smarty version 3.1.32, created on 2019-02-13 16:19:51
  from 'C:\xampp\htdocs\mylittleforum\themes\default\subtemplates\admin.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c6443a7bc4fe2_29757302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a548de8b465f121093dd234b30155b04a1ecc60f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mylittleforum\\themes\\default\\subtemplates\\admin.inc.tpl',
      1 => 1550072548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6443a7bc4fe2_29757302 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\mylittleforum\\modules\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\mylittleforum\\modules\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),2=>array('file'=>'C:\\xampp\\htdocs\\mylittleforum\\modules\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['language_file']->value, "admin", 0);
?>

<?php if ($_smarty_tpl->tpl_vars['action']->value == 'settings') {
if ($_smarty_tpl->tpl_vars['saved']->value) {?><p class="ok"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'settings_saved');?>
</p><?php }?>
<form id="settings" action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'forum_name');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'forum_name_desc');?>
</span></td>
<td class="d"><input type="text" name="forum_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edSet']->value['forum_name'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'forum_description');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'forum_description_desc');?>
</span></td>
<td class="d"><input type="text" name="forum_description" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edSet']->value['forum_description'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'forum_address');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'forum_address_desc');?>
</span></td>
<td class="d"><input type="text" name="forum_address" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edSet']->value['forum_address'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'forum_email');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'forum_email_desc');?>
</span></td>
<td class="d"><input type="text" name="forum_email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edSet']->value['forum_email'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></td>
</tr>

<?php if ($_smarty_tpl->tpl_vars['languages']->value) {?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'default_language');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'default_language_desc');?>
</span></td>
<td class="d"><select name="language_file" size="1">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'l');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['l']->value['identifier'];?>
"<?php if ($_smarty_tpl->tpl_vars['l']->value['identifier'] == $_smarty_tpl->tpl_vars['edSet']->value['language_file']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['l']->value['title'];?>
</option>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select></td>
</tr>
<?php }?>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'default_time_zone');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'default_time_zone_desc');?>
</span></td>
<td class="d">
<?php if ($_smarty_tpl->tpl_vars['time_zones']->value) {?>
<p>
<select id="time_zone" name="time_zone" size="1">
<option value=""<?php if ($_smarty_tpl->tpl_vars['edSet']->value['time_zone'] == '') {?> selected="selected"<?php }?>></option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['time_zones']->value, 'tz');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tz']->value) {
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['tz']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['tz']->value == $_smarty_tpl->tpl_vars['edSet']->value['time_zone']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['tz']->value;?>
</option>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
</p>
<?php } else { ?>
<p><label for="time_difference"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'default_time_difference');?>
</label><br /><input id="time_difference" type="text" name="time_difference" value="<?php echo $_smarty_tpl->tpl_vars['edSet']->value['time_difference'];?>
" size="5" /></p>
<?php }?>
</td>
</tr>

<?php if ($_smarty_tpl->tpl_vars['themes']->value) {?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'default_theme');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'default_theme_desc');?>
</span></td>
<td class="d"><select name="theme" size="1">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 't');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['identifier'];?>
"<?php if ($_smarty_tpl->tpl_vars['t']->value['identifier'] == $_smarty_tpl->tpl_vars['edSet']->value['theme']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['t']->value['title'];?>
</option>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select></td>
</tr>
<?php }?>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'home_link');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'home_link_desc');?>
</span></td>
<td class="d"><input type="text" name="home_linkaddress" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edSet']->value['home_linkaddress'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'home_link_name');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'home_link_name_desc');?>
</span></td>
<td class="d"><input type="text" name="home_linkname" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edSet']->value['home_linkname'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></td>
</tr>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'terms_of_use_settings');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'terms_of_use_settings_desc');?>
</span></td>
<td class="d"><p><input id="terms_of_use_agreement" type="checkbox" name="terms_of_use_agreement" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['terms_of_use_agreement'] == 1) {?> checked="checked"<?php }?> /><label for="terms_of_use_agreement"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'terms_of_use_settings_enabled');?>
</label></p>
<p><label for="terms_of_use_url"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'terms_of_use_url');?>
</label><br /><input id="terms_of_use_url" type="text" name="terms_of_use_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edSet']->value['terms_of_use_url'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></p></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'data_privacy_statement');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'data_privacy_statement_desc');?>
</span></td>
<td class="d"><p><input id="data_privacy_agreement" type="checkbox" name="data_privacy_agreement" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['data_privacy_agreement'] == 1) {?> checked="checked"<?php }?> /><label for="data_privacy_agreement"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'data_privacy_settings_enabled');?>
</label></p>
<p><label for="data_privacy_statement_url"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'data_privacy_url');?>
</label><br /><input id="data_privacy_statement_url" type="text" name="data_privacy_statement_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edSet']->value['data_privacy_statement_url'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></p></td>
</tr>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'accession');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'accession_desc');?>
</span></td>
<td class="d"><input id="access_for_all" type="radio" name="access_for_users_only" value="0"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['access_for_users_only'] == 0) {?> checked="checked"<?php }?> /><label for="access_for_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'all_users');?>
</label><br />
<input id="access_for_users_only" type="radio" name="access_for_users_only" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['access_for_users_only'] == 1) {?> checked="checked"<?php }?> /><label for="access_for_users_only"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'only_registered_users');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'post_permission');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'post_permission_desc');?>
</span></td>
<td class="d"><input id="entries_by_all" type="radio" name="entries_by_users_only" value="0"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['entries_by_users_only'] == 0) {?> checked="checked"<?php }?> /><label for="entries_by_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'all_users');?>
</label><br />
<input id="entries_by_users" type="radio" name="entries_by_users_only" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['entries_by_users_only'] == 1) {?> checked="checked"<?php }?> /><label for="entries_by_users"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'only_registered_users');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_permission');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_permission_desc');?>
</span></td>
<td class="d"><input id="register_mode_0" type="radio" name="register_mode" value="0"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['register_mode'] == 0) {?> checked="checked"<?php }?> /><label for="register_mode_0"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_self');?>
</label><br />
<input id="register_mode_1" type="radio" name="register_mode" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['register_mode'] == 1) {?> checked="checked"<?php }?> /><label for="register_mode_1"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_self_locked');?>
</label><br />
<input id="register_mode_2" type="radio" name="register_mode" value="2"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['register_mode'] == 2) {?> checked="checked"<?php }?> /><label for="register_mode_2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_only_admin');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_area');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_area_desc');?>
</span></td>
<td class="d"><input id="public" type="radio" name="user_area_public" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['user_area_public'] == 1) {?> checked="checked"<?php }?> /><label for="public"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'public_accessible');?>
</label><br />
<input id="not_public" type="radio" name="user_area_public" value="0"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['user_area_public'] == 0) {?> checked="checked"<?php }?> /><label for="not_public"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'accessible_reg_users_only');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'latest_postings');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'latest_postings_desc');?>
</span></td>
<td class="d"><input type="text" name="latest_postings" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edSet']->value['latest_postings'], ENT_QUOTES, 'UTF-8', true);?>
" size="5" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tag_cloud');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tag_cloud_desc');?>
</span></td>
<td class="d"><input id="tag_cloud" type="checkbox" name="tag_cloud" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['tag_cloud'] == 1) {?> checked="checked"<?php }?> /><label for="tag_cloud"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enable_tag_cloud');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_postings');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_postings_desc');?>
</span></td>
<td class="d">
<?php $_smarty_tpl->_assignInScope('settings_edit_delay', $_smarty_tpl->tpl_vars['edSet']->value['edit_delay']);
$_smarty_tpl->_assignInScope('input_edit_delay', "<input type=\"text\" name=\"edit_delay\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_edit_delay']->value)."\" size=\"3\" />");?>

<p><input id="show_if_edited" type="checkbox" name="show_if_edited" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['show_if_edited'] == 1) {?> checked="checked"<?php }?> /><label for="show_if_edited"><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'show_if_edited'),"[minutes]",$_smarty_tpl->tpl_vars['input_edit_delay']->value);?>
</label><br />
<input id="dont_reg_edit_by_admin" type="checkbox" name="dont_reg_edit_by_admin" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['dont_reg_edit_by_admin'] == 1) {?> checked="checked"<?php }?> /><label for="dont_reg_edit_by_admin"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'dont_show_edit_by_admin');?>
</label><br />
<input id="dont_reg_edit_by_mod" type="checkbox" name="dont_reg_edit_by_mod" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['dont_reg_edit_by_mod'] == 1) {?> checked="checked"<?php }?> /><label for="dont_reg_edit_by_mod"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'dont_show_edit_by_mod');?>
</label></p>

<p><em><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_own_postings');?>
</em></p>
<p><input id="edit_own_postings_all" type="radio" name="user_edit" value="2"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['user_edit'] == 2) {?> checked="checked"<?php }?> /><label for="edit_own_postings_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_own_postings_all');?>
</label><br />
<input id="edit_own_postings_users" type="radio" name="user_edit" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['user_edit'] == 1) {?> checked="checked"<?php }?> /><label for="edit_own_postings_users"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_own_postings_users');?>
</label><br />
<input id="edit_own_postings_disabled" type="radio" name="user_edit" value="0"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['user_edit'] == 0) {?> checked="checked"<?php }?> /><label for="edit_own_postings_disabled"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_own_postings_disabled');?>
</label></p>

<fieldset id="user_edit_details">
<?php $_smarty_tpl->_assignInScope('settings_edit_max_time_period', $_smarty_tpl->tpl_vars['edSet']->value['edit_max_time_period']);
$_smarty_tpl->_assignInScope('input_edit_max_time_period', "<input type=\"text\" id=\"edit_max_time_period\" name=\"edit_max_time_period\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_edit_max_time_period']->value)."\" size=\"3\" />");?>
<p><label id="edit_max_time_period_label" for="edit_max_time_period"><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_max_time_period'),"[minutes]",$_smarty_tpl->tpl_vars['input_edit_max_time_period']->value);?>
</label></p>
<?php $_smarty_tpl->_assignInScope('settings_edit_min_time_period', $_smarty_tpl->tpl_vars['edSet']->value['edit_min_time_period']);
$_smarty_tpl->_assignInScope('input_edit_min_time_period', "<input type=\"text\" name=\"edit_min_time_period\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_edit_min_time_period']->value)."\" size=\"3\" />");?>
<p><input id="user_edit_if_no_replies" type="checkbox" name="user_edit_if_no_replies" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['user_edit_if_no_replies'] == 1) {?> checked="checked"<?php }?> /><label for="user_edit_if_no_replies"><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_edit_if_no_replies'),"[minutes]",$_smarty_tpl->tpl_vars['input_edit_min_time_period']->value);?>
</label></p>
</fieldset>

</td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bbcode');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bbcode_desc');?>
</span></td>
<td class="d"><input id="bbcode" type="checkbox" name="bbcode" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['bbcode'] == 1) {?> checked="checked"<?php }?> /><label for="bbcode"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bbcodes_enabled');?>
</label><br />
<input id="bbcode_img" type="checkbox" name="bbcode_img" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['bbcode_img'] == 1) {?> checked="checked"<?php }?> /><label for="bbcode_img"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bbcodes_img_enabled');?>
</label><br />
<input id="bbcode_flash" type="checkbox" name="bbcode_flash" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['bbcode_flash'] == 1) {?> checked="checked"<?php }?> /><label id="bbcode_flash_label" for="bbcode_flash"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bbcodes_flash_enabled');?>
</label></td></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'smilies');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'smilies_desc');?>
</span></td>
<td class="d"><input id="smilies" type="checkbox" name="smilies" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['smilies'] == 1) {?> checked="checked"<?php }?> /><label for="smilies"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'smilies_enabled');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enamble_avatars');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enamble_avatars_desc');?>
</span></td>
<td class="d"><p><input id="avatars_profiles_postings" type="radio" name="avatars" value="2"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['avatars'] == 2) {?> checked="checked"<?php }?> /><label for="avatars_profiles_postings"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'avatars_profiles_postings');?>
</label><br />
<input id="avatars_profiles" type="radio" name="avatars" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['avatars'] == 1) {?> checked="checked"<?php }?> /><label for="avatars_profiles"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'avatars_profiles');?>
</label><br />
<input id="avatars_disabled" type="radio" name="avatars" value="0"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['avatars'] == 0) {?> checked="checked"<?php }?> /><label for="avatars_disabled"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'disabled');?>
</label></p>

<?php $_smarty_tpl->_assignInScope('settings_avatar_max_width', $_smarty_tpl->tpl_vars['edSet']->value['avatar_max_width']);
$_smarty_tpl->_assignInScope('input_avatar_max_width', "<input id=\"avatar_max_width\" type=\"text\" name=\"avatar_max_width\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_avatar_max_width']->value)."\" size=\"5\" />");
$_smarty_tpl->_assignInScope('settings_avatar_max_height', $_smarty_tpl->tpl_vars['edSet']->value['avatar_max_height']);
$_smarty_tpl->_assignInScope('input_avatar_max_height', "<input type=\"text\" name=\"avatar_max_height\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_avatar_max_height']->value)."\" size=\"5\" />");
$_smarty_tpl->_assignInScope('settings_avatar_max_filesize', $_smarty_tpl->tpl_vars['edSet']->value['avatar_max_filesize']);
$_smarty_tpl->_assignInScope('input_avatar_max_filesize', "<input type=\"text\" name=\"avatar_max_filesize\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_avatar_max_filesize']->value)."\" size=\"5\" />");?>
<p><label for="avatar_max_width"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'max_avatar_size'),"[width]",$_smarty_tpl->tpl_vars['input_avatar_max_width']->value),"[height]",$_smarty_tpl->tpl_vars['input_avatar_max_height']->value),"[filesize]",$_smarty_tpl->tpl_vars['input_avatar_max_filesize']->value);?>
</label></p></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'upload_images');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'upload_images_desc');?>
</span></td>
<td class="d"><p><input id="upload_images_all" type="radio" name="upload_images" value="3"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['upload_images'] == 3) {?> checked="checked"<?php }?> /><label for="upload_images_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'upload_enabled_all');?>
</label><br />
<input id="upload_images_users" type="radio" name="upload_images" value="2"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['upload_images'] == 2) {?> checked="checked"<?php }?> /><label for="upload_images_users"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'upload_enabled_users');?>
</label><br />
<input id="upload_images_admins_mods" type="radio" name="upload_images" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['upload_images'] == 1) {?> checked="checked"<?php }?> /><label for="upload_images_admins_mods"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'upload_enabled_admins_mods');?>
</label><br />
<input id="upload_images_disabled" type="radio" name="upload_images" value="0"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['upload_images'] == 0) {?> checked="checked"<?php }?> /><label for="upload_images_disabled"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'disabled');?>
</label></p>
<?php $_smarty_tpl->_assignInScope('settings_upload_max_width', $_smarty_tpl->tpl_vars['edSet']->value['upload_max_img_width']);
$_smarty_tpl->_assignInScope('input_upload_max_width', "<input id=\"upload_max_img_width\" type=\"text\" name=\"upload_max_img_width\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_upload_max_width']->value)."\" size=\"5\" />");
$_smarty_tpl->_assignInScope('settings_upload_max_height', $_smarty_tpl->tpl_vars['edSet']->value['upload_max_img_height']);
$_smarty_tpl->_assignInScope('input_upload_max_height', "<input type=\"text\" name=\"upload_max_img_height\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_upload_max_height']->value)."\" size=\"5\" />");
$_smarty_tpl->_assignInScope('settings_upload_max_img_size', $_smarty_tpl->tpl_vars['edSet']->value['upload_max_img_size']);
$_smarty_tpl->_assignInScope('input_upload_max_filesize', "<input type=\"text\" name=\"upload_max_img_size\" value=\"".((string)$_smarty_tpl->tpl_vars['settings_upload_max_img_size']->value)."\" size=\"5\" />");?>
<p><label for="upload_max_img_width"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'max_upload_size'),"[width]",$_smarty_tpl->tpl_vars['input_upload_max_width']->value),"[height]",$_smarty_tpl->tpl_vars['input_upload_max_height']->value),"[filesize]",$_smarty_tpl->tpl_vars['input_upload_max_filesize']->value);?>
</label></p></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'autolink');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'autolink_desc');?>
</span></td>
<td class="d"><input id="autolink" type="checkbox" name="autolink" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['autolink'] == 1) {?> checked="checked"<?php }?> /><label for="autolink"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'autolink_enabled');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'count_views');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'count_views_desc');?>
</span></td>
<td class="d"><input id="count_views" type="checkbox" name="count_views" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['count_views'] == 1) {?> checked="checked"<?php }?> /><label for="count_views"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'views_counter_enabled');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rss_feed');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rss_feed_desc');?>
</span></td>
<td class="d"><input id="rss_feed" type="checkbox" name="rss_feed" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['rss_feed'] == 1) {?> checked="checked"<?php }?> /><label for="rss_feed"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rss_feed_enabled');?>
</label></td>
</tr>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'threads_per_page');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'threads_per_page_desc');?>
</span></td>
<td class="d"><input type="text" name="threads_per_page" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edSet']->value['threads_per_page'], ENT_QUOTES, 'UTF-8', true);?>
" size="5" /></td>
</tr>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'reset_read_state');?>
</strong><br><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'reset_read_state_desc');?>
</span></td>
<td class="d">
<p><input name="read_state_expiration_method" value="0" id="read_state_no_reset" type="radio"<?php if (!isset($_smarty_tpl->tpl_vars['edSet']->value['read_state_expiration_method']) || $_smarty_tpl->tpl_vars['edSet']->value['read_state_expiration_method'] == 0) {?> checked="checked"<?php }?> /><label for="read_state_no_reset"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'read_state_no_reset');?>
</label><br /><input id="read_state_number_reset" name="read_state_expiration_method" value="1" type="radio"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['read_state_expiration_method'] == 1) {?> checked="checked"<?php }?> /><label for="read_state_number_reset"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'read_state_numbered_reset');?>
</label><br /><input name="read_state_expiration_method" value="2" id="read_state_age_reset" type="radio"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['read_state_expiration_method'] == 2) {?> checked="checked"<?php }?> /><label for="read_state_age_reset"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'read_state_timeout_reset');?>
</label><br /><input name="read_state_expiration_method" value="3" id="read_state_lock_reset" type="radio"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['read_state_expiration_method'] == 3) {?> checked="checked"<?php }?> /><label for="read_state_lock_reset"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'read_state_locktime_reset');?>
</label></p>
</td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'read_state_value');?>
</strong><br><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'read_state_value_desc');?>
</span></td>
<td class="d"><input name="read_state_expiration_value" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edSet']->value['read_state_expiration_value'], ENT_QUOTES, 'UTF-8', true);?>
" size="5" type="text"></td>
</tr>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'auto_lock_old_threads');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'auto_lock_old_threads_desc');?>
</span></td>
<td class="d"><input type="text" name="auto_lock_old_threads" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edSet']->value['auto_lock_old_threads'], ENT_QUOTES, 'UTF-8', true);?>
" size="5" /></td>
</tr>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'count_users_online');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'count_users_online_desc');?>
</span></td>
<td class="d"><input type="text" name="count_users_online" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edSet']->value['count_users_online'], ENT_QUOTES, 'UTF-8', true);?>
" size="5" /></td>
</tr>

<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'forum_enabled_marking');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'forum_enabled_desc');?>
</span></td>
<td class="d"><p><input id="forum_enabled" type="checkbox" name="forum_enabled" value="1"<?php if ($_smarty_tpl->tpl_vars['edSet']->value['forum_enabled'] == 1) {?> checked="checked"<?php }?> /><label for="forum_enabled"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'forum_enabled');?>
</label></p>
<p><label for="forum_disabled_message"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'forum_disabled_message');?>
</label><br /><input id="forum_disabled_message" type="text" name="forum_disabled_message" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['edSet']->value['forum_disabled_message'], ENT_QUOTES, 'UTF-8', true);?>
" size="40" /></p></td>
</tr>
<tr>
<td class="c">&nbsp;</td>
<td class="d"><p class="small"><input id="clear_chache" type="checkbox" name="clear_cache" value="1" /><label for="clear_chache"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'clear_chache');?>
</label></p>
<p><input type="submit" name="settings_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'settings_submit_button');?>
" /></p></td>
</tr>
</table>
</div>
</form>
<p style="margin-top:10px;"><a class="stronglink" href="index.php?mode=admin&amp;action=advanced_settings"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'advanced_settings_link');?>
</a></p>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'advanced_settings') {
if ($_smarty_tpl->tpl_vars['saved']->value) {?><p class="ok"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'settings_saved');?>
</p><?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="return_to" value="advanced_settings" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<?php
$__section_nr_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['settings_sorted']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_nr_0_total = $__section_nr_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_nr'] = new Smarty_Variable(array());
if ($__section_nr_0_total !== 0) {
for ($__section_nr_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] = 0; $__section_nr_0_iteration <= $__section_nr_0_total; $__section_nr_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']++){
?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->tpl_vars['settings_sorted']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)]['key'];?>
</strong></td>
<td class="d"><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['settings_sorted']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)]['key'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings_sorted']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)]['val'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
</tr>
<?php
}
}
?>
<tr>
<td class="c">&nbsp;</td>
<td class="d"><input type="submit" name="settings_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'settings_submit_button');?>
" /></td>
</tr>
</table>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'categories') {
if ($_smarty_tpl->tpl_vars['entries_in_not_existing_categories']->value > 0) {?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div style="margin:0px 0px 20px 0px; padding:10px; border:1px dotted red;">
<input type="hidden" name="mode" value="admin" />
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'entries_in_not_ex_cat');?>
</p>
<p><input type="radio" name="entry_action" value="delete" checked="checked" /><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'entries_in_not_ex_cat_del');?>
<br />
<input type="radio" name="entry_action" value="move" /><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'entries_in_not_ex_cat_mov');?>

<select class="kat" size="1" name="move_category">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
if ($_smarty_tpl->tpl_vars['key']->value != 0) {?><option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
</p>
<p><input type="submit" name="entries_in_not_existing_categories_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit_button_ok');?>
"></p>
</div>
</form>
<?php }
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'error_headline');?>
</p>
<ul>
<?php
$__section_mysec_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_mysec_1_total = $__section_mysec_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_mysec'] = new Smarty_Variable(array());
if ($__section_mysec_1_total !== 0) {
for ($__section_mysec_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] = 0; $__section_mysec_1_iteration <= $__section_mysec_1_total; $__section_mysec_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']++){
$_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] : null)]);?>
<li><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value);?>
</li>
<?php
}
}
?>
</ul>
<?php }
if ($_smarty_tpl->tpl_vars['categories_count']->value > 0) {?>
<table id="sortable" class="normaltab" cellspacing="1" cellpadding="5">
<thead>
<tr>
<th><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'category_name');?>
</th>
<th><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'category_accession');?>
</th>
<th><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'category_topics');?>
</th>
<th><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'category_entries');?>
</th>
<th>&#160;</th>
</tr>
</thead>
<tbody id="items">
<?php
$__section_row_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['categories_list']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_row_2_total = $__section_row_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_row'] = new Smarty_Variable(array());
if ($__section_row_2_total !== 0) {
for ($__section_row_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] = 0; $__section_row_2_iteration <= $__section_row_2_total; $__section_row_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']++){
echo smarty_function_cycle(array('values'=>"a,b",'assign'=>'c'),$_smarty_tpl);?>

<tr id="id_<?php echo $_smarty_tpl->tpl_vars['categories_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
<td><strong><?php echo $_smarty_tpl->tpl_vars['categories_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['name'];?>
</strong></td>
<td><?php if ($_smarty_tpl->tpl_vars['categories_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['accession'] == 2) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cat_accessible_admin_mod');
} elseif ($_smarty_tpl->tpl_vars['categories_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['accession'] == 1) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cat_accessible_reg_users');
} else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cat_accessible_all');
}?></td>
<td><?php echo $_smarty_tpl->tpl_vars['categories_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['threads_in_category'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['categories_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['postings_in_category'];?>
</td>
<td><a href="index.php?mode=admin&amp;edit_category=<?php echo $_smarty_tpl->tpl_vars['categories_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/edit.png" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit');?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit');?>
" width="16" height="16" /></a> &nbsp; <a href="index.php?mode=admin&amp;delete_category=<?php echo $_smarty_tpl->tpl_vars['categories_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete.png" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete');?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete');?>
" width="16" height="16"/></a> &nbsp; <a href="index.php?mode=admin&amp;move_up_category=<?php echo $_smarty_tpl->tpl_vars['categories_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_up.png" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'up');?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'up');?>
" width="16" height="16" /></a>&nbsp;<a href="index.php?mode=admin&amp;move_down_category=<?php echo $_smarty_tpl->tpl_vars['categories_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_down.png" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'down');?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'down');?>
" width="16" height="16" /></a></td>
</tr>
<?php
}
}
?>
</tbody>
</table>
<?php } else { ?>
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'no_categories');?>
</p>
<?php }?>
<br />
<form action="index.php" method="post" class="normalform" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<label for="new_category" class="main"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'new_category');?>
</label><br />
<input id="new_category" type="text" name="new_category" size="25" value="<?php if ($_smarty_tpl->tpl_vars['new_category']->value) {
echo $_smarty_tpl->tpl_vars['new_category']->value;
}?>" /><br /><br />
<strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'category_accessible_by');?>
</strong><br />
<input id="cat_accessible_all" type="radio" name="accession" value="0"<?php if (!$_smarty_tpl->tpl_vars['accession']->value || 'acession' == 0) {?> checked="checked"<?php }?> /><label for="cat_accessible_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cat_accessible_all');?>
</label><br />
<input id="cat_accessible_reg_users" type="radio" name="accession" value="1"<?php if ('acession' == 1) {?> checked="checked"<?php }?> /><label for="cat_accessible_reg_users"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cat_accessible_reg_users');?>
</label><br />
<input id="cat_accessible_admin_mod" type="radio" name="accession" value="2"<?php if ('acession' == 2) {?> checked="checked"<?php }?> /><label for="cat_accessible_admin_mod"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cat_accessible_admin_mod');?>
</label><br /><br />
<input type="submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit_button_ok');?>
" />
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'edit_category') {
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'error_headline');?>
</p>
<ul>
<?php
$__section_mysec_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_mysec_3_total = $__section_mysec_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_mysec'] = new Smarty_Variable(array());
if ($__section_mysec_3_total !== 0) {
for ($__section_mysec_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] = 0; $__section_mysec_3_iteration <= $__section_mysec_3_total; $__section_mysec_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']++){
$_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] : null)]);?>
<li><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value);?>
</li>
<?php
}
}
?>
</ul>
<?php }?>
<form action="index.php" method="post" class="normalform" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_category');?>
</strong><br />
<input type="text" name="category" value="<?php echo $_smarty_tpl->tpl_vars['edit_category']->value;?>
" size="25" /><br /><br />
<strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'category_accessible_by');?>
</strong><br />
<input id="cat_accessible_all" type="radio" name="accession" value="0"<?php if ($_smarty_tpl->tpl_vars['edit_accession']->value == 0) {?> checked="checked"<?php }?> /><label for="cat_accessible_all"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cat_accessible_all');?>
</label><br />
<input id="cat_accessible_reg_users" type="radio" name="accession" value="1"<?php if ($_smarty_tpl->tpl_vars['edit_accession']->value == 1) {?> checked="checked"<?php }?> /><label for="cat_accessible_reg_users"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cat_accessible_reg_users');?>
</label><br />
<input id="cat_accessible_admin_mod" type="radio" name="accession" value="2"<?php if ($_smarty_tpl->tpl_vars['edit_accession']->value == 2) {?> checked="checked"<?php }?> /><label for="cat_accessible_admin_mod"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'cat_accessible_admin_mod');?>
</label><br /><br />
<input type="submit" name="edit_category_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit_button_ok');?>
" />
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'delete_category') {
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'error_headline');?>
</p>
<ul>
<?php
$__section_mysec_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_mysec_4_total = $__section_mysec_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_mysec'] = new Smarty_Variable(array());
if ($__section_mysec_4_total !== 0) {
for ($__section_mysec_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] = 0; $__section_mysec_4_iteration <= $__section_mysec_4_total; $__section_mysec_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']++){
$_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] : null)]);?>
<li><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value);?>
</li>
<?php
}
}
?>
</ul>
<?php }?>
<h2><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_category_hl'),"[category]",$_smarty_tpl->tpl_vars['category_name']->value);?>
</h2>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'caution');?>
</p>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<input type="hidden" name="category_id" value="<?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>
" />
<p><input type="radio" name="delete_mode" value="complete" checked="checked" /> <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_category_compl');?>
</p></td>
<p><input type="radio" name="delete_mode" value="keep_entries" /> <?php if ($_smarty_tpl->tpl_vars['categories_count']->value <= 1) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'del_cat_keep_entries');?>

<?php } else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'del_cat_move_entries');?>

<select class="kat" size="1" name="move_category">
<option value="0">&nbsp;</option>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['move_categories']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
if ($_smarty_tpl->tpl_vars['key']->value != 0) {?><option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<?php }?>
<p><input type="submit" name="delete_category_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_category_submit');?>
" /></p>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'user') {
if ($_smarty_tpl->tpl_vars['new_user']->value && !$_smarty_tpl->tpl_vars['send_error']->value) {?><p class="ok"><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'new_user_registered'),"[name]",$_smarty_tpl->tpl_vars['new_user']->value);?>
</p><?php } elseif ($_smarty_tpl->tpl_vars['new_user']->value && $_smarty_tpl->tpl_vars['send_error']->value) {?><p class="caution"><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'new_user_reg_send_error'),"[name]",$_smarty_tpl->tpl_vars['new_user']->value);?>
</p><?php }?>

<div id="usernav">
<div id="usersearch">
<label for="search-user"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'search_user');?>
</label><form action="index.php" method="get" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="action" value="user" />
<input id="search-user" type="text" name="search_user" value="<?php if ($_smarty_tpl->tpl_vars['search_user']->value) {
echo $_smarty_tpl->tpl_vars['search_user']->value;
} else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'search_user_default_value');
}?>" size="25" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'search_user_default_value');?>
" /></div>
</form>
</div>
<div id="userpagination">
<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
<ul class="pagination pagination-index">
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['previous']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}
if ($_smarty_tpl->tpl_vars['pagination']->value['previous'] > 1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['previous'];
}
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'previous_page_link_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'previous_page_link');?>
</a></li><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['items'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
if ($_smarty_tpl->tpl_vars['item']->value == 0) {?><li>&hellip;</li><?php } elseif ($_smarty_tpl->tpl_vars['item']->value == $_smarty_tpl->tpl_vars['pagination']->value['current']) {?><li><span class="current"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span></li><?php } else { ?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['pagination']->value['next']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'next_page_link_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'next_page_link');?>
</a></li><?php }?>
</ul>
<?php } else { ?>
&nbsp;
<?php }?>
</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['result_count']->value > 0) {
if ($_smarty_tpl->tpl_vars['no_users_in_selection']->value) {?><p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'no_users_in_sel');?>
</p><?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<th>&nbsp;</th>
<!--<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;order=user_id&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value == "ASC" && $_smarty_tpl->tpl_vars['order']->value == "user_id") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'order_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_id');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value == "user_id" && $_smarty_tpl->tpl_vars['descasc']->value == "ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "user_id" && $_smarty_tpl->tpl_vars['descasc']->value == "DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>-->
<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;order=user_name&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value == "ASC" && $_smarty_tpl->tpl_vars['order']->value == "user_name") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'order_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_name');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value == "user_name" && $_smarty_tpl->tpl_vars['descasc']->value == "ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "user_name" && $_smarty_tpl->tpl_vars['descasc']->value == "DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;order=user_email&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value == "ASC" && $_smarty_tpl->tpl_vars['order']->value == "user_email") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'order_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_email');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value == "user_email" && $_smarty_tpl->tpl_vars['descasc']->value == "ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "user_email" && $_smarty_tpl->tpl_vars['descasc']->value == "DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;order=user_type&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value == "ASC" && $_smarty_tpl->tpl_vars['order']->value == "user_type") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'order_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_type');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value == "user_type" && $_smarty_tpl->tpl_vars['descasc']->value == "ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "user_type" && $_smarty_tpl->tpl_vars['descasc']->value == "DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;order=registered&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value == "ASC" && $_smarty_tpl->tpl_vars['order']->value == "registered") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'order_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_registered');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value == "registered" && $_smarty_tpl->tpl_vars['descasc']->value == "ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "registered" && $_smarty_tpl->tpl_vars['descasc']->value == "DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;order=logins&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value == "ASC" && $_smarty_tpl->tpl_vars['order']->value == "logins") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'order_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_logins');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value == "logins" && $_smarty_tpl->tpl_vars['descasc']->value == "ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "logins" && $_smarty_tpl->tpl_vars['descasc']->value == "DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;order=last_login&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value == "ASC" && $_smarty_tpl->tpl_vars['order']->value == "last_login") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'order_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'last_login');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value == "last_login" && $_smarty_tpl->tpl_vars['descasc']->value == "ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "last_login" && $_smarty_tpl->tpl_vars['descasc']->value == "DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th><a href="index.php?mode=admin&amp;action=user<?php if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;order=user_lock&amp;descasc=<?php if ($_smarty_tpl->tpl_vars['descasc']->value == "ASC" && $_smarty_tpl->tpl_vars['order']->value == "user_lock") {?>DESC<?php } else { ?>ASC<?php }?>&amp;ul=<?php echo $_smarty_tpl->tpl_vars['ul']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'order_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'lock');?>
</a><?php if ($_smarty_tpl->tpl_vars['order']->value == "user_lock" && $_smarty_tpl->tpl_vars['descasc']->value == "ASC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/asc.png" alt="[asc]" width="5" height="9" /><?php } elseif ($_smarty_tpl->tpl_vars['order']->value == "user_lock" && $_smarty_tpl->tpl_vars['descasc']->value == "DESC") {?>&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/desc.png" alt="[desc]" width="5" height="9" /><?php }?></th>
<th colspan="2">&nbsp;</th>
</tr>
<?php
$__section_row_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['userdata']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_row_5_total = $__section_row_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_row'] = new Smarty_Variable(array());
if ($__section_row_5_total !== 0) {
for ($__section_row_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] = 0; $__section_row_5_iteration <= $__section_row_5_total; $__section_row_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']++){
echo smarty_function_cycle(array('values'=>"a,b",'assign'=>'c'),$_smarty_tpl);?>

<tr class="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
<td style="width:10px;"><input type="checkbox" name="selected[]" value="<?php echo $_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_id'];?>
" /></td>
<td><?php if ($_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['inactive']) {?><span title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_inactive');?>
" style="font-weight:bold;color:red;"><?php echo $_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_name'];?>
</span><?php } else { ?><a href="index.php?mode=user&amp;show_user=<?php echo $_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_id'];?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'show_userdata_linktitle'),"[user]",$_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_name']);?>
"><strong><?php echo $_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_name'];?>
</strong></a><?php }?></td>
<td><span class="small"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_email'];?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'mailto_user_lt'),"[user]",$_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_name']);?>
"><?php echo $_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_email'];?>
</a></span></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_type'] == 2) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'admin');
} elseif ($_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_type'] == 1) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'mod');
} else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user');
}?></span></td>
<td><span class="small"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['registered_time'],$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'time_format'));?>
</span></td>
<td><span class="small"><?php echo $_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['logins'];?>
</span></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['logins'] > 0) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['last_login_time'],$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'time_format'));
} else { ?>&nbsp;<?php }?></span></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_type'] > 0) {
if ($_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_lock'] == 0) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'unlocked');
} else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'locked');
}
} elseif ($_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_lock'] == 0) {?><a href="index.php?mode=admin&amp;user_lock=<?php echo $_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_id'];
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'lock_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'unlocked');?>
</a><?php } else { ?><a style="color:red;" href="index.php?mode=admin&amp;user_lock=<?php echo $_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_id'];
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'unlock_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'locked');?>
</a><?php }?></span></td>
<td><a href="index.php?mode=admin&amp;edit_user=<?php echo $_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/edit.png" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit');?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit');?>
" width="16" height="16" /></a></td>
<td><a href="index.php?mode=admin&amp;delete_user=<?php echo $_smarty_tpl->tpl_vars['userdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['user_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete.png" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete');?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete');?>
" width="16" height="16" /></a></td>
</tr>
<?php
}
}
?>
</table>

<div id="admin-usernav-bottom">

<div id="selectioncontrols">
<img id="arrow-selected" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_selected.png" alt="&#x2191;" width="24" height="14" /> <input type="submit" name="delete_selected_users" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_selected_users');?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_users_sb_title');?>
" />
</div>

<div id="userpagination">
<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
<ul class="pagination">
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['previous']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}
if ($_smarty_tpl->tpl_vars['pagination']->value['previous'] > 1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['previous'];
}
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'previous_page_link_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'previous_page_link');?>
</a></li><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['items'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
if ($_smarty_tpl->tpl_vars['item']->value == 0) {?><li>&hellip;</li><?php } elseif ($_smarty_tpl->tpl_vars['item']->value == $_smarty_tpl->tpl_vars['pagination']->value['current']) {?><li><span class="current"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span></li><?php } else { ?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['pagination']->value['next']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'next_page_link_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'next_page_link');?>
</a></li><?php }?>
</ul>
<?php } else { ?>
&nbsp;
<?php }?>
</div>

</div>
</div>
</form>
<?php } else { ?>
<p><em><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'no_users');?>
</em></p>
<?php }?>
<ul class="adminmenu">
<li><a href="index.php?mode=admin&amp;action=register"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/add_user.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'add_user');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=reset_tou"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/edit.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'reset_terms_of_use');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=reset_dps"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/edit.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'reset_data_privacy_statement');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=email_list"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/email_list.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'email_list');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=clear_userdata"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'clear_userdata');?>
</span></a></li>
</ul>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'edit_user') {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['language_file']->value, "user_edit", 0);
?>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'error_headline');?>
</p>
<ul>
<?php
$__section_mysec_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_mysec_6_total = $__section_mysec_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_mysec'] = new Smarty_Variable(array());
if ($__section_mysec_6_total !== 0) {
for ($__section_mysec_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] = 0; $__section_mysec_6_iteration <= $__section_mysec_6_total; $__section_mysec_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']++){
$_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] : null)]);?>
<li><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value),"[profile_length]",$_smarty_tpl->tpl_vars['profil_length']->value),"[profile_maxlength]",$_smarty_tpl->tpl_vars['settings']->value['profile_maxlength']),"[signature_length]",$_smarty_tpl->tpl_vars['signature_length']->value),"[signature_maxlength]",$_smarty_tpl->tpl_vars['settings']->value['signature_maxlength']),"[word]",$_smarty_tpl->tpl_vars['word']->value);?>
</li>
<?php
}
}
?>
</ul>
<?php }
if ($_smarty_tpl->tpl_vars['inactive']->value) {?><p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'caution');?>
</p><p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'activate_note');?>
 <a href="index.php?mode=admin&amp;activate=<?php echo $_smarty_tpl->tpl_vars['edit_user_id']->value;?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'activate_link');?>
</a></p><?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<input type="hidden" name="edit_user_id" value="<?php echo $_smarty_tpl->tpl_vars['edit_user_id']->value;?>
" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_name');?>
</strong></td>
<td class="d"><input type="text" size="40" name="edit_user_name" value="<?php echo $_smarty_tpl->tpl_vars['edit_user_name']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['name_maxlength'];?>
" /></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['avatar']->value) {?>
<tr>
<td class="c"><p class="userdata"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_avatar');?>
</strong></p></td>
<td class="d"><p class="userdata"><img src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['image'];?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'avatar_img_alt');?>
" width="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['height'];?>
" /><br />
<input id="delete_avatar" type="checkbox" name="delete_avatar" value="1"<?php if ($_smarty_tpl->tpl_vars['delete_avatar']->value == "1") {?> checked="checked"<?php }?> /><label for="delete_avatar"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_avatar');?>
</label></p>
</td>
</tr>
<?php }?>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_type');?>
</strong></td>
<td class="d"><input id="edit_user_type_0" type="radio" name="edit_user_type" value="0"<?php if ($_smarty_tpl->tpl_vars['edit_user_type']->value == 0) {?> checked="checked"<?php }?> /><label for="edit_user_type_0"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user');?>
</label><br /><input id="edit_user_type_1" type="radio" name="edit_user_type" value="1"<?php if ($_smarty_tpl->tpl_vars['edit_user_type']->value == 1) {?> checked="checked"<?php }?> /><label for="edit_user_type_1"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'mod');?>
</label><br /><input id="edit_user_type_2" type="radio" name="edit_user_type" value="2"<?php if ($_smarty_tpl->tpl_vars['edit_user_type']->value == 2) {?> checked="checked"<?php }?> /><label for="edit_user_type_2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'admin');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_email');?>
</strong></td>
<td class="d"><input type="text" size="40" name="user_email" value="<?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>
" /><br />
<span class="small"><input id="email_contact" type="checkbox" name="email_contact" value="1"<?php if ($_smarty_tpl->tpl_vars['email_contact']->value == 1) {?> checked="checked"<?php }?> /><label for="email_contact"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_email_contact');?>
</label></span></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_hp');?>
</strong></td>
<td class="d"><input type="text" size="40" name="user_hp" value="<?php echo $_smarty_tpl->tpl_vars['user_hp']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['hp_maxlength'];?>
" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_real_name');?>
</strong></td>
<td class="d"><input type="text" size="40" name="user_real_name" value="<?php echo $_smarty_tpl->tpl_vars['user_real_name']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['name_maxlength'];?>
" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_gender');?>
</strong></td>
<td class="d">
<input id="no-gender" type="radio" name="user_gender" value="0"<?php if ($_smarty_tpl->tpl_vars['user_gender']->value == "0") {?> checked="checked"<?php }?> /><label for="no-gender"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'gender_not_specified');?>
</label><br />
<input id="user_gender_1" type="radio" name="user_gender" value="1"<?php if ($_smarty_tpl->tpl_vars['user_gender']->value == "1") {?> checked="checked"<?php }?> /><label for="user_gender_1"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'male');?>
</label><br />
<input id="user_gender_2" type="radio" name="user_gender" value="2"<?php if ($_smarty_tpl->tpl_vars['user_gender']->value == "2") {?> checked="checked"<?php }?> /><label for="user_gender_2"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'female');?>
</label>
</td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_birthday');?>
</strong></td>
<td class="d"><input type="text" size="40" name="user_birthday" value="<?php echo $_smarty_tpl->tpl_vars['user_birthday']->value;?>
" /> <span class="small">(<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'birthday_format');?>
)</span></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_location');?>
</strong></td>
<td class="d"><input type="text" size="40" name="user_location" value="<?php echo $_smarty_tpl->tpl_vars['user_location']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['location_maxlength'];?>
" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_profile');?>
</strong></td>
<td class="d"><textarea cols="65" rows="4" name="profile"><?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
</textarea></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_signature');?>
</strong></td>
<td class="d"><textarea cols="65" rows="4" name="signature"><?php echo $_smarty_tpl->tpl_vars['signature']->value;?>
</textarea></td>
</tr>

<?php if ($_smarty_tpl->tpl_vars['languages']->value) {?>
<tr>
<td class="c"><strong><label for="user_language"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_language');?>
</label></strong></td>
<td class="d">
<select id="user_language" name="user_language" size="1">
<option value=""<?php if ($_smarty_tpl->tpl_vars['user_language']->value == '') {?> selected="selected"<?php }?>></option>
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
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_user_time_zone');?>
</strong></td>
<td class="d">
<?php if ($_smarty_tpl->tpl_vars['time_zones']->value) {?>
<p>
<select id="user_time_zone" name="user_time_zone" size="1">
<option value=""<?php if ($_smarty_tpl->tpl_vars['user_time_zone']->value == '') {?> selected="selected"<?php }?>></option>
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
<option value=""<?php if ($_smarty_tpl->tpl_vars['user_theme']->value == '') {?> selected="selected"<?php }?>></option>
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

<?php if ($_smarty_tpl->tpl_vars['edit_user_type']->value == 2 || $_smarty_tpl->tpl_vars['edit_user_type']->value == 1) {?>
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
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'delete_users') {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'caution');?>
</p>
<p><?php if ($_smarty_tpl->tpl_vars['selected_users_count']->value > 1) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_users_confirmation');
} else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_user_confirmation');
}?></p>
<ul>
<?php
$__section_nr_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['selected_users']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_nr_7_total = $__section_nr_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_nr'] = new Smarty_Variable(array());
if ($__section_nr_7_total !== 0) {
for ($__section_nr_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] = 0; $__section_nr_7_iteration <= $__section_nr_7_total; $__section_nr_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']++){
?>
<li><a href="index.php?mode=user&amp;show_user=<?php echo $_smarty_tpl->tpl_vars['selected_users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)]['id'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['selected_users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)]['name'];?>
</strong></a></li>
<?php
}
}
?>
</ul>
<br />
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<?php
$__section_nr_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['selected_users']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_nr_8_total = $__section_nr_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_nr'] = new Smarty_Variable(array());
if ($__section_nr_8_total !== 0) {
for ($__section_nr_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] = 0; $__section_nr_8_iteration <= $__section_nr_8_total; $__section_nr_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']++){
?>
<input type="hidden" name="selected_confirmed[]" value="<?php echo $_smarty_tpl->tpl_vars['selected_users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)]['id'];?>
" />
<?php
}
}
?>
<input type="submit" name="delete_confirmed" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_submit');?>
" />
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'user_delete_entries') {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'caution');?>
</p>
<p><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_entries_of_user_confirm'),"[user]",$_smarty_tpl->tpl_vars['user_delete_entries']->value['user']);?>
</p>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<input type="hidden" name="user_delete_entries" value="<?php echo $_smarty_tpl->tpl_vars['user_delete_entries']->value['id'];?>
" />
<input type="submit" name="delete_confirmed" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_submit');?>
" />
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'register') {
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'error_headline');?>
</p>
<ul>
<?php
$__section_mysec_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_mysec_9_total = $__section_mysec_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_mysec'] = new Smarty_Variable(array());
if ($__section_mysec_9_total !== 0) {
for ($__section_mysec_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] = 0; $__section_mysec_9_iteration <= $__section_mysec_9_total; $__section_mysec_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']++){
$_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] : null)]);?>
<li><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value);?>
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
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<p><label for="ar_username" class="main"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_username');?>
</label><br />
<input id="ar_username" type="text" size="25" name="ar_username" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['ar_username']->value)===null||$tmp==='' ? '' : $tmp);?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['name_maxlength'];?>
" /></p>
<p><label for="ar_email" class="main"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_email');?>
</label><br />
<input id="ar_email" type="text" size="25" name="ar_email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['ar_email']->value)===null||$tmp==='' ? '' : $tmp);?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['settings']->value['email_maxlength'];?>
" /></p>
<p><label for="ar_pw" class="main"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_pw');?>
</label><br />
<input id="ar_pw" type="password" size="25" name="ar_pw" maxlength="50" /></p>
<p><input id="ar_send_userdata" type="checkbox" name="ar_send_userdata" value="true"<?php if ($_smarty_tpl->tpl_vars['ar_send_userdata']->value) {?> checked="checked"<?php }?> /> <label for="ar_send_userdata"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_send_userdata');?>
</label></p>
<p><input type="submit" name="register_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit_button_ok');?>
" /></p>
</div>
</form>
<p class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'register_exp');?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'smilies') {
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'error_headline');?>
</p>
<ul>
<?php
$__section_mysec_10_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_mysec_10_total = $__section_mysec_10_loop;
$_smarty_tpl->tpl_vars['__smarty_section_mysec'] = new Smarty_Variable(array());
if ($__section_mysec_10_total !== 0) {
for ($__section_mysec_10_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] = 0; $__section_mysec_10_iteration <= $__section_mysec_10_total; $__section_mysec_10_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']++){
$_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] : null)]);?>
<li><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value);?>
</li>
<?php
}
}
?>
</ul>
<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['smilies'] == 1) {?>
<table id="sortable" class="normaltab" border="0" cellpadding="5" cellspacing="1">
<thead>
<tr>
<th><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'smiley_image');?>
</th>
<th><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'smiley_codes');?>
</th>
<th><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'smiley_title');?>
</th>
<th>&#160;</th>
</tr>
</thead>
<tbody id="items">
<?php
$__section_row_11_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['smilies']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_row_11_total = $__section_row_11_loop;
$_smarty_tpl->tpl_vars['__smarty_section_row'] = new Smarty_Variable(array());
if ($__section_row_11_total !== 0) {
for ($__section_row_11_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] = 0; $__section_row_11_iteration <= $__section_row_11_total; $__section_row_11_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']++){
echo smarty_function_cycle(array('values'=>"a,b",'assign'=>'c'),$_smarty_tpl);?>

<tr id="id_<?php echo $_smarty_tpl->tpl_vars['smilies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
<td><img src="images/smilies/<?php echo $_smarty_tpl->tpl_vars['smilies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['smilies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['code_1'];?>
" /></td>
<td><?php echo $_smarty_tpl->tpl_vars['smilies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['codes'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['smilies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['title'];?>
</td>
<td>

<a href="index.php?mode=admin&amp;edit_smiley=<?php echo $_smarty_tpl->tpl_vars['smilies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/edit.png" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit');?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit');?>
" width="16" height="16" /></a> &nbsp; <a href="index.php?mode=admin&amp;delete_smiley=<?php echo $_smarty_tpl->tpl_vars['smilies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete.png" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete');?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete');?>
" width="16" height="16"/></a> &nbsp; <a href="index.php?mode=admin&amp;move_up_smiley=<?php echo $_smarty_tpl->tpl_vars['smilies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_up.png" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'move_up');?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'move_up');?>
" width="16" height="16" /></a><a href="index.php?mode=admin&amp;move_down_smiley=<?php echo $_smarty_tpl->tpl_vars['smilies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_down.png" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'move_down');?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'move_down');?>
" width="16" height="16" /></a>

</td>

</tr>
<?php
}
}
?>
</tbody>
</table>
<?php if ($_smarty_tpl->tpl_vars['smiley_files']->value) {?>
<form action="index.php" method="post" class="normalform" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin">
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<table style="margin-top:20px;">
<tr>
<td><label for="add_smiley"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'add_smiley');?>
</label></td>
<td><label for="smiley_code"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'add_smiley_code');?>
</label></td>
<td>&nbsp;</td>
</tr>
<tr>
<td>
<select id="add_smiley" name="add_smiley" size="1">
<?php
$__section_nr_12_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['smiley_files']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_nr_12_total = $__section_nr_12_loop;
$_smarty_tpl->tpl_vars['__smarty_section_nr'] = new Smarty_Variable(array());
if ($__section_nr_12_total !== 0) {
for ($__section_nr_12_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] = 0; $__section_nr_12_iteration <= $__section_nr_12_total; $__section_nr_12_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['smiley_files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['smiley_files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)];?>
</option>
<?php
}
}
?>
</select></td>
<td><input id="smiley_code" type="text" name="smiley_code" size="10" /></td>
<td><input type="submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit_button_ok');?>
" /></td>
</tr>
</table>
</div>
</form>
<?php } else { ?>
<p style="margin-top:20px;"><em><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'no_other_smilies_in_folder');?>
</em></p>
<?php }
} else { ?>
<p><em><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'smilies_disabled');?>
</em></p>
<?php }?>
<ul class="adminmenu">
<li><?php if ($_smarty_tpl->tpl_vars['settings']->value['smilies'] == 1) {?><a href="index.php?mode=admin&amp;disable_smilies=true"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/smilies_disable.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'disable_smilies');?>
</span></a><?php } else { ?><a href="index.php?mode=admin&amp;enable_smilies=true"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/smilies.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'enable_smilies');?>
</span></a><?php }?></li>
</ul>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'spam_protection') {
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'error_headline');?>
</p>
<ul>
<?php
$__section_mysec_13_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_mysec_13_total = $__section_mysec_13_loop;
$_smarty_tpl->tpl_vars['__smarty_section_mysec'] = new Smarty_Variable(array());
if ($__section_mysec_13_total !== 0) {
for ($__section_mysec_13_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] = 0; $__section_mysec_13_iteration <= $__section_mysec_13_total; $__section_mysec_13_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']++){
$_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] : null)]);?>
<li><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value);?>
</li>
<?php
}
}
?>
</ul>
<?php }
if ($_smarty_tpl->tpl_vars['saved']->value) {?><p class="ok"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'spam_protection_saved');?>
</p><?php }?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">

<tr>
<td class="c" style="width:30%;"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_desc');
if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value || !$_smarty_tpl->tpl_vars['font_available']->value) {?><br /><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_graphical_desc');
}?></span></td>
<td class="d">
 <table border="0" cellpadding="0" cellspacing="3">
  <tr>
   <td><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_posting');?>
</strong></td>
   <td><input id="captcha_posting_0" type="radio" name="captcha_posting" value="0"<?php if ($_smarty_tpl->tpl_vars['captcha_posting']->value == 0) {?> checked="checked"<?php }?> /><label for="captcha_posting_0"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_disabled');?>
</label></td>
   <td><input id="captcha_posting_1" type="radio" name="captcha_posting" value="1"<?php if ($_smarty_tpl->tpl_vars['captcha_posting']->value == 1) {?> checked="checked"<?php }?> /><label for="captcha_posting_1"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_mathematical');?>
</label></td>
   <td><input id="captcha_posting_2" type="radio" name="captcha_posting" value="2"<?php if ($_smarty_tpl->tpl_vars['captcha_posting']->value == 2) {?> checked="checked"<?php }
if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value) {?> disabled="disabled"<?php }?> /><label for="captcha_posting_2"<?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value) {?> class="unavailable"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_graphical');
if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value || !$_smarty_tpl->tpl_vars['font_available']->value) {?><sup>*</sup><?php }?></label></td>
  </tr>
  <tr>
   <td><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_email');?>
</strong></td>
   <td><input id="captcha_email_0" type="radio" name="captcha_email" value="0"<?php if ($_smarty_tpl->tpl_vars['captcha_email']->value == 0) {?> checked="checked"<?php }?> /><label for="captcha_email_0"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_disabled');?>
</label></td>
   <td><input id="captcha_email_1" type="radio" name="captcha_email" value="1"<?php if ($_smarty_tpl->tpl_vars['captcha_email']->value == 1) {?> checked="checked"<?php }?> /><label for="captcha_email_1"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_mathematical');?>
</label></td>
   <td><input id="captcha_email_2" type="radio" name="captcha_email" value="2"<?php if ($_smarty_tpl->tpl_vars['captcha_email']->value == 2) {?> checked="checked"<?php }
if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value) {?> disabled="disabled"<?php }?> /><label for="captcha_email_2"<?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value) {?> class="unavailable"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_graphical');
if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value || !$_smarty_tpl->tpl_vars['font_available']->value) {?><sup>*</sup><?php }?></label></td>
  </tr>
  <tr>
   <td><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_register');?>
</strong></td>
   <td><input id="captcha_register_0" type="radio" name="captcha_register" value="0"<?php if ($_smarty_tpl->tpl_vars['captcha_register']->value == 0) {?> checked="checked"<?php }?> /><label for="captcha_register_0"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_disabled');?>
</label></td>
   <td><input id="captcha_register_1" type="radio" name="captcha_register" value="1"<?php if ($_smarty_tpl->tpl_vars['captcha_register']->value == 1) {?> checked="checked"<?php }?> /><label for="captcha_register_1"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_mathematical');?>
</label></td>
   <td><input id="captcha_register_2" type="radio" name="captcha_register" value="2"<?php if ($_smarty_tpl->tpl_vars['captcha_register']->value == 2) {?> checked="checked"<?php }
if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value) {?> disabled="disabled"<?php }?> /><label for="captcha_register_2"<?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value) {?> class="unavailable"<?php }?>><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'captcha_graphical');
if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value || !$_smarty_tpl->tpl_vars['font_available']->value) {?><sup>*</sup><?php }?></label></td>
  </tr>
 </table>
 <?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value || !$_smarty_tpl->tpl_vars['font_available']->value) {?>
 <p class="xsmall"><sup>*</sup> <?php if (!$_smarty_tpl->tpl_vars['graphical_captcha_available']->value) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'gr_captcha_not_available');
} elseif (!$_smarty_tpl->tpl_vars['font_available']->value) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'gr_captcha_no_font');
}?></p>
 <?php }?>
</td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'b8');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'b8_desc');?>
</span></td>
<td class="d">
	<p>
		<input id="b8_entry_check" type="checkbox" name="b8_entry_check" value="1"<?php if ($_smarty_tpl->tpl_vars['b8_entry_check']->value == 1) {?> checked="checked"<?php }?> /><label for="b8_entry_check"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'b8_entry_check_enable');?>
</label><br />
		<input id="b8_auto_training" type="checkbox" name="b8_auto_training" value="1"<?php if ($_smarty_tpl->tpl_vars['b8_auto_training']->value == 1) {?> checked="checked"<?php }?> /><label for="b8_auto_training"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'b8_auto_training_enable');?>
</label><br />
		<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'b8_spam_probability_threshold');?>
<br />
		<input id="b8_spam_probability_threshold" type="input" name="b8_spam_probability_threshold" value="<?php echo $_smarty_tpl->tpl_vars['b8_spam_probability_threshold']->value;?>
" size="25" />
	</p>
</td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'stop_forum_spam');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'stop_forum_spam_desc');?>
</span></td>
<td class="d"><input id="stop_forum_spam" type="checkbox" name="stop_forum_spam" value="1"<?php if ($_smarty_tpl->tpl_vars['stop_forum_spam']->value == 1) {?> checked="checked"<?php }?> /><label for="stop_forum_spam"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'stop_forum_spam_enable');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bad_behavior');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bad_behavior_desc');?>
</span></td>
<td class="d"><input id="bad_behavior" type="checkbox" name="bad_behavior" value="1"<?php if ($_smarty_tpl->tpl_vars['bad_behavior']->value == 1) {?> checked="checked"<?php }?> /><label for="bad_behavior"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bad_behavior_enable');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'akismet');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'akismet_desc');?>
</span></td>
<td class="d"><p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'akismet_key');?>
<br />
<input type="text" name="akismet_key" value="<?php echo $_smarty_tpl->tpl_vars['akismet_key']->value;?>
" size="25" /></p>
<p><input id="akismet_entry_check" type="checkbox" name="akismet_entry_check" value="1"<?php if ($_smarty_tpl->tpl_vars['akismet_entry_check']->value == 1) {?> checked="checked"<?php }?> /><label for="akismet_entry_check"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'akismet_entry');?>
</label><br />
<input id="akismet_mail_check" type="checkbox" name="akismet_mail_check" value="1"<?php if ($_smarty_tpl->tpl_vars['akismet_mail_check']->value == 1) {?> checked="checked"<?php }?> /><label for="akismet_mail_check"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'akismet_mail');?>
</label><br />
<p><input id="save_spam" type="checkbox" name="save_spam" value="1"<?php if ($_smarty_tpl->tpl_vars['save_spam']->value == 1) {?> checked="checked"<?php }?> /><label for="save_spam"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'akismet_save_spam');?>
</label></p></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'spam_check_registered');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'spam_check_registered_desc');?>
</span></td>
<td class="d"><input id="spam_check_registered" type="checkbox" name="spam_check_registered" value="1"<?php if ($_smarty_tpl->tpl_vars['spam_check_registered']->value == 1) {?> checked="checked"<?php }?> /><label for="spam_check_registered"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'spam_check_registered_enable');?>
</label></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'auto_delete_spam');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'auto_delete_spam_desc');?>
</span></td>
<td class="d"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'auto_delete_spam_timespan');?>
<br />
<input type="text" name="auto_delete_spam" value="<?php echo $_smarty_tpl->tpl_vars['auto_delete_spam']->value;?>
" size="5" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'not_accepted_words');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'not_accepted_words_desc');?>
</span></td>
<td class="d"><textarea name="not_accepted_words" cols="35" rows="10"><?php echo $_smarty_tpl->tpl_vars['not_accepted_words']->value;?>
</textarea></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'banned_ips');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'banned_ips_desc');?>
</span></td>
<td class="d"><textarea name="banned_ips" cols="35" rows="5"><?php echo $_smarty_tpl->tpl_vars['banned_ips']->value;?>
</textarea></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'banned_user_agents');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'banned_user_agents_desc');?>
</span></td>
<td class="d"><textarea name="banned_user_agents" cols="35" rows="5"><?php echo $_smarty_tpl->tpl_vars['banned_user_agents']->value;?>
</textarea></td>
</tr>
<tr>
<td class="c">&nbsp;</td>
<td class="d"><input type="submit" name="spam_protection_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'spam_protection_submit');?>
" /></td>
</tr>
</table>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'reset_uninstall') {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'caution');?>
</p>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['theme']->value)."/subtemplates/errors.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<h2><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'reset_forum');?>
</h2>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<p><input id="delete_postings" type="checkbox" name="delete_postings" value="true" /><label for="delete_postings"> <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_postings');?>
</label></p>
<p><input id="delete_userdata" type="checkbox" name="delete_userdata" value="true" /><label for="delete_userdata"> <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_userdata');?>
</label></p>
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'admin_confirm_password');?>
<br />
<input type="password" size="20" name="confirm_pw" /> <input type="submit" name="reset_forum_confirmed" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'reset_forum_submit');?>
" /></p>
</div>
</form>

<hr style="margin:20px 0px 20px 0px; border-top: 1px dotted #808080; border-left: 0; border-right: 0; border-bottom: 0; height: 1px;"/>

<h2><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'uninstall_forum');?>
</h2>
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'uninstall_forum_exp');?>
</p>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'reset_uninstall_conf_pw');?>
<br />
<input type="password" size="20" name="confirm_pw" /> <input type="submit" name="uninstall_forum_confirmed" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'uninstall_forum_submit');?>
" /></p>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'backup') {
if ($_smarty_tpl->tpl_vars['errors']->value) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['theme']->value)."/subtemplates/errors.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
if ($_smarty_tpl->tpl_vars['message']->value) {?><p class="ok"><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value);?>
</p><?php }
if ($_smarty_tpl->tpl_vars['backup_files']->value) {?>
<form id="selectform" action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="delete_backup_files_confirm" value="" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<th>&#160;</th>
<th><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_file');?>
</th>
<th><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_date');?>
</th>
<th><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_size');?>
</th>
<th>&#160;</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['backup_files']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
echo smarty_function_cycle(array('values'=>"a,b",'assign'=>'c'),$_smarty_tpl);?>

<tr class="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
<td style="width:10px;"><input type="checkbox" name="delete_backup_files[]" value="<?php echo $_smarty_tpl->tpl_vars['file']->value['file'];?>
" /></td>
<td><?php echo $_smarty_tpl->tpl_vars['file']->value['file'];?>
</td>
<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['file']->value['date'],$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'time_format'));?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['file']->value['size'];?>
</td>
<td><a href="index.php?mode=admin&amp;download_backup_file=<?php echo $_smarty_tpl->tpl_vars['file']->value['file'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/disk.png" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'download_backup_file');?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'download_backup_file');?>
" width="16" height="16" /></a> &#160; <a href="index.php?mode=admin&amp;restore=<?php echo $_smarty_tpl->tpl_vars['file']->value['file'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/restore.png" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'restore');?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'restore');?>
" width="16" height="16" /></a> &#160; <a href="index.php?mode=admin&amp;delete_backup_files[]=<?php echo $_smarty_tpl->tpl_vars['file']->value['file'];?>
" onclick="return delete_backup_confirm(this, '<?php echo rawurlencode($_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'delete_backup_file_confirm'));?>
')"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete.png" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_backup_file');?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_backup_file');?>
" width="16" height="16" /></a></td>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<div id="selectioncontrols"><img id="arrow-selected" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_selected.png" alt="" width="24" height="14" /> <input type="submit" name="delete_selected_backup_files" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_selected');?>
" /></div>
</div>
</form>
<?php } else { ?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'caution');?>
</p>
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_note');?>
</p>
<!--<p><em>No backup files available.</em></p>-->
<?php }?>
<ul class="adminmenu">
<li><a href="index.php?mode=admin&amp;create_backup=0"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/backup.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'create_backup_complete');?>
</span></a></li>
<li><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'only_create_backup_of');?>
 <a href="index.php?mode=admin&amp;create_backup=1"><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_entries');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=2"><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_userdata');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=3"><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_settings');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=4"><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_categories');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=5"><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_pages');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=6"><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_smilies');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=7"><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_banlists');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=8"><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_bookmarks');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=9"><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_read_status');?>
</span></a>, <a href="index.php?mode=admin&amp;create_backup=10"><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_temp_infos');?>
</span></a></span></li>
</ul>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'delete_backup_files_confirm') {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'caution');?>
</p>
<p><?php if ($_smarty_tpl->tpl_vars['file_number']->value == 1) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_backup_file_confirm');
} else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_backup_files_confirm');
}?></p>
<ul>
<?php
$__section_nr_14_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['delete_backup_files']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_nr_14_total = $__section_nr_14_loop;
$_smarty_tpl->tpl_vars['__smarty_section_nr'] = new Smarty_Variable(array());
if ($__section_nr_14_total !== 0) {
for ($__section_nr_14_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] = 0; $__section_nr_14_iteration <= $__section_nr_14_total; $__section_nr_14_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']++){
?>
<li><?php echo $_smarty_tpl->tpl_vars['delete_backup_files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)];?>
</li>
<?php
}
}
?>
</ul>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<?php
$__section_nr_15_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['delete_backup_files']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_nr_15_total = $__section_nr_15_loop;
$_smarty_tpl->tpl_vars['__smarty_section_nr'] = new Smarty_Variable(array());
if ($__section_nr_15_total !== 0) {
for ($__section_nr_15_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] = 0; $__section_nr_15_iteration <= $__section_nr_15_total; $__section_nr_15_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']++){
?>
<input type="hidden" name="delete_backup_files[]" value="<?php echo $_smarty_tpl->tpl_vars['delete_backup_files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)];?>
" />
<?php
}
}
?>
<input type="submit" name="delete_backup_files_confirm" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_backup_submit');?>
" />
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'restore') {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'caution');?>
</p>
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'restore_confirm');?>
</p>
<p><strong><?php echo $_smarty_tpl->tpl_vars['backup_file']->value;?>
</strong> - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['backup_file_date']->value,$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'time_format'));?>
</p>
<?php if ($_smarty_tpl->tpl_vars['safe_mode_warning']->value) {?><p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'restore_safe_mode_warning');?>
</p>
<p style="color:red;"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'restore_safe_mode_note');?>
</p><?php }
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'error_headline');?>
</p>
<ul>
<?php
$__section_error_16_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_error_16_total = $__section_error_16_loop;
$_smarty_tpl->tpl_vars['__smarty_section_error'] = new Smarty_Variable(array());
if ($__section_error_16_total !== 0) {
for ($__section_error_16_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_error']->value['index'] = 0; $__section_error_16_iteration <= $__section_error_16_total; $__section_error_16_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_error']->value['index']++){
$_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_error']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_error']->value['index'] : null)]);?>
<li><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value),"[mysql_error]",$_smarty_tpl->tpl_vars['mysql_error']->value);?>
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
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="backup_file" value="<?php echo $_smarty_tpl->tpl_vars['backup_file']->value;?>
" />
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'admin_confirm_password');?>
<br /><input type="password" name="restore_password" size="25"/></p>
<p><input type="submit" name="restore_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'restore_submit');?>
" onclick="document.getElementById('throbber-submit').style.visibility = 'visible';" /> <img id="throbber-submit" style="visibility:hidden;" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/throbber_submit.gif" alt="" width="16" height="16" /></p>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'update') {?>
<p style="margin-bottom:25px;"><span style="background:yellow; padding:5px;"><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'update_current_version'),"[version]",$_smarty_tpl->tpl_vars['settings']->value['version']);?>
</span></p>

<h3><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'update_instructions_hl');?>
</h3>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'update_instructions'), 'instruction');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['instruction']->value) {
?>
<li><?php echo $_smarty_tpl->tpl_vars['instruction']->value;?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php if ($_smarty_tpl->tpl_vars['errors']->value) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['theme']->value)."/subtemplates/errors.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
if ($_smarty_tpl->tpl_vars['message']->value) {?><p class="ok"><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['message']->value);?>
</p><?php }
if ($_smarty_tpl->tpl_vars['update_files']->value) {?>
<h3><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'update_available_files');?>
</h3>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['update_files']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
<li><a href="index.php?mode=admin&amp;run_update=<?php echo $_smarty_tpl->tpl_vars['file']->value['filename'];?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'update_file_title');?>
"><?php echo $_smarty_tpl->tpl_vars['file']->value['filename'];?>
</a></li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php } else { ?>
<p><em><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'update_no_files_available');?>
</em></p>
<?php }
} elseif ($_smarty_tpl->tpl_vars['action']->value == 'run_update') {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'caution');?>
</p>
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'update_confirm');?>
</p>
<p><strong><?php echo $_smarty_tpl->tpl_vars['update_file']->value;?>
</strong><?php if ($_smarty_tpl->tpl_vars['update_from_version']->value && $_smarty_tpl->tpl_vars['update_to_version']->value) {?> <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'update_file_details'),"[update_from_version]",$_smarty_tpl->tpl_vars['update_from_version']->value),"[update_to_version]",$_smarty_tpl->tpl_vars['update_to_version']->value);
}?></p>
<p style="color:red;font-weight:bold;"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'update_note');?>
</p>
<?php if ($_smarty_tpl->tpl_vars['errors']->value) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['theme']->value)."/subtemplates/errors.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="update_file_submit" value="<?php echo $_smarty_tpl->tpl_vars['update_file']->value;?>
" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'admin_confirm_password');?>
<br /><input type="password" name="update_password" size="25"/></p>
<p><input type="submit" name="update_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'update_submit');?>
" onclick="document.getElementById('throbber-submit').style.visibility = 'visible';" /> <img id="throbber-submit" style="visibility:hidden;" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/throbber_submit.gif" alt="" width="16" height="16" /></p>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'update_done') {
if ($_smarty_tpl->tpl_vars['update_errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'error_headline');?>
</p>
<ul>
<?php
$__section_mysec_17_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['update_errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_mysec_17_total = $__section_mysec_17_loop;
$_smarty_tpl->tpl_vars['__smarty_section_mysec'] = new Smarty_Variable(array());
if ($__section_mysec_17_total !== 0) {
for ($__section_mysec_17_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] = 0; $__section_mysec_17_iteration <= $__section_mysec_17_total; $__section_mysec_17_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']++){
$_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['update_errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] : null)]);?>
<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
<?php
}
}
?>
</ul>
<?php } else { ?>
<p class="ok"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'update_successful');?>
</p>
<?php }
if ($_smarty_tpl->tpl_vars['update_items']->value) {?>
<p><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'update_items_note'),"[version]",$_smarty_tpl->tpl_vars['update_new_version']->value);?>
</p>
<ul class="filelist">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['update_items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
<li><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/<?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 0) {?>folder.png<?php } else { ?>file.png<?php }?>" alt="[<?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == 0) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'folder_alt');
} else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'file_alt');
}?>]" width="16" height="16" /><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
if ($_smarty_tpl->tpl_vars['update_download_url']->value) {?><p class="small"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'update_download'),"[[","<a href=\"".((string)$_smarty_tpl->tpl_vars['update_download_url']->value)."\">"),"]]","</a>");?>
</p><?php }
if ($_smarty_tpl->tpl_vars['update_message']->value) {
echo $_smarty_tpl->tpl_vars['update_message']->value;
}
} elseif ($_smarty_tpl->tpl_vars['action']->value == 'email_list') {?>
<textarea onfocus="this.select()" onclick="this.select()" readonly="readonly" cols="60" rows="15"><?php echo $_smarty_tpl->tpl_vars['email_list']->value;?>
</textarea>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'clear_userdata') {
if ($_smarty_tpl->tpl_vars['no_users_in_selection']->value) {?><p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'no_users_in_selection');?>
</p><?php }
$_smarty_tpl->_assignInScope('input_logins', "<input type=\"text\" name=\"logins\" value=\"".((string)$_smarty_tpl->tpl_vars['logins']->value)."\" size=\"4\" />");
$_smarty_tpl->_assignInScope('input_days', "<input type=\"text\" name=\"days\" value=\"".((string)$_smarty_tpl->tpl_vars['days']->value)."\" size=\"4\" />");?>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<p><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'clear_userdata_condition'),"[logins]",$_smarty_tpl->tpl_vars['input_logins']->value),"[days]",$_smarty_tpl->tpl_vars['input_days']->value);?>
 <input type="submit" name="clear_userdata" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit_button_ok');?>
" /></p>
</div>
</form>
<p class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'clear_userdata_note');?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'edit_smiley') {
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'error_headline');?>
</p>
<ul>
<?php
$__section_mysec_18_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_mysec_18_total = $__section_mysec_18_loop;
$_smarty_tpl->tpl_vars['__smarty_section_mysec'] = new Smarty_Variable(array());
if ($__section_mysec_18_total !== 0) {
for ($__section_mysec_18_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] = 0; $__section_mysec_18_iteration <= $__section_mysec_18_total; $__section_mysec_18_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']++){
$_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] : null)]);?>
<li><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value);?>
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
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_smilies_smiley');?>
</strong></td>
<td class="d"><select name="file" size="1">
<?php
$__section_nr_19_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['smiley_files']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_nr_19_total = $__section_nr_19_loop;
$_smarty_tpl->tpl_vars['__smarty_section_nr'] = new Smarty_Variable(array());
if ($__section_nr_19_total !== 0) {
for ($__section_nr_19_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] = 0; $__section_nr_19_iteration <= $__section_nr_19_total; $__section_nr_19_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']++){
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['smiley_files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)];?>
"<?php if ($_smarty_tpl->tpl_vars['file']->value == $_smarty_tpl->tpl_vars['smiley_files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['smiley_files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)];?>
</option>
<?php
}
}
?>
</select></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_smilies_codes');?>
</strong></td>
<td class="d"><input type="text" name="code_1" size="7" value="<?php echo $_smarty_tpl->tpl_vars['code_1']->value;?>
" /> <input type="text" name="code_2" size="7" value="<?php echo $_smarty_tpl->tpl_vars['code_2']->value;?>
" /> <input type="text" name="code_3" size="7" value="<?php echo $_smarty_tpl->tpl_vars['code_3']->value;?>
" /> <input type="text" name="code_4" size="7" value="<?php echo $_smarty_tpl->tpl_vars['code_4']->value;?>
" /> <input type="text" name="code_5" size="7" value="<?php echo $_smarty_tpl->tpl_vars['code_5']->value;?>
" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_smilies_title');?>
</strong></td>
<td class="d"><input type="text" name="title" size="25" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" /></td>
</tr>
<tr>
<td class="c">&nbsp;</td>
<td class="d"><input type="submit" name="edit_smiley_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'submit_button_ok');?>
" /></td>
</tr>
</table>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'pages') {
if ($_smarty_tpl->tpl_vars['pages']->value) {?>
<table id="sortable" class="normaltab" cellspacing="1" cellpadding="5">
<thead>
<tr>
<th><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_title');?>
</th>
<th><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_menu_linkname');?>
</th>
<th><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_access');?>
</th>
<th>&#160;</th>
</tr>
</thead>
<tbody id="items">
<?php
$__section_page_20_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_page_20_total = $__section_page_20_loop;
$_smarty_tpl->tpl_vars['__smarty_section_page'] = new Smarty_Variable(array());
if ($__section_page_20_total !== 0) {
for ($__section_page_20_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] = 0; $__section_page_20_iteration <= $__section_page_20_total; $__section_page_20_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']++){
echo smarty_function_cycle(array('values'=>"a,b",'assign'=>'c'),$_smarty_tpl);?>

<tr id="id_<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['id'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
<td><a href="index.php?mode=page&amp;id=<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['title'];?>
"><strong class="control"><?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['title'];?>
</strong></a></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['menu_linkname'] != '') {
echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['menu_linkname'];
} else { ?>&nbsp;<?php }?></span></td>
<td><span class="small"><?php if ($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['access'] == 1) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_access_reg_users');
} elseif ($_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['access'] == 0) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_access_public');
}?></span></td>
<td><a href="index.php?mode=admin&amp;edit_page=<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/edit.png" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit');?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit');?>
" width="16" height="16" /></a> &#160; <a href="index.php?mode=admin&amp;delete_page=<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete.png" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete');?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete');?>
" width="16" height="16"/></a> &nbsp; <a href="index.php?mode=admin&amp;move_up_page=<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_up.png" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'move_up');?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'move_up');?>
" width="16" height="16" /></a>&nbsp;<a href="index.php?mode=admin&amp;move_down_page=<?php echo $_smarty_tpl->tpl_vars['pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] : null)]['id'];?>
"><img class="control" src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/arrow_down.png" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'move_down');?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'move_down');?>
" width="16" height="16" /></a></td>
</tr>
<?php
}
}
?>
</tbody>
</table>
<?php } else { ?>
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'no_pages');?>
</p>
<?php }?>
<ul class="adminmenu"><li><a href="index.php?mode=admin&amp;action=edit_page"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/add_page.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'add_page_link');?>
</span></a></li></ul>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'edit_page') {
if ($_smarty_tpl->tpl_vars['errors']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'error_headline');?>
</p>
<ul>
<?php
$__section_mysec_21_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_mysec_21_total = $__section_mysec_21_loop;
$_smarty_tpl->tpl_vars['__smarty_section_mysec'] = new Smarty_Variable(array());
if ($__section_mysec_21_total !== 0) {
for ($__section_mysec_21_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] = 0; $__section_mysec_21_iteration <= $__section_mysec_21_total; $__section_mysec_21_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']++){
$_smarty_tpl->_assignInScope('error', $_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_mysec']->value['index'] : null)]);?>
<li><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value);?>
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
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<?php if ($_smarty_tpl->tpl_vars['id']->value) {?><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" /><?php }?>
<table class="normaltab" border="0" cellpadding="5" cellspacing="1">
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_title');?>
</strong></td>
<td class="d"><input type="text" name="title" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? '' : $tmp);?>
" size="50" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_content');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_content_desc');?>
</span></td>
<td class="d"><textarea name="content" cols="70" rows="20"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? '' : $tmp);?>
</textarea></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_menu_linkname');?>
</strong><br /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_menu_linkname_desc');?>
</span></td>
<td class="d"><input type="text" name="menu_linkname" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['menu_linkname']->value)===null||$tmp==='' ? '' : $tmp);?>
" size="50" /></td>
</tr>
<tr>
<td class="c"><strong><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_access');?>
</strong></td>
<td class="d"><input type="radio" name="access" value="0"<?php if ($_smarty_tpl->tpl_vars['access']->value == 0) {?> checked="checked"<?php }?> /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_access_public');?>
</span> <input type="radio" name="access" value="1"<?php if ($_smarty_tpl->tpl_vars['access']->value == 1) {?> checked="checked"<?php }?> /><span class="small"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_access_reg_users');?>
</span></td>
</tr>

<tr>
<td class="c">&nbsp;</td>
<td class="d"><input type="submit" name="edit_page_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_page_submit');?>
" /></td>
</tr>
</table>
</div>
</form>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'delete_page') {
if ($_smarty_tpl->tpl_vars['page']->value) {?>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'caution');?>
</p>
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_page_confirm');?>
</p>
<p><strong><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</strong></p>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
" />
<input type="submit" name="delete_page_submit" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_page_submit');?>
" />
</div>
</form>
<?php } else { ?>
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'page_doesnt_exist');?>
</p>
<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['action']->value == 'list_uploads') {?>
<h2 id="admin_header"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'upload_administration');?>
</h2>
<?php if ($_smarty_tpl->tpl_vars['images']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['pagination']->value) {?>
<div id="usernav">
<div id="userpagination">
<ul class="pagination">
<?php if ($_smarty_tpl->tpl_vars['pagination']->value['previous']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}
if ($_smarty_tpl->tpl_vars['pagination']->value['previous'] > 1) {?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['previous'];
}
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'previous_page_link_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'previous_page_link');?>
</a></li><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['items'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
if ($_smarty_tpl->tpl_vars['item']->value == 0) {?><li>&hellip;</li><?php } elseif ($_smarty_tpl->tpl_vars['item']->value == $_smarty_tpl->tpl_vars['pagination']->value['current']) {?><li><span class="current"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</span></li><?php } else { ?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['item']->value;
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['pagination']->value['next']) {?><li><a href="index.php?mode=<?php echo $_smarty_tpl->tpl_vars['mode']->value;
if ($_smarty_tpl->tpl_vars['action']->value) {?>&amp;action=<?php echo $_smarty_tpl->tpl_vars['action']->value;
}
if ($_smarty_tpl->tpl_vars['search_user_encoded']->value) {?>&amp;search_user=<?php echo $_smarty_tpl->tpl_vars['search_user_encoded']->value;
}
if ($_smarty_tpl->tpl_vars['method']->value && $_smarty_tpl->tpl_vars['method']->value != 'fulltext') {?>&amp;method=<?php echo $_smarty_tpl->tpl_vars['method']->value;
}
if ($_smarty_tpl->tpl_vars['id']->value) {?>&amp;id=<?php echo $_smarty_tpl->tpl_vars['id']->value;
}?>&amp;page=<?php echo $_smarty_tpl->tpl_vars['pagination']->value['next'];
if ($_smarty_tpl->tpl_vars['p_category']->value && $_smarty_tpl->tpl_vars['p_category']->value > 0) {?>&amp;p_category=<?php echo $_smarty_tpl->tpl_vars['p_category']->value;
}
if ($_smarty_tpl->tpl_vars['order']->value) {?>&amp;order=<?php echo $_smarty_tpl->tpl_vars['order']->value;
}
if ($_smarty_tpl->tpl_vars['descasc']->value) {?>&amp;descasc=<?php echo $_smarty_tpl->tpl_vars['descasc']->value;
}?>" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'next_page_link_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'next_page_link');?>
</a></li><?php }?>
</ul>
</div>
</div>
<?php }?>

<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<input type="hidden" name="mode" value="admin" />
<input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
 <ul id="uploadlist">
<?php
$__section_nr_22_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['images']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_nr_22_start = (int)@$_smarty_tpl->tpl_vars['start']->value < 0 ? max(0, (int)@$_smarty_tpl->tpl_vars['start']->value + $__section_nr_22_loop) : min((int)@$_smarty_tpl->tpl_vars['start']->value, $__section_nr_22_loop);
$__section_nr_22_total = min(($__section_nr_22_loop - $__section_nr_22_start), (int)@$_smarty_tpl->tpl_vars['images_per_page']->value < 0 ? $__section_nr_22_loop : (int)@$_smarty_tpl->tpl_vars['images_per_page']->value);
$_smarty_tpl->tpl_vars['__smarty_section_nr'] = new Smarty_Variable(array());
if ($__section_nr_22_total !== 0) {
for ($__section_nr_22_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] = $__section_nr_22_start; $__section_nr_22_iteration <= $__section_nr_22_total; $__section_nr_22_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']++){
?>
  <li><p class="image_container"><img src="images/uploaded/<?php echo $_smarty_tpl->tpl_vars['images']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['images']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)];?>
" /></p>
  <p class="management_container"><input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['images']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)];?>
" name="uploads_remove[]" value="<?php echo $_smarty_tpl->tpl_vars['images']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)];?>
" /><label for="<?php echo $_smarty_tpl->tpl_vars['images']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'mark_upload_for_removal');?>
</label></p></li>
<?php
}
}
?>
 </ul>
 <p><input type="submit" name="delete_selected_uploads" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete');?>
" /></p>
</form>
<?php } else { ?>
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'no_uploads_found');?>
</p>
<?php }
} elseif ($_smarty_tpl->tpl_vars['action']->value == 'delete_uploads') {?>
<h2 id="admin_header"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'upload_administration');?>
</h2>
<p class="caution"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'caution');?>
</p>
<p><?php if ($_smarty_tpl->tpl_vars['selected_uploads_count']->value > 1) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_uploads_confirmation');
} else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_upload_confirmation');
}?></p>
<form action="index.php" method="post" accept-charset="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'charset');?>
">
<div>
 <input type="hidden" name="mode" value="admin" />
 <input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['CSRF_TOKEN']->value;?>
" />
 <ul class="confirm-selection">
<?php
$__section_nr_23_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['selected_uploads']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_nr_23_total = $__section_nr_23_loop;
$_smarty_tpl->tpl_vars['__smarty_section_nr'] = new Smarty_Variable(array());
if ($__section_nr_23_total !== 0) {
for ($__section_nr_23_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] = 0; $__section_nr_23_iteration <= $__section_nr_23_total; $__section_nr_23_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']++){
?>
  <li><input type="hidden" name="selected_confirmed[]" value="<?php echo $_smarty_tpl->tpl_vars['selected_uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)]['name'];?>
" />
   <p class="item"><img src="images/uploaded/<?php echo $_smarty_tpl->tpl_vars['selected_uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)]['name'];?>
" width="64" alt="" /></p><p class="info"><?php echo $_smarty_tpl->tpl_vars['selected_uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nr']->value['index'] : null)]['name'];?>
</p></li>
<?php
}
}
?>
 </ul>
 <input type="submit" name="delete_uploads_confirmed" value="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_submit');?>
" />
</div>
</form>
<?php } else { ?>
<div class="additional-admin-info">
	<div id="admin-info-current-version">
		<h3><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'actual_installed_version_header');?>
</h3>
		<p><?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'actual_installed_version'),"[current_version_string]",$_smarty_tpl->tpl_vars['installed_version_number']->value);?>
</p>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['install_script_exists']->value) {?>
	<div id="admin-info-install_script_exists">
		<h3><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'warning_header');?>
</h3>
		<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'warning_install_script_exists');?>
</p>
	</div>
	<?php }?>
	<div id="admin-info-releases">
	<?php if ($_smarty_tpl->tpl_vars['latest_release_version']->value) {?>
		<h3><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'releases_info_header');?>
</h3>
		<?php if ($_smarty_tpl->tpl_vars['latest_release_uri']->value) {?>
			<p><a href="<?php echo $_smarty_tpl->tpl_vars['latest_release_uri']->value;?>
">Download <?php echo $_smarty_tpl->tpl_vars['latest_release_version']->value;?>
</a></p>
		<?php } else { ?>
			<p><a href="https://github.com/ilosuna/mylittleforum/releases/latest">Download <?php echo $_smarty_tpl->tpl_vars['latest_release_version']->value;?>
</a></p>
		<?php }?>
	<?php } else { ?>
		<h3><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'releases_info_header');?>
</h3>
		<p><a href="https://github.com/ilosuna/mylittleforum/releases/latest"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'releases_list_link');?>
</a></p>
	<?php }?>
	</div>
</div>
<ul class="adminmenu">
<li><a href="index.php?mode=admin&amp;action=settings"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/settings.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'forum_settings_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=user"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/user.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'user_administr_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=categories"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/categories.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'category_administr_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=smilies"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/smilies.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'smilies_administr_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=list_uploads"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/image.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'upload_administr_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=pages"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/pages.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pages_administr_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=spam_protection"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/spam_protection.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'spam_protection_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=backup"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/backup.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backup_restore_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=update"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/update.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'update_link');?>
</span></a></li>
<li><a href="index.php?mode=admin&amp;action=reset_uninstall"><img src="<?php echo $_smarty_tpl->tpl_vars['THEMES_DIR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/delete.png" alt="" width="16" height="16" /><span><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'reset_uninstall_link');?>
</span></a></li>
</ul>
<?php }
}
}
