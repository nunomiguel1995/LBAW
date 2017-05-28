<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 18:17:46
         compiled from "/opt/lbaw/lbaw1635/public_html/muss/templates/event/eventpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16720984165929b4ba258164-12523182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a263978cb338483e3ff424debcea2e5bf737bf53' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/muss/templates/event/eventpage.tpl',
      1 => 1495446500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16720984165929b4ba258164-12523182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'event' => 0,
    'organizer' => 0,
    'location' => 0,
    'config' => 0,
    'event_id' => 0,
    'posts' => 0,
    'post' => 0,
    'option' => 0,
    'comment' => 0,
    'invited' => 0,
    'inv' => 0,
    'BASE_URL' => 0,
    'non_invited' => 0,
    'non_inv' => 0,
    'listID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5929b4ba5de5e2_52972621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5929b4ba5de5e2_52972621')) {function content_5929b4ba5de5e2_52972621($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lbaw/lbaw1635/public_html/muss/lib/smarty/plugins/modifier.date_format.php';
?>
        <style type="text/css">
           #tabContent{
             background: white;
             padding: 3%;
             border-bottom-left-radius: 15px;
             border-bottom-right-radius: 15px;
             margin-bottom: 4%;
           }

        </style>
		<style>
		.vote_button {
			background-color: #6998C9;
			border: none;
			color: white;
			padding: 0px 0px 0px 0px;
			text-align: center;
			text-decoration: none;
			font-size: 14px;
			margin: 0px 0px 0px 0px;
			cursor: pointer;
		}
		</style>
		
		<?php $_smarty_tpl->createLocalArrayVariable('config', null, 0);
$_smarty_tpl->tpl_vars['config']->value['time'] = '%H:%M';?>
        <div style="padding:5%px" class="ink-grid all-70 medium-100 small-100 tiny-100">
            <div class="column-group">
                <div>
                    <h2><?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
</h2>
                    <figure class="ink-image bottom-space">
                        <img src="../../images/events/event%20page.png" class="imagequery">
                    </figure>

                    <div id="tabs" class="ink-tabs top" data-prevent-url-change="true" >
                        <ul class="tabs-nav" style="margin-bottom:0px">
                            <li><a id="info_button" class="tabs-tab" href="#info">Information</a></li>
                            <li><a id="posts_button" class="tabs-tab" href="#posts">Posts</a></li>
                            <li><a id="invited_button" class="tabs-tab" href="#invited">Invited</a></li>
                            <li><a id="non_invited_button" class="tabs-tab" href="#invite">Invite</a></li>
                        </ul>
                        <div id="tabContent">
                            <div id="info" class="tabs-content">
                                <div class="ink-grid">
                                    <div class="column-group horizontal-gutters">
                                        <div class="all-50 small-100 tiny-100">
                                            <h3>Organizer</h3>
                                            <a href="../user/UserPage.php?id=<?php echo $_smarty_tpl->tpl_vars['organizer']->value['idUser'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['organizer']->value['name'];?>
</p></a>
                                            <h3>Type of Event</h3>
                                            <p><?php echo $_smarty_tpl->tpl_vars['event']->value['event_type'];?>
</p>
                                        </div>
                                        <div class="all-50 small-100 tiny-100">
                                            <h3>Description</h3>
                                            <p align="justify"><?php echo $_smarty_tpl->tpl_vars['event']->value['description'];?>
</p>
                                            <h3>Location</h3>
                                            <p> <?php echo $_smarty_tpl->tpl_vars['location']->value['address'];?>
 , <?php echo $_smarty_tpl->tpl_vars['event']->value['location'];?>
</p>
                                            <h3>Data and Time</h3>
                                            <p><?php echo $_smarty_tpl->tpl_vars['event']->value['calendar_date'];?>
 at <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['calendar_time'],$_smarty_tpl->tpl_vars['config']->value['time']);?>
