<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 16:01:35
         compiled from "/opt/lbaw/lbaw1635/public_html/muss/templates/user/newMessage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13620485175928434f52aaf6-66986765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da8a814855cf8ec750fa409071d554b80f850ba4' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/muss/templates/user/newMessage.tpl',
      1 => 1495437846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13620485175928434f52aaf6-66986765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5928434f6bf012_91115670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5928434f6bf012_91115670')) {function content_5928434f6bf012_91115670($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<style type="text/css">
    #message{
        background: white;
        border-radius: 10px;
        border-color: #dedede #bababa #aaa #bababa;
        border-style: solid;
        border-width: 1px;
        margin-bottom: 10%;
    }

</style>

  <div id="message" class= "all-70 push-center" align="center">
    <div style="margin:3%">
        <h4> New Message </h4>
      <form class="ink-form ink-formvalidator push-center" method="post" action="../../actions/user/sendMessage.php" enctype="multipart/form-data">
          <div class="all-80" align="left">
            <p> <strong> To </strong>  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/UserPage.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['idUser'];?>
"> <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 </p> </a> </p>
          </div>
          <div class="all-80"  style="margin-left:1%" align="left">
           <label for="subject"> <strong> Subject <strong> </label>
           <input class ="all-80" type="text" name="subject" id="subject" data-rules="required|text[true,false]" placeholder="Subject" style:"margin-left: 5%">
          </div>
          <div class="all-80" style="margin-top:3%">
            <textarea class="all-100" type="text" name="message" id="message" rows="" placeholder="Write a message" style="margin-bottom:1%"></textarea>
            <input type="hidden" name="idReceiver" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['idUser'];?>
" />
          </div>
          <div style="margin: 3%">
            <input type="submit" name="sub" value="Send" class="ink-button success blue" />
          </div>
      </form>
    </div>
  </div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
