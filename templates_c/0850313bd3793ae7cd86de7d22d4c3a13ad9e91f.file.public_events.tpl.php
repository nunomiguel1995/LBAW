<?php /* Smarty version Smarty-3.1.15, created on 2017-05-25 18:09:29
         compiled from "/opt/lbaw/lbaw1635/public_html/muss/templates/main/public_events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103815014059270fc98f2516-22052266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0850313bd3793ae7cd86de7d22d4c3a13ad9e91f' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/muss/templates/main/public_events.tpl',
      1 => 1493657275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103815014059270fc98f2516-22052266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59270fc9a9eff3_51235396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59270fc9a9eff3_51235396')) {function content_59270fc9a9eff3_51235396($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<style type="text/css">
      #pEvent{
        background: white;
        padding: 1%;
        border-style: solid;
        border-color: #dbdbdb;
        border-radius: 15px;
        margin-bottom: 2%;
      }
  </style>

  <div id="top-image">
    <figure class="ink-image bottom-space all-75 small-100 tiny-100 push-center">
      <img src="../../images/events/public_events.jpg" class="imagequery">
      <figcaption class="over-bottom">
        Events for all the community
      </figcaption>
    </figure>
  </div>

	<div id="title" align="middle" style="margin-top:1%">
		<h3> Public Events </h3>
	</div>
	
	<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
		<div id="pEvent" align= "left" class="all-75 small-100 tiny-100 push-center" >
			<a href="#" class="large" > <?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
 </a>
			<p class="small"> <i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['event']->value['calendar_date'];?>
 <?php echo $_smarty_tpl->tpl_vars['event']->value['calendar_time'];?>
 <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['event']->value['location'];?>
 </p>
			<hr>
			<p> <?php echo $_smarty_tpl->tpl_vars['event']->value['description'];?>
 </p>
		</div>
	<?php } ?>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
