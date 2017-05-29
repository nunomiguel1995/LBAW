<div id="invitations" class="tabs-content" style="padding-top:15px;margin-top:0px;background:white">
  <div class="xlarge-50 large-50 medium-100 tiny-100 push-center">
    {if ($invites|@count) == 0}
      <div align="center">   <p> You have no new invitations </p> </div>
    {/if}
    <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="3" data-pagination="#myTablePagination">
      <tbody>
        {foreach $invites as $invite}
          <tr>
            <td >
              <div style="margin:3%">
                <div> <!-- Column element ('.stacker-column' is the default selector) -->
                    <p> You were invited to <a href="{$BASE_URL}pages/event/EventPage.php?id={$invite.idEvent}">{$invite.name}</a></p>
                </div>
                <div id="stacker-container" class="column-group">  <!-- Stacker element -->
                  <div class="xlarge-20 large-20 medium-50 tiny-100 stacker-column">
                    <button class="ink-button" onclick="goingToEvent('{$invite.idNotification}','{$invite.idEvent}','{$invite.idUser}')"> <i class="fa fa-check" aria-hidden="true"></i> Going</button>
                  </div>
                  <div class="xlarge-20 large-20 medium-40 tiny-100 stacker-column">
                      <button class="ink-button" onclick="notGoingToEvent('{$invite.idNotification}')"><i class="fa fa-times" aria-hidden="true"></i> Not Going</button>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        {/foreach}
        </tbody>
      </table>
    </div>
</div>

<script type="text/javascript" src="../../javascript/InviteNotifications.js"></script>
