<?php
/* Smarty version 3.1.32, created on 2019-02-13 16:39:01
  from 'C:\xampp\htdocs\mylittleforum\themes\default\subtemplates\thread.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c6448259455a8_46410693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62825b5cc251324698c0b021ea9970463f68d88c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mylittleforum\\themes\\default\\subtemplates\\thread.inc.tpl',
      1 => 1550072548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6448259455a8_46410693 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'tree' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\mylittleforum\\templates_c\\62825b5cc251324698c0b021ea9970463f68d88c_0.file.thread.inc.tpl.php',
    'uid' => '62825b5cc251324698c0b021ea9970463f68d88c',
    'call_name' => 'smarty_template_function_tree_6634270615c64482572c645_49420131',
  ),
));
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['language_file']->value, "entry", 0);
?>


<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'tree', array('element'=>$_smarty_tpl->tpl_vars['tid']->value), true);?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['rss_feed'] == 1) {?><div class="small" style="text-align:right;"><a class="rss" href="index.php?mode=rss&amp;thread=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rss_feed_thread_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rss_feed_thread');?>
</a></div><?php }
}
/* smarty_template_function_tree_6634270615c64482572c645_49420131 */
if (!function_exists('smarty_template_function_tree_6634270615c64482572c645_49420131')) {
function smarty_template_function_tree_6634270615c64482572c645_49420131(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\mylittleforum\\modules\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<div class="<?php if ($_smarty_tpl->tpl_vars['level']->value == 0) {?>thread-wrapper<?php } elseif ($_smarty_tpl->tpl_vars['level']->value > 0 && $_smarty_tpl->tpl_vars['level']->value < $_smarty_tpl->tpl_vars['settings']->value['deep_reply']) {?>reply-wrapper<?php } elseif ($_smarty_tpl->tpl_vars['level']->value >= $_smarty_tpl->tpl_vars['settings']->value['deep_reply'] && $_smarty_tpl->tpl_vars['level']->value < $_smarty_tpl->tpl_vars['settings']->value['very_deep_reply']) {?>deep-reply-wrapper<?php } else { ?>very-deep-reply-wrapper<?php }?>">
<?php $_smarty_tpl->_assignInScope('email_alt', $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'email'));
$_smarty_tpl->_assignInScope('homepage_alt', $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'homepage'));
$_smarty_tpl->_assignInScope('hp', $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['hp']);
$_smarty_tpl->_assignInScope('email', $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['email']);
$_smarty_tpl->_assignInScope('email_id', $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id']);
if ($_smarty_tpl->tpl_vars['hp']->value && !$_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->_assignInScope('email_hp', " <a href=\"".((string)$_smarty_tpl->tpl_vars['hp']->value)."\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/homepage.png\" title=\"".((string)$_smarty_tpl->tpl_vars['homepage_alt']->value)."\" alt=\"⌂\" width=\"13\" height=\"13\" /></a>");
} elseif (!$_smarty_tpl->tpl_vars['hp']->value && $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->_assignInScope('email_hp', " <a href=\"index.php?mode=contact&amp;id=".((string)$_smarty_tpl->tpl_vars['email_id']->value)."\" rel=\"nofollow\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/email.png\" title=\"".((string)$_smarty_tpl->tpl_vars['email_alt']->value)."\" alt=\"@\" width=\"13\" height=\"10\" /></a>");
} elseif ($_smarty_tpl->tpl_vars['hp']->value && $_smarty_tpl->tpl_vars['email']->value) {
$_smarty_tpl->_assignInScope('email_hp', " <a href=\"".((string)$_smarty_tpl->tpl_vars['hp']->value)."\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/homepage.png\" title=\"".((string)$_smarty_tpl->tpl_vars['homepage_alt']->value)."\" alt=\"⌂\" width=\"13\" height=\"13\" /></a> <a href=\"index.php?mode=contact&amp;id=".((string)$_smarty_tpl->tpl_vars['email_id']->value)."\" rel=\"nofollow\"><img src=\"".((string)$_smarty_tpl->tpl_vars['THEMES_DIR']->value)."/".((string)$_smarty_tpl->tpl_vars['theme']->value)."/images/email.png\" title=\"".((string)$_smarty_tpl->tpl_vars['email_alt']->value)."\" alt=\"@\" width=\"13\" height=\"10\" /></a>");
} else {
$_smarty_tpl->_assignInScope('email_hp', '');
}?>

<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['user_type'] == 2) {
$_smarty_tpl->_assignInScope('admin_name', $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['name']);
$_smarty_tpl->_assignInScope('admin_title', $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'administrator_title'));
$_smarty_tpl->_assignInScope('name', "<span class=\"admin registered_user\" title=\"".((string)$_smarty_tpl->tpl_vars['admin_title']->value)."\">".((string)$_smarty_tpl->tpl_vars['admin_name']->value)."</span>");
} elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['user_type'] == 1) {
$_smarty_tpl->_assignInScope('mod_name', $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['name']);
$_smarty_tpl->_assignInScope('mod_title', $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'moderator_title'));
$_smarty_tpl->_assignInScope('name', "<span class=\"mod registered_user\" title=\"".((string)$_smarty_tpl->tpl_vars['mod_title']->value)."\">".((string)$_smarty_tpl->tpl_vars['mod_name']->value)."</span>");
} elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['user_id'] > 0) {
$_smarty_tpl->_assignInScope('user_name', $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['name']);
$_smarty_tpl->_assignInScope('name', "<span class=\"registered_user\">".((string)$_smarty_tpl->tpl_vars['user_name']->value)."</span>");
} else {
$_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['name']);
}?>

