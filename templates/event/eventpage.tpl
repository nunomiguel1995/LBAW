
        <style type="text/css">
           #tabContent{
             background: white;
             padding: 3%;
             border-bottom-left-radius: 15px;
             border-bottom-right-radius: 15px;
             margin-bottom: 4%;
           }

        </style>
		{$config['time'] = '%H:%M'}
        <div style="padding:5%px" class="ink-grid all-70 medium-100 small-100 tiny-100">
            <div class="column-group">
                <div>
                    <h2>{$event.name}</h2>
                    <figure class="ink-image bottom-space">
                        <img src="../../images/events/event%20page.png" class="imagequery">
                    </figure>

                    <div id="tabs" class="ink-tabs top" data-prevent-url-change="true" >
                        <ul class="tabs-nav" style="margin-bottom:0px">
                            <li><a id="info_button" class="tabs-tab" href="#info">Information</a></li>
                            <li><a id="posts_button" class="tabs-tab" href="#posts">Posts</a></li>
                            <li><a id="invited_button" class="tabs-tab" href="#invited">Invited</a></li>
                        </ul>
                        <div id="tabContent">
                            <div id="info" class="tabs-content">
                                <div class="ink-grid">
                                    <div class="column-group horizontal-gutters">
                                        <div class="all-50 small-100 tiny-100">
                                            <h3>Organizer</h3>
                                            <a href="../user/UserPage.php?id={$organizer.idUser}"><p>{$organizer.name}</p></a>
                                            <h3>Type of Event</h3>
                                            <p>{$event.event_type}</p>
                                        </div>
                                        <div class="all-50 small-100 tiny-100">
                                            <h3>Description</h3>
                                            <p align="justify">{$event.description}</p>
                                            <h3>Location</h3>
                                            <p> {$location.address} , {$event.location}</p>
                                            <h3>Data and Time</h3>
                                            <p>{$event.calendar_date} at {$event.calendar_time|date_format:$config.time}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="posts" class="tabs-content">
                                <div class="ink-grid">
                                    <div class="column-group">
                                        <form class="ink-form all-90 push-center" method="post" action="../../actions/events/submitPost.php">
                                            <textarea class="all-100" type="text" name="post_text" id="post_text" rows="" placeholder="Write something about the event..." style="margin-bottom:1%"></textarea>
											<input type="hidden" name="event_id" value="{$event_id}" />
                                            <button class="ink-button blue push-right" type="submit" value="Submit">Submit</button>
                                            <button class="ink-button push-right" >Add File</button>
                                            <button class="ink-button push-right" >Create Poll</button>
                                        </form>
                                    </div>
									
									{foreach $posts|@array_reverse as $post}
										<hr class="all-90 push-center">
										<div id="post{$post.idPost}" class="post column-group all-90 push-center" style="background-color: #EDEDED">
										  <div class="column-group all-100">
											<img class="all-20" src="{$post.photo}" style="height:50px;width:50px">

											<h6 class="all-80" style="padding-left:1%;padding-top:1%"><a href="../user/UserPage.php?id={$post.idCreator}">{$post.name}</a><br><small>{$post.calendar_date} {$post.calendar_time|date_format:$config.time}</small></h6>
										  </div>
										  <div class="all-100" style="padding-left:1%; padding-right: 2%">
											<p align="justify" style="margin-bottom: 5px">{$post.post_text}</p>
										  </div>
										  <div class="all-100" align="left" style="padding-left:1%" style="display: inline">
											<a style="text-decoration: none" onClick="addCommentClick({$post.idPost})">Add a Comment</a>
										  </div>
										  <div class="all-100" style="display: none; ">
											<form method="post" action="../../actions/events/submitComment.php">
												<div class="ink-grid" style="padding-left: 1%">
													<div class="column-group" >
														<div class="all-80 small-100 tiny-100" >
															<textarea class="all-100" type="text" name="comment_text" rows="" placeholder="Write something..." style="margin-bottom:1%; resize: vertical" ></textarea>
															<input type="hidden" name="post_id" value="{$post.idPost}" />
															<input type="hidden" name="event_id" value="{$event_id}" />
														</div>
														<div class="all-20 small-100 tiny-100">
															<button type="submit" value="Submit" class="ink-button blue push-right" >Submit</button>
														</div>
													</div>
												</div>
											</form>
										  </div>
										  <div class="all-100" align="left" style="padding-left:1%; display: none">
											<a style="text-decoration: none" onClick="closeCommentClick({$post.idPost})"><small>Close</small></a>
										  </div>
										</div>
										{foreach $post.comments|@array_reverse as $comment}
											<div id="post{$post.idPost}" class="post column-group all-90 push-center" style="background-color: #EDEDED; padding-left: 7%">
											  <hr class="all-100 push-center" style="margin-right: 2%" >
											  <div class="column-group all-100">
												<img class="all-20" src="{$comment.photo}" style="height:30px;width:30px">

												<h6 class="all-80" style="padding-left:1%;padding-top:1%; margin-bottom: 0%"><a href="../user/UserPage.php?id={$comment.idCreator}"><small>{$comment.name}</small></a></h6>
											  </div>
											  <div class="all-100" style="padding-left:0%; padding-right: 2%">
												<p align="justify" style="margin-bottom: 5px">{$comment.comment_text}</p>
											  </div>
											</div>
										{/foreach}
									{/foreach}
                                </div>
                            </div>
                            <div id="invited" class="tabs-content">
                                <div class="ink-grid" >
                                    <div class="column-group horizontal-gutters">
                                            {if empty($invited)}
                                                <div class="column-group all-50 small-100 tiny-100">
                                                  <p> There are no invited users </p>
                                                </div>
                                            {else}
                                                {foreach $invited as $inv}
                                                    <div class="column-group all-50 small-100 tiny-100">
                                                      <img class="all-20" src="{$inv.photo}" style="height:50px;width:50px">
                                                      <h6 class="all-65" style="padding-left:2%;padding-top:5%"><a href="../user/UserPage.php?id={$inv.idUser}">{$inv.name}</a></h6>
                                                    </div>
                                                {/foreach}
                                            {/if}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<script src="../../javascript/event.js"></script>
