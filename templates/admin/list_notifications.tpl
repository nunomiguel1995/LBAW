  <div id="notifications" class="tabs-content" style="margin-top:0%">
        {foreach $notifications as $notification}
        <div class="notifications xlarge-70 large-70 medium-100 tiny-100 push-center">
          <div id="stacker-container" class="column-group">
            <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column">
              <img src="../../images/users/user.png" width="50px" height="50px">
            </div>
            <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
              <p> <a href="#"> {$notification.username} </a>
                  {if $notification.photo} added a new profile picture
                  {else if $notification.email} changed email
                  {else if $notification.name} changed the name in profile
                  {/if}
                </p>
              <div class="xlarge-20 large-20 medium-20 tiny-100 push-middle" align="right">
                <span class="ink-tooltip" data-tip-text="Accept" data-tip-color="grey" style="padding:4%">
                  <i class="fa fa-check" aria-hidden="true" onclick="onClickAcceptEvent('{$notification.idNotification}')"></i>
                </span>
                <span class="ink-tooltip" data-tip-text="Review profile" data-tip-color="grey" style="padding:4%">
                  <i class="fa fa-pencil" aria-hidden="true" ></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        {/foreach}
    </div>
  </div>
</div>