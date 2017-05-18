<style type="text/css">
.message_text{
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
</style>
<div id="inbox" class="tabs-content" style="margin-top:0%" >
  {if ($inbox|@count) == 0}
    <div align="center" style="margin:5%">   <p> You have no messages </p> </div>
  {else}
  <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="5" data-pagination="#myTablePagination">
    <tbody>
        {foreach $inbox as $imessage}
          <tr>
            <td >
              <div id="stacker-container" class="column-group push-center" onclick="location.href='{$BASE_URL}pages/user/MessagePage.php?id={$imessage.idMessage}&user={$imessage.idSender}'" style="cursor:pointer" >
                <div class="xlarge-15 large-15 medium-15 tiny-100 stacker-column" style="margin-top:3%">
                  <a href="{$BASE_URL}pages/user/UserPage.php?id={$imessage.idSender}">{$imessage.name}</a>
                </div>
                <div class="xlarge-60 large-60 medium-60 tiny-100 stacker-column" style="margin-top:3%">
                  <div id="stacker-container" class="column-group push-center">
                    <div class="xlarge-30 large-30 medium-30 tiny-100 stacker-column">
                        <p class="message_text slab-300"><medium><strong>{$imessage.subject}</strong></medium></p>
                    </div>
                    <div class="xlarge-60 large-60 medium-60 tiny-100 stacker-column" style="margin-left:1%" >
                        <p class="message_text"> <small> {$imessage.message_text} </small> </p>
                    </div>
                  </div>
                </div>
                <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column" style="margin-top:3%" >
                  <p><small> {$imessage.calendar_date} </small></p>
                </div>
              </div>
            </td>
          </tr>
        {/foreach}
      </tbody>
    </table>
    {/if}
</div>