</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="posts" class="tabs-content">
                                <div class="ink-grid">
                                    <div id="post_form" class="column-group" >
                                        <form class="ink-form all-90 push-center" enctype="multipart/form-data"  method="post" action="../../actions/events/submitPost.php">
                                            <textarea class="all-100" type="text" name="post_text" id="post_text" rows="" placeholder="Write something about the event..." style="margin-bottom:1%"></textarea>
											<input type="hidden" name="event_id" value="<?php echo $_smarty_tpl->tpl_vars['event_id']->value;?>
" />
                                            <button class="ink-button blue push-right" type="submit" value="Submit">Submit</button>
                                            <button id="get_file" type="button" class="ink-button push-right" onclick="chooseFile()">Add File</button>
											<input type="file" id="input_file" name="input_file" style="display: none">
                                            <button type="button" class="ink-button push-right" onclick="showPollForm()">Create Poll</button>
                                        </form>
                                    </div>
									<div id="poll_creator" class="column-group" style="display:none">
                                        <form id="poll_form" class="ink-form all-90 push-center" method="post" action="../../actions/events/submitPoll.php" style="background-color: #EDEDED; margin-top: 3%;padding-bottom: 38px">
											<h4 style="padding-left:5%;padding-top:4%">Poll Creator</h4>
											<div align="left" style="padding-left:5%;margin-bottom:2%">
												<input style="width:90%; max-width:650px;" id="poll_name" name="poll_name" type="text"  data-rules="required|text[true,false]" placeholder="Poll Name">
											</div>
											<div align="left" style="padding-left:5%">
												<textarea style="width:90%; max-width:650px" type="text" name="post_text" id="post_text" rows="" placeholder="Write something about the Poll..." style="margin-bottom:1%"></textarea>
												<hr class="all-90 push-left">
											</div>
											<div class="all-100 poll_option" align="left" style="padding-left:5%;margin-bottom:2%">
												<input style="width:90%; max-width:650px" id="option1" name="option1" type="text"  data-rules="required|text[true,false]" placeholder="Option #1">
												<img src="../../images/assets/x_button.png" onclick="removePollOption(1)" style="height:20px;width:20px;margin-top:10px">
											</div>
											<a id="add_poll" style="text-decoration: none;padding-left: 5%" onClick="addPollOption()">Add Another Option</a>
											<input type="hidden" id="number_options" name="number_options" value="1" />
											<input type="hidden" name="event_id" value="<?php echo $_smarty_tpl->tpl_vars['event_id']->value;?>
" />
											<button class="ink-button blue push-right" style="margin-top:15px;margin-right: 15px;" type="submit" value="Submit">Submit</button>
											<button class="ink-button blue push-right" type="button" onclick="showPost()" style="margin-top:15px;margin-right: 15px;">Back</button>
                                        </form>
                                    </div>
									
									<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = array_reverse($_smarty_tpl->tpl_vars['posts']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
										
										<hr class="all-90 push-center">
										<div id="post<?php echo $_smarty_tpl->tpl_vars['post']->value['idPost'];?>
" class="post column-group all-90 push-center" style="background-color: #EDEDED">
										  <div class="column-group all-100">
											<img class="all-20" src="<?php echo $_smarty_tpl->tpl_vars['post']->value['photo'];?>
" style="height:50px;width:50px">

											<h6 class="all-80" style="padding-left:1%;padding-top:1%"><a href="../user/UserPage.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['idCreator'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
</a><br><small><?php echo $_smarty_tpl->tpl_vars['post']->value['calendar_date'];?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['calendar_time'],$_smarty_tpl->tpl_vars['config']->value['time']);?>
</small></h6>
										  </div>
										  <div class="all-100" style="padding-left:1%; padding-right: 2%">
											<p align="justify" style="margin-bottom: 5px"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_text'];?>
