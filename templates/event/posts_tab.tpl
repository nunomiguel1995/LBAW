<div id="posts" class="tabs-content">
	<div class="ink-grid">
		<div id="post_form" class="column-group" >
			<form class="ink-form all-90 push-center" enctype="multipart/form-data"  method="post" action="../../actions/events/submitPost.php">
				<textarea class="all-100" type="text" name="post_text" id="post_text" rows="" placeholder="Write something about the event..." style="margin-bottom:1%"></textarea>
				<input type="hidden" name="event_id" value="{$event_id}" />
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
				<input type="hidden" name="event_id" value="{$event_id}" />
				<button class="ink-button blue push-right" style="margin-top:15px;margin-right: 15px;" type="submit" value="Submit">Submit</button>
				<button class="ink-button blue push-right" type="button" onclick="showPost()" style="margin-top:15px;margin-right: 15px;">Back</button>
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
			  {if $post.poll != NULL}
				<div id="poll{$post.poll.0.idPoll}" class="all-100 push-center" style="background-color: #DDDDDD;margin-bottom:2%;padding-left:1%">
					<h6 style="color:#6998C9;margin-top:1%"> {$post.poll.0.name}</h6>
					{foreach $post.poll.options as $option}
					<form method="post" action="../../actions/events/submitVote.php">
						<div class=" column-group">
							<div class="tiny-65 small-65 all-50">
							{if $option.voted == "false"}
								<p style="margin-bottom:3%"><big>{$option.votes}</big>  {$option.name}</p>
							{else}
								<p style="margin-bottom:3%"><big>{$option.votes}</big>  <b>{$option.name}</b></p>
							{/if}
							</div>
							{if $option.voted == "false"}
								<button class="vote_button all-35" style="font-size: 14px;width: 4em;  height: 2em;" >vote</button>
							{/if}
						</div>
						<input type="hidden" name="option_id" value="{$option.idOption}" />
						<input type="hidden" name="poll_id" value="{$post.poll.0.idPoll}" />
						<input type="hidden" name="post_id" value="{$post.idPost}" />
						<input type="hidden" name="event_id" value="{$event_id}" />
					</form>
					{/foreach}
				</div>
			  {/if}
			  {if $post.is_image == "true"}
			  <figure class="ink-image bottom-space" style="margin-bottom:2%">
				  <img src="../../files/posts/{$post.doc_name}" class="imagequery">
			  </figure>
			  {elseif $post.is_image == "false"}
					<div class="file-div all-100" style="padding-left:1%">
						<div class="column-group all-100">
						<img class="all-20" src="../../images/assets/file_icon.png" style="height:30px;width:30px">
							<h6 class="all-80" style="padding-top:1%;padding-left:1%"><a href="../../files/posts/{$post.doc_name}" download="{$post.actual_doc_name}">{$post.actual_doc_name}</a></h6>
						</div>
					</div>
			  {/if}
			  <div class="ink-grid all-100" style="padding-left:1%" style="display: inline">
				<div class="column-group horizontal-gutters">
					<div class="all-50 tiny-100" style="text-align:left">
						<a style="text-decoration: none" onClick="addCommentClick({$post.idPost})" >Add a Comment</a>
					</div>
					{if $post.idCreator == $current_user}
					<div class="all-50 tiny-100" style="text-align:right">
						<a style="text-decoration: none" href="../../actions/events/deletePost.php?idPost={$post.idPost}&idEvent={$event_id}" >Delete Post</a>
					</div>
					{/if}
				</div>
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
				<div class="post column-group all-90 push-center" style="background-color: #EDEDED; padding-left: 7%">
				  <hr class="all-100 push-center" style="margin-right: 2%" >
				  <div class="column-group all-100">
					<img class="all-20" src="{$comment.photo}" style="height:30px;width:30px">

					<h6 class="all-80" style="padding-left:1%;padding-top:1%; margin-bottom: 0%"><a href="../user/UserPage.php?id={$comment.idCreator}"><small>{$comment.name}</small></a></h6>
				  </div>
				  <div class="all-100" style="padding-left:0%; padding-right: 2%">
					<p align="justify" style="margin-bottom: 5px">{$comment.comment_text}</p>
					{if $comment.idCreator == $current_user}
					<a style="text-decoration: none" href="../../actions/events/deleteComment.php?idComment={$comment.idComment}&idEvent={$event_id}">Delete Comment</a>
					{/if}
					
				  </div>
				</div>
			{/foreach}
		{/foreach}
	</div>
</div>