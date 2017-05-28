{include file='common/header.tpl'}

		<style type="text/css">
			#advanced-search{
				background: #ccc;
			}

      #event-list {
          -webkit-border-radius: 12px;
          -moz-border-radius: 12px;
          border-radius: 12px;
      }
			.my-never-closing-datepicker {
					position: static;
					display: inline-block;
			}
    </style>

    <div class="ink-grid" style="margin-bottom:2%">
        <div class="ink-tabs top" data-prevent-url-change="true">
            <!-- If you're using 'bottom' positioning, put this div AFTER the content. -->
            <ul class="tabs-nav align-center" style="margin-bottom:0px">
                <li><a class="tabs-tab" href="#events">Events</a></li>
                <li><a class="tabs-tab" href="#calendar">Calendar</a></li>
                <li><a class="tabs-tab" href="#invitations">Invitations</a></li>
            </ul>

            {include file = 'user/MyEvents-EventsTab.tpl'}

            {include file = 'user/MyEvents-CalendarTab.tpl'}

            {include file = 'user/MyEvents-InvitationsTab.tpl'}
        </div>
    </div>

{include file = 'common/footer.tpl'}
