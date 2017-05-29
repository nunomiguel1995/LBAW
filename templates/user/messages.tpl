{include file='common/header.tpl'}

<style type="text/css">
    .tabs-content{
        background: white;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="../../javascript/messages.js"></script>
<div class="ink-shade fade push-center">
    <div id="myModal" class="ink-modal fade" data-trigger="#newMessageTrigger" data-width="80%" data-height="80%" role="dialog" aria-hidden="true" aria-labelled-by="modal-title">
      <div class="modal-header">
            <button class="modal-close ink-dismiss"></button>
        </div>

        <div class="modal-body" id="modalContent">
            <form id="findingMessages" action="Messages.php" class="ink-form" method="POST">
            <div class="control-group all-50 small-100 tiny-100 push-center">
              <div class="control append-button" role="search">
                <span><input name="search_user_messages" type="text" id="searchuser" placeholder="Search in Contact List"></span>
                <button class="ink-button"><i class="fa fa-search"></i> Search</button>
              </div>
            </div>
          </form>
          {if ($contacts|@count) == 0}
            <div align="center"><p> You have no contacts yet </p> </div>
          {else}
          <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="5" data-pagination="#myTablePagination" id="creatingMessages">
            <tbody>
                {foreach $contacts as $contact}
                  <tr>
                    <td >
                      <div id="stacker-container" class="column-group push-center">
                        <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column" style="margin:2%">
                          <img src="{$contact.path}" width="50px" height="50px">
                        </div>
                        <div class="xlarge-60 large-60 medium-60 tiny-100 stacker-column" style="margin-top:3%">
                          <a href="{$BASE_URL}pages/user/UserPage.php?id={$contact.idUser}">{$contact.name}</a>
                          <div class="xlarge-20 large-20 medium-20 tiny-100 push-right">
                            <a  href="{$BASE_URL}pages/user/newMessage.php?id={$contact.idUser}" style="color: inherit">
                              <span class="ink-tooltip" data-tip-text="Send Message" data-tip-color="grey" style="padding:4%">
                                <i class="fa fa-envelope" aria-hidden="true" href="{$BASE_URL}pages/user/newMessage.php?id={$contact.idUser}"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                {/foreach}
              </tbody>
            </table>
            {/if}
        </div>
    </div>
</div>
<div align="center" style="margin:3%">
  <a href="#" id="newMessageTrigger" class="ink-button green">New Message</a>
</div>

<div id="messagepage" style="margin-bottom:5%">
  <div class="all-65 small-100 tiny-100 push-center">
    <div class="ink-tabs top" data-prevent-url-change="true">
      <ul class="tabs-nav" style="margin-bottom:0%">
          <li><a class="tabs-tab" href="#inbox">Inbox</a></li>
          <li><a class="tabs-tab" href="#sentMessages">Sent Messages</a></li>
      </ul>
      <div id="tabContent">
        {include file='user/inbox.tpl'}
        {include file='user/sentMessages.tpl'}
      </div>
    </div>
  </div>
</div>
{include file = 'common/footer.tpl'}
