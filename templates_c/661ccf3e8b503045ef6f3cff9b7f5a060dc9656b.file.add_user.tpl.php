<?php /* Smarty version Smarty-3.1.15, created on 2017-05-22 08:45:55
         compiled from "/opt/lbaw/lbaw1635/public_html/muss/templates/admin/add_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8992771505922973343b230-38436175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '661ccf3e8b503045ef6f3cff9b7f5a060dc9656b' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/muss/templates/admin/add_user.tpl',
      1 => 1493657275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8992771505922973343b230-38436175',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592297335b9fc2_36998109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592297335b9fc2_36998109')) {function content_592297335b9fc2_36998109($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h2 align="center"> Create new User </h2>
<?php echo $_smarty_tpl->getSubTemplate ('admin/add_user_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