</p>
										  </div>
										  <?php if ($_smarty_tpl->tpl_vars['post']->value['poll']!=null) {?>
											<div id="poll<?php echo $_smarty_tpl->tpl_vars['post']->value['poll'][0]['idPoll'];?>
" class="all-100 push-center" style="background-color: #DDDDDD;margin-bottom:2%;padding-left:1%">
												<h6 style="color:#6998C9;margin-top:1%"> <?php echo $_smarty_tpl->tpl_vars['post']->value['poll'][0]['name'];?>
</h6>
												<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value['poll']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
												<form method="post" action="../../actions/events/submitVote.php">
													<div class=" column-group">
														<div class="tiny-65 small-65 all-50">
														<?php if ($_smarty_tpl->tpl_vars['option']->value['voted']=="false") {?>
															<p style="margin-bottom:3%"><big><?php echo $_smarty_tpl->tpl_vars['option']->value['votes'];?>
</big>  <?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</p>
														<?php } else { ?>
															<p style="margin-bottom:3%"><big><?php echo $_smarty_tpl->tpl_vars['option']->value['votes'];?>
</big>  <b><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</b></p>
														<?php }?>
														</div>
														<?php if ($_smarty_tpl->tpl_vars['option']->value['voted']=="false") {?>
															<button class="vote_button all-35" style="font-size: 14px;width: 4em;  height: 2em;" >vote</button>
														<?php }?>
													</div>
													<input type="hidden" name="option_id" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['idOption'];?>
" />
													<input type="hidden" name="poll_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['poll'][0]['idPoll'];?>
" />
													<input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['idPost'];?>
" />
													<input type="hidden" name="event_id" value="<?php echo $_smarty_tpl->tpl_vars['event_id']->value;?>
" />
												</form>
												<?php } ?>
											</div>
										  <?php }?>
										  <?php if ($_smarty_tpl->tpl_vars['post']->value['is_image']=="true") {?>
										  <figure class="ink-image bottom-space" style="margin-bottom:2%">
											  <img src="../../files/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['doc_name'];?>
" class="imagequery">
										  </figure>
										  <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['is_image']=="false") {?>
												<div class="file-div all-100" style="padding-left:1%">
													<div class="column-group all-100">
													<img class="all-20" src="../../images/assets/file_icon.png" style="height:30px;width:30px">
														<h6 class="all-80" style="padding-top:1%;padding-left:1%"><a href="../../files/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['doc_name'];?>
" download="<?php echo $_smarty_tpl->tpl_vars['post']->value['actual_doc_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['actual_doc_name'];?>
</a></h6>
													</div>
												</div>
										  <?php }?>
										  <div class="all-100" align="left" style="padding-left:1%" style="display: inline">
											<a style="text-decoration: none" onClick="addCommentClick(<?php echo $_smarty_tpl->tpl_vars['post']->value['idPost'];?>
)">Add a Comment</a>
										  </div>
										  <div class="all-100" style="display: none; ">
											<form method="post" action="../../actions/events/submitComment.php">
												<div class="ink-grid" style="padding-left: 1%">
													<div class="column-group" >
														<div class="all-80 small-100 tiny-100" >
															<textarea class="all-100" type="text" name="comment_text" rows="" placeholder="Write something..." style="margin-bottom:1%; resize: vertical" ></textarea>
															<input type="hidden" name="post_id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['idPost'];?>
" />
															<input type="hidden" name="event_id" value="<?php echo $_smarty_tpl->tpl_vars['event_id']->value;?>
