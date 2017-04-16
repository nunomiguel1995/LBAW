<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'templates/common/header.tpl');
?>

<style type="text/css">
      #tabContent{
        background: white;
        padding: 3%;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        margin-bottom: 4%;
      }
      #usersearchform{
        margin-bottom: 3%;
      }
      .user{
        background: #ededed;
        padding: 1%;
        border-style: solid;
        border-color: #dbdbdb;
        border-radius: 15px;
        margin-bottom: 2%;
      }
      .notifications{
        background: #ededed;
        padding: 1%;
        border-style: solid;
        border-color: #dbdbdb;
        border-radius: 15px;
        margin-bottom: 2%;
      }
    </style>

<div class="all-80 small-100 tiny-100 push-center">
    <div class="ink-tabs top" data-prevent-url-change="true">
        <ul class="tabs-nav" style="margin-bottom:0%">
            <li><a class="tabs-tab" href="#manageUsers">Manage Users</a></li>
            <li><a class="tabs-tab" href="#manageEvents">Manage Events</a></li>
            <li><a class="tabs-tab" href="#notifications">Notifications</a></li>
        </ul>
        <div id="tabContent">
          <div id="manageUsers" class="tabs-content" style="margin-top:0%" >
            <div class="ink-grid gutters" id="usersearchform">
              <form action="#" class="ink-form">
                <div class="control-group all-70 small-100 tiny-100 push-center">
                  <div class="control append-button" role="search">
                    <span><input type="text" id="searchuser" placeholder="Search for an user"></span>
                    <button class="ink-button"><i class="fa fa-search"></i> Search</button>
                  </div>
                </div>

              <div align="center">
                <a class="ink-dropdown" data-target="#dropMenuUser" data-dismiss-on-outside-click="false">Advanced search</a>
                  <div id="dropMenuUser" class="dropdown-menu">
                    <div id="stacker-container" class="column-group all-60">  <!-- Stacker element -->
                      <div class="xlarge-33 large-33 medium-50 tiny-100 stacker-column push-center">
                        <div class="control-group">
                          <label for="companyinfo">Company Information</label>
                           <div class="control" style="margin:2%">
                               <input id="companyinfo" name="companyinfo" type="text" placeholder="Department">
                           </div>
                           <div class="control" style="margin:2%">
                                <input id="companyinfo" name="companyinfo" type="text" placeholder="Position">
                            </div>
                         </div>
                       </div>
                       <div class="xlarge-33 large-33 medium-50 tiny-100 stacker-column">
                         <div class="control-group push-left">
                           <label for="companyinfo">Type of user</label>
                            <div class="control">
                              <ul class="control unstyled">
                                  <li><input type="checkbox" id="type1" name="type1" value="Collaborator"><label for="cb5">Collaborator</label></li>
                                  <li><input type="checkbox" id="type2" name="type2" value="Supervisor"><label for="cb4">Supervisor</label></li>
                                  <li><input type="checkbox" id="type3" name="type3" value="Director"><label for="cb3">Director</label></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                     </div>
                  </div>

              </div>
                </form>
              <div align="center" style="margin-top:3%">
                <a href="addUser.html">
                  <button class="ink-button green"> <div class="fw-300"> <i class="fa fa-plus" aria-hidden="true"></i>  Add new User</div></button>
                </a>
              </div>
          </div>
          <?php include_once('listUsers.php') ?>
        </div>

          <div id="manageEvents" class="tabs-content" style="margin-top:0%">
            <div class="ink-grid gutters">
              <form action="#" class="ink-form">
                <div class="control-group all-70 small-100 tiny-100 push-center">
                  <div class="control append-button" role="search">
                    <span><input type="text" id="searchEvent" placeholder="Search for an event"></span>
                    <button class="ink-button"><i class="fa fa-search"></i> Search</button>
                  </div>
                </div>
              </form>
              <div style="text-align:center">
                <a class="ink-dropdown" data-target="#dropMenuEvent" data-dismiss-on-outside-click="false">Advanced search</a>
                <div id="dropMenuEvent" class="dropdown-menu">
                  <form class="ink-form">
        						<div class="column-group gutters">
        							<div class="control-group all-33 small-100 tiny-100">
        								<fieldset>
        									<legend>Type of event</legend>
        									<ul class="control unstyled align-center inline">
        										<li><input type="checkbox" id="cb1" name="cb" value="Meeting"><label for="cb">Meeting </label></li>
        										<li><input type="checkbox" id="cb2" name="cb" value="Workshop"><label for="cb">Workshop </label></li>
        										<li><input type="checkbox" id="cb3" name="cb" value="Conference"><label for="cb">Conference </label></li>
        										<li><input type="checkbox" id="cb4" name="cb" value="Social Gathering"><label for="cb">Social Gathering </label></li>
        										<li><input type="checkbox" id="cb5" name="cb" value="Lecture"><label for="cb">Lecture </label></li>
        									</ul>
        								</fieldset>
        							</div>
        							<div class="control-group all-33 small-100 tiny-100">
        								<fieldset>
        									<legend>Availability</legend>
        									<ul class="control unstyled">
        										<li><input type="checkbox" id="cb6" name="cb" value="Meeting"><label for="cb">Public </label></li>
        										<li><input type="checkbox" id="cb7" name="cb" value="Workshop"><label for="cb">Private </label></li>
        									</ul>
        								</fieldset>
        							</div>
        							<div class="control-group all-33 small-100 tiny-100">
        								<fieldset>
        									<legend for="filter">Order by</legend>
        									<select name="filter" id="filter">
        										<option value="date">Date</option>
        										<option value="alphabetical">Alphabetical</option>
        									</select>
        								</fieldset>
        							</div>
        						</div>
        						<div class="control-group all-100 small-100 tiny-100 push-center">
        							<input type="submit" value="Filter" class="ink-button">
        						</div>
        					</form>
                </div>
              </div>
              <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word">
        				<tbody>
                  <?php include_once('listEvents.php');?>
        				</tbody>
        			</table>
        		</div>
            </div>

          <div id="notifications" class="tabs-content" style="margin-top:0%">
            <div class="notifications xlarge-70 large-70 medium-100 tiny-100 push-center">
              <div id="stacker-container" class="column-group">
                <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column">
                  <img src="../images/users/user.png" width="50px" height="50px">
                </div>
                <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                  <p> <a href="#"> Fernando Lopes </a> wants to add a new profile picture.</p>
                  <div class="xlarge-20 large-20 medium-20 tiny-100 push-middle" align="right">
                    <span class="ink-tooltip" data-tip-text="Accept" data-tip-color="grey" style="padding:4%">
                      <i class="fa fa-check" aria-hidden="true"></i>
                    </span>
                    <span class="ink-tooltip" data-tip-text="Delete" data-tip-color="grey" style="padding:4%">
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="notifications xlarge-70 large-70 medium-100 tiny-100 push-center">
              <div id="stacker-container" class="column-group">
                <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column">
                  <img src="../images/users/user.png" width="50px" height="50px">
                </div>
                <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                  <p> <a href="#"> John Doe </a> wants to add an alternative e-mail address.</p>
                  <div class="xlarge-20 large-20 medium-20 tiny-100 push-middle" align="right">
                    <span class="ink-tooltip" data-tip-text="Accept" data-tip-color="grey" style="padding:4%">
                      <i class="fa fa-check" aria-hidden="true"></i>
                    </span>
                    <span class="ink-tooltip" data-tip-text="Delete" data-tip-color="grey" style="padding:4%">
                      <i class="fa fa-times" aria-hidden="true"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

<?php include_once($BASE_DIR .'templates/common/footer.tpl'); ?>
