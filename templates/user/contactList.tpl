{include file='common/header.tpl'}
<script type="text/javascript" src="../../javascript/contactList.js"></script>


<div class="push-center xlarge-80 large-80 medium-80 tiny-100">

<form action="ContactList.php" class="ink-form" method="POST">
  <div class="control-group all-50 small-100 tiny-100 push-center">
    <div class="control append-button" role="search">
      <span><input type="text" name="search_user_clOut" id="search_user_clOut" placeholder="Search in Contact List"></span>
      <button class="ink-button"><i class="fa fa-search"></i> Search</button>
    </div>
  </div>
</form>

<div class="ink-shade fade push-center">
    <div id="myModal" class="ink-modal fade" data-trigger="#contactListTrigger" data-width="80%" data-height="80%" role="dialog" aria-hidden="true" aria-labelled-by="modal-title">
      <div class="modal-header">
            <button class="modal-close ink-dismiss"></button>
        </div>

        <div class="modal-body" id="modalContent">

        <form action="ContactList.php" class="ink-form" method="POST">
            <div class="control-group all-50 small-100 tiny-100 push-center">
              <div class="control append-button" role="search">
                <span><input type="text" name="search_user_clIn" id="search_user_clIn" placeholder="Search in Contact List"></span>
                <button class="ink-button"><i class="fa fa-search"></i> Search</button>
              </div>
            </div>
          </form>

          <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="5" data-pagination="#myTablePagination">
            <tbody>
                {foreach $users as $user}
                  {if $user.idUser != $userID}
                  <tr>
                    <td >
                      <div id="stacker-container" class="column-group push-center">
                        <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column" style="margin:2%">
                          <img src="../../images/users/{$user.path}" width="50px" height="50px">
                        </div>
                        <div class="xlarge-60 large-60 medium-60 tiny-100 stacker-column" style="margin-top:3%">
                          <a href="{$BASE_URL}pages/user/UserPage.php?id={$user.idUser}">{$user.name}</a>
                          <div class="xlarge-20 large-20 medium-20 tiny-100 push-right">
                              <span class="ink-tooltip" data-tip-text="Add Contact" data-tip-color="grey" style="padding:4%">
                                <i class="fa fa-plus-square-o" aria-hidden="true" onclick="addUser({$listID},{$user.idUser})"></i>
                              </span>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  {/if}
                {/foreach}
              </tbody>
            </table>
        </div>
    </div>
</div>
<div align="center" style="margin:3%">
  <a href="#" id="contactListTrigger" class="ink-button green">Add Contacts</a>
</div>


  {if ($contacts|@count) == 0}
    <div align="center">   <p> You have no contacts yet </p> </div>
  {/if}

  <div class="xlarge-60 large-60 medium-100 tiny-100 push-center">
    <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="5" data-pagination="#myTablePagination">
      <tbody>
          {foreach $contacts as $contact}
          <tr>
              <td>
                  <div class="xlarge-90 large-90 medium-100 tiny-100 push-center">
                      <div id="stacker-container" class="column-group">
                          <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column push-left">
                              <img src= "../../images/users/{$contact.path}" width="50px" height="50px">
                          </div>
                          <div class="xlarge-60 large-60 medium-50 tiny-100 stacker-column push-center">
                              <a href="{$BASE_URL}pages/user/UserPage.php?id={$contact.idUser}"> {$contact.name} </a>
                          </div>
                          <div class="xlarge-10 large-10 medium-20 tiny-100 stacker-column push-left" align="right">
                            <div class="ink-dropdown" data-target="#my-menu-dropdown-{$contact.idUser}" data-dismiss-after="5">
                                <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                                <ul id="my-menu-dropdown-{$contact.idUser}" class="dropdown-menu">
                                    <li ><a href="{$BASE_URL}pages/user/newMessage.php?id={$contact.idUser}">Send Message</a></li>
                                    <li ><a href="javascript:deleteContactListUser({$listID},{$contact.idUser});">Delete Contact</a></li>
                                </ul>
                            </div>
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

{include file = 'common/footer.tpl'}