<?php if (($_smarty_tpl->tpl_vars['user']->value || $_smarty_tpl->tpl_vars['settings']->value['user_area_public'] == 1) && $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['user_id'] > 0) {
$_smarty_tpl->_assignInScope('posting_user_id', $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['user_id']);
$_smarty_tpl->_assignInScope('name', "<a href=\"index.php?mode=user&amp;show_user=".((string)$_smarty_tpl->tpl_vars['posting_user_id']->value)."\">".((string)$_smarty_tpl->tpl_vars['name']->value)."</a>");
}?>
<div class="thread-posting<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['new']) {?> new<?php }
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['is_read']) {?> read<?php }?>" id="p<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
">
<div class="header">
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['avatar']) {?><img id="avatar-<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
" class="avatar" src="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['avatar']['image'];?>
" alt="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'avatar_img_alt');?>
" width="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['avatar']['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['avatar']['height'];?>
" /><?php }?>
<h<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid'] == 0) {?>1<?php } else { ?>2<?php }?> id="headline-<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['subject'];
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid'] == 0 && $_smarty_tpl->tpl_vars['category_name']->value) {?> <span class="category">(<?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
)</span><?php }?></h<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid'] == 0) {?>1<?php } else { ?>2<?php }?>>
<p class="author"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['location']) {
echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'posted_by_location'),"[name]",$_smarty_tpl->tpl_vars['name']->value),"[email_hp]",$_smarty_tpl->tpl_vars['email_hp']->value),"[location]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['location']),"[time]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['formated_time']);
} else {
echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'posted_by'),"[name]",$_smarty_tpl->tpl_vars['name']->value),"[email_hp]",$_smarty_tpl->tpl_vars['email_hp']->value),"[time]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['formated_time']);
}?> <span class="ago">(<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['days'] > 1) {
echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'posting_several_days_ago'),"[days]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['days_rounded']);
} else {
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['days'] == 0 && $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['hours'] == 0) {
echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'posting_minutes_ago'),"[minutes]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['minutes']);
} elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['days'] == 0 && $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['hours'] != 0) {
echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'posting_hours_ago'),"[hours]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['hours']),"[minutes]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['minutes']);
} else {
echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'posting_one_day_ago'),"[hours]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['hours']),"[minutes]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ago']['minutes']);
}
}?>)</span><?php if ($_smarty_tpl->tpl_vars['admin']->value && $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ip']) {?> <span class="ip">(<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['ip'];?>
)</span><?php }
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid'] != 0) {
$_smarty_tpl->_assignInScope('parent_posting', $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid']);?> <span class="op-link"><a href="#p<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid'];?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'original_posting_linktitle'),"[name]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['parent_posting']->value]['name']);?>
">@ <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['parent_posting']->value]['name'];?>
</a></span><?php }
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['edited']) {?><br />
<span class="edited"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edited_by'),"[name]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['edited_by']),"[time]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['formated_edit_time']);?>
</span><?php }?></p>
</div>
<div class="wrapper" id="posting-<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
">
<div class="body">
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['posting']) {
echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['posting'];?>

<?php } else { ?>
<p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'no_text');?>
</p>
<?php }
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['signature']) {?>
<p class="signature">--<br />
<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['signature'];?>
</p>
<?php }
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['tags']) {?>
<p class="tags"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tags_marking');?>
<br />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['tags'], 'tag', false, NULL, 'tags', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_tags']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_tags']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_tags']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_tags']->value['total'];
?><a href="index.php?mode=search&amp;search=<?php echo $_smarty_tpl->tpl_vars['tag']->value['escaped'];?>
&amp;method=tags"><?php echo $_smarty_tpl->tpl_vars['tag']->value['display'];?>
</a><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_tags']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tags']->value['last'] : null)) {?>, <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></p>
<?php }?>
</div>
<div class="posting-footer">
<div class="reply"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['locked'] == 0) {?><a class="stronglink" href="index.php?mode=posting&amp;id=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'reply_link_title');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'reply_link');?>
</a><?php } else { ?><span class="locked"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'posting_locked');?>
</span><?php }?></div>
<div class="info">&nbsp;
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['views']) {?><span class="views"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['views'] == 1) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'one_view');
} else {
echo smarty_modifier_replace($_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'several_views'),"[views]",$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['views']);
}?></span><?php }
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']) {?>
<ul class="options">
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']['add_bookmark']) {?><li><a href="index.php?mode=posting&amp;bookmark=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="add-bookmark" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'add_bookmark_message_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'add_bookmark_message_linkname');?>
</a></li><?php }
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']['delete_bookmark']) {?><li><a href="index.php?mode=posting&amp;bookmark=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="delete-bookmark" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_bookmark_message_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_bookmark_message_linkname');?>
</a></li><?php }
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']['edit']) {?><li><a href="index.php?mode=posting&amp;edit=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="edit" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_message_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'edit_message_linkname');?>
</a></li><?php }
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']['delete']) {?><li><a href="index.php?mode=posting&amp;delete_posting=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="delete" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_message_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'delete_message_linkname');?>
</a></li><?php }
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']['move']) {?><li><a href="index.php?mode=posting&amp;move_posting=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="move" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'move_posting_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'move_posting_linkname');?>
</a></li><?php }
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']['report_spam']) {?><li><a href="index.php?mode=posting&amp;report_spam=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="report" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'report_spam_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'report_spam_linkname');?>
</a></li><?php }
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']['flag_ham']) {?><li><a href="index.php?mode=posting&amp;flag_ham=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="report" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'flag_ham_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'flag_ham_linkname');?>
</a></li><?php }
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['options']['lock']) {?><li><a href="index.php?mode=posting&amp;lock=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['locked'] == 0) {?>lock<?php } else { ?>unlock<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['locked'] == 0) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'lock_linktitle');
} else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'unlock_linktitle');
}?>"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['locked'] == 0) {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'lock_linkname');
} else {
echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'unlock_linkname');
}?></a></li>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['pid'] == 0) {?><li><a href="index.php?mode=posting&amp;lock_thread=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="lock-thread" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'lock_thread_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'lock_thread_linkname');?>
</a></li>
<li><a href="index.php?mode=posting&amp;unlock_thread=<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['element']->value]['id'];?>
&amp;back=thread" class="lock-thread" title="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'unlock_thread_linktitle');?>
"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'unlock_thread_linkname');?>
</a></li><?php }
}?>
</ul>
<?php }?>
</div>
</div>
</div>
</div>
<?php if (is_array($_smarty_tpl->tpl_vars['child_array']->value[$_smarty_tpl->tpl_vars['element']->value])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_array']->value[$_smarty_tpl->tpl_vars['element']->value], 'child');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'tree', array('element'=>$_smarty_tpl->tpl_vars['child']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</div>
<?php
}}
/*/ smarty_template_function_tree_6634270615c64482572c645_49420131 */
}
