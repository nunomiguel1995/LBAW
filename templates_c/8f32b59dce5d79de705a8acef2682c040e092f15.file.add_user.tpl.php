<?php /* Smarty version Smarty-3.1.15, created on 2017-05-15 16:17:10
         compiled from "/opt/lbaw/lbaw1635/public_html/LBAW/templates/admin/add_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7122783225919c676cf6049-62306670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f32b59dce5d79de705a8acef2682c040e092f15' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/LBAW/templates/admin/add_user.tpl',
      1 => 1493388799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7122783225919c676cf6049-62306670',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5919c676e60858_23839565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5919c676e60858_23839565')) {function content_5919c676e60858_23839565($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<h2 align="center"> Create new User </h2>
<?php echo $_smarty_tpl->getSubTemplate ('admin/add_user_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
