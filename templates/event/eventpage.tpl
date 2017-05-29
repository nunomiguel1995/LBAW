
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
		
		{if $is_public == "false" && $user_is_invited == "false"}
		<h1>NO PERMISSION TO ACCESS THIS PAGE!</h1>
		{else}
        <div style="padding:5%px" class="ink-grid all-70 medium-100 small-100 tiny-100">
            <div class="column-group">
                <div>
                    <h2>{$event.name}</h2>
                    <figure class="ink-image bottom-space">
                        <img src="../../images/events/event%20page.png" class="imagequery">
                    </figure>

                    <div id="tabs" class="ink-tabs top" data-prevent-url-change="true" >
                        <ul class="tabs-nav" style="margin-bottom:0px">
							{if $is_public == "true" && $current_user == null}
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