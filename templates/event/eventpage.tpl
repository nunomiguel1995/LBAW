
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
		
		{$config['time'] = '%H:%M'}
		
		{if $is_public == "false" && $user_is_invited == "false" && $username != "admin"}
		<div align="center">
			<h2> <i class="fa fa-ban" aria-hidden="true"></i> You have no Permissions </h2>
		</div>
		{else}
        <div style="padding:5%px" class="ink-grid all-70 medium-100 small-100 tiny-100">
            <div class="column-group">
                <div>
					<div class="ink-grid all-100" style="padding:0px">
						<div class="column-group">
							{if $event.idCreator == $current_user || $username == "admin"}
							<div style="padding-right:5px;padding-top:5px">
								<div class="xlarge-10 large-10 medium-10 tiny-10 stacker-column push-left" align="right">
									<div class="ink-dropdown" data-target="#my-menu-dropdown-{$contact.idUser}" data-dismiss-after="5">
										<span><i class="fa fa-bars" aria-hidden="true"></i></span>
										<ul id="my-menu-dropdown-{$contact.idUser}" class="dropdown-menu">
											<li ><a href="../../pages/event/EditEvent.php?id={$event.idEvent}">Edit Event</a></li>
											<li ><a onclick="AlertIt('../../actions/events/deleteEvent.php?idEvent={$event.idEvent}')">Delete Event</a></li>
										</ul>
									</div>
								</div>
							</div>
							{/if}
							<div class="all-80">
								<h2>{$event.name}</h2>
							</div>
						</div>
					</div>
                    
                    <figure class="ink-image bottom-space">
                        <img src="{$event_photo_path}" class="imagequery">
                    </figure>

                    <div id="tabs" class="ink-tabs top" data-prevent-url-change="true" >
                        <ul class="tabs-nav" style="margin-bottom:0px">
							{if $is_public == "true" && $current_user == null }
								<li><a id="info_button" class="tabs-tab" href="#info">Information</a></li>
							{/if}
							
							{if $is_public == "true" && $current_user != null}
								<li><a id="info_button" class="tabs-tab" href="#info">Information</a></li>
								<li><a id="posts_button" class="tabs-tab" href="#posts">Posts</a></li>
								<li><a id="invited_button" class="tabs-tab" href="#invited">Invited</a></li>
							{/if}
							
							{if $is_public == "false" && $user_is_invited == "true"}
								<li><a id="info_button" class="tabs-tab" href="#info">Information</a></li>
								<li><a id="posts_button" class="tabs-tab" href="#posts">Posts</a></li>
								<li><a id="invited_button" class="tabs-tab" href="#invited">Invited</a></li>
							{/if}
							
							{if $is_owner == "true"}
								<li><a id="non_invited_button" class="tabs-tab" href="#invite">Invite</a></li>
							{/if}
							
							{if $username == "admin"}
								<li><a id="info_button" class="tabs-tab" href="#info">Information</a></li>
							{/if}
							<!--
							<li><a id="info_button" class="tabs-tab" href="#info">Information</a></li>
                            <li><a id="posts_button" class="tabs-tab" href="#posts">Posts</a></li>
                            <li><a id="invited_button" class="tabs-tab" href="#invited">Invited</a></li>
                            <li><a id="non_invited_button" class="tabs-tab" href="#invite">Invite</a></li>
							-->
                        </ul>
                        <div id="tabContent">
							{if $is_public == "true" && $current_user == null}
								{include file='../event/info_tab.tpl'}
							{/if}
							
							{if $is_public == "true" && $current_user != null}
								{include file='../event/info_tab.tpl'}
								{include file='../event/posts_tab.tpl'}
								{include file='../event/invited_tab.tpl'}
							{/if}
							
							{if $is_public == "false" && $user_is_invited  == "true"}
								{include file='../event/info_tab.tpl'}
								{include file='../event/posts_tab.tpl'}
								{include file='../event/invited_tab.tpl'}
							{/if}
							
							{if $is_owner == "true"}
								{include file='../event/invite_tab.tpl'}
							{/if}
							
							{if $username == "admin"}
								{include file='../event/info_tab.tpl'}
							{/if}
							
							
							<!--
                            {include file='../event/info_tab.tpl'}
                            {include file='../event/posts_tab.tpl'}
                            {include file='../event/invited_tab.tpl'}
                            {include file='../event/invite_tab.tpl'}
							-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
		{/if}
		<script src="../../javascript/event.js"></script>