" />
														</div>
														<div class="all-20 small-100 tiny-100">
															<button type="submit" value="Submit" class="ink-button blue push-right" >Submit</button>
														</div>
													</div>
												</div>
											</form>
										  </div>
										  <div class="all-100" align="left" style="padding-left:1%; display: none">
											<a style="text-decoration: none" onClick="closeCommentClick(<?php echo $_smarty_tpl->tpl_vars['post']->value['idPost'];?>
)"><small>Close</small></a>
										  </div>
										</div>
										<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = array_reverse($_smarty_tpl->tpl_vars['post']->value['comments']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
											<div class="post column-group all-90 push-center" style="background-color: #EDEDED; padding-left: 7%">
											  <hr class="all-100 push-center" style="margin-right: 2%" >
											  <div class="column-group all-100">
												<img class="all-20" src="<?php echo $_smarty_tpl->tpl_vars['comment']->value['photo'];?>
" style="height:30px;width:30px">

												<h6 class="all-80" style="padding-left:1%;padding-top:1%; margin-bottom: 0%"><a href="../user/UserPage.php?id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['idCreator'];?>
"><small><?php echo $_smarty_tpl->tpl_vars['comment']->value['name'];?>
</small></a></h6>
											  </div>
											  <div class="all-100" style="padding-left:0%; padding-right: 2%">
												<p align="justify" style="margin-bottom: 5px"><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_text'];?>
</p>
											  </div>
											</div>
										<?php } ?>
									<?php } ?>
                                </div>
                            </div>
                            <div id="invited" class="tabs-content">
                                <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="" data-pagination="#myTablePagination">
								<tbody>
									<?php  $_smarty_tpl->tpl_vars['inv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['invited']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inv']->key => $_smarty_tpl->tpl_vars['inv']->value) {
$_smarty_tpl->tpl_vars['inv']->_loop = true;
?>
									  <tr>
										<td >
											<div class="ink-grid">
												<div class="column-group horizontal-gutters">
													<div class="stacker-column" style="margin:2%">
														<img src="<?php echo $_smarty_tpl->tpl_vars['inv']->value['photo'];?>
" width="50px" height="50px">
													</div>
													<div class="xlarge-50 large-50 medium-50 small-50 tiny-50 stacker-column push-left" style="margin-top:3%">
													  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/UserPage.php?id=<?php echo $_smarty_tpl->tpl_vars['inv']->value['idUser'];?>
"><?php echo $_smarty_tpl->tpl_vars['inv']->value['name'];?>
</a>
													</div>
													<div class="push-right">
														<span class="ink-tooltip" data-tip-text="Uninvite" data-tip-color="grey" style="padding:4%">
															<img src="../../images/assets/x_button.png" onclick="" style="height:20px;width:20px;margin-top:10px">
														</span>
													</div>
												</div>
											</div>
										</td>
									  </tr>
									<?php } ?>
								  </tbody>
								</table>
                            </div>
							<div id="invite" class="tabs-content">
                                <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="5" data-pagination="#myTablePagination">
								<tbody>
									<?php  $_smarty_tpl->tpl_vars['non_inv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['non_inv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['non_invited']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['non_inv']->key => $_smarty_tpl->tpl_vars['non_inv']->value) {
$_smarty_tpl->tpl_vars['non_inv']->_loop = true;
?>
									  <tr>
										<td >
											<div class="ink-grid">
												<div class="column-group horizontal-gutters">
													<div class="stacker-column" style="margin:2%">
														<img src="<?php echo $_smarty_tpl->tpl_vars['non_inv']->value['photo'];?>
" width="50px" height="50px">
													</div>
													<div class="xlarge-50 large-50 medium-50 small-50 tiny-50 stacker-column push-left" style="margin-top:3%">
													  <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/UserPage.php?id=<?php echo $_smarty_tpl->tpl_vars['non_inv']->value['idUser'];?>
"><?php echo $_smarty_tpl->tpl_vars['non_inv']->value['name'];?>
</a>
													</div>
													<div class="push-right">
														<span class="ink-tooltip" data-tip-text="Invite" data-tip-color="grey" style="padding:4%">
															<i class="fa fa-plus-square-o" aria-hidden="true" onclick="addUser(<?php echo $_smarty_tpl->tpl_vars['listID']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['non_inv']->value['idUser'];?>
)"></i>
														</span>
													</div>
												</div>
											</div>
										</td>
									  </tr>
									<?php } ?>
								  </tbody>
								</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<script src="../../javascript/event.js"></script><?php }} ?>
