

    <style type="text/css">
      #page{
        background: white;
        border-radius: 15px;
        border-style: solid;
        border-width: 2px;
        border-color: #dbdbdb;
      }
      .user{
        background: #ededed;
        padding: 1%;
        border-style: solid;
        border-color: #dbdbdb;
        border-radius: 15px;
        margin-bottom: 2%;
      }
    </style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="{$BASE_URL}javascript/addevent.js"></script>
    <div class="all-80 small-100 tiny-100 push-center">
      <div id="createEvent" class="ink-carousel" data-pagination="#my-carousel-1-pagination" align="center">
        <h4> Create Event </h4>
        <form class="ink-form ink-formvalidator"	action="../../actions/events/AddEventAction.php" method="post" runat="server" enctype= "multipart/form-data">
            <ul class="stage column-group half-gutters" >
                <li class="slide all-100 small-100 tiny-100" id="page">
                        <div class="control-group all-70">
                          <h5 align="left" style="margin-top:2%">Basic Information</h5>
                          <div class="control-group required">
                            <label for="eventname" align = "left">Enter a name for the event:</label>
                            <div class="control" >
                                <input id="eventname" name="eventname" type="text" data-rules="required|text[true,false]" placeholder="Event Name">
                            </div>
                          </div>
						  <div class="control-group required">
							<label for="ccSelector" >Enter the country and city of the event location:</label>
							<div class="column-group horizontal-gutters" id="ccSelector" >
								<div class="control all-50">
									<input  id="country" name="country" type="text" data-rules="required|text[true,false]" placeholder="Country">
								</div>
								<div class="control all-50">
									<input  id="city" name="city" type="text" data-rules="required|text[true,false]" placeholder="City">
								</div>
							</div>
						  </div>
                          <div class="control-group required">
							<label for="location" align = "left">Enter the address of the event:</label>
                            <div class="control">
                                <input  id="location" name="location" type="text" data-rules="required|text[true,false]" placeholder="Event Location">
                            </div>
                          </div>
						  <div class="control-group required">
                             <label for="room" align = "left">Enter the room in the location:</label>
                            <div class="control">
                                <input  id="room" name="room" type="text" data-rules="required|text[true,false]" placeholder="Location Room">
                            </div>
                          </div>
                        <div class="control-group required">
                          <label for="date" align="left">Date</label><br>
                            <div id="stacker-container" class="column-group">
                              <div class="xlarge-40 large-40 medium-40 tiny-100 stacker-column" align="left">
                                  <input id="eventdate" name="eventdate" type="text" class="ink-datepicker" data-format="Y-m-d" />
                              </div>
                              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column" align="left">
                                <input id="eventhour" name="eventhour" type="time" name="timePicker" />
                              </div>
                            </div>
                          </div>
                            <div id="stacker-container" class="column-group">
                              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column push-middle" align="left">
                                <fieldset>
                                    <div class="control-group required">
                                      <label for="type" align="left">Type</label><br>
                                        <ul class="control unstyled">
										{if $type == "Supervisor" || $type == "Director"}
                                            <li><input type="radio" id="rb1" name="rb" value="Meeting"><label for="rb1">Meeting</label></li>
                                            <li><input type="radio" id="rb2" name="rb" value="Workshop"><label for="rb2">Workshop</label></li>
                                            <li><input type="radio" id="rb3" name="rb" value="SocialGathering"><label for="rb3">Social Gathering</label></li>
											{if $type == "Director"}
                                            <li><input type="radio" id="rb4" name="rb" value="Lecture/Conference"><label for="rb4">Lecture/Conference</label></li>
                                            <li><input type="radio" id="rb5" name="rb" value="KickOff"><label for="rb5">Kick-off Meeting</label></li>
											{/if}
										{/if}
                                        </ul>
                                    </div>
                                </fieldset>
                              </div>
                              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column push-middle" align="left">
                                <fieldset>
                                    <div class="control-group" align = "left">
                                        <ul class="control unstyled">
                                            <li><input type="checkbox" id="publicev" name="publicev" value="Public"><label for="cb5">Make Event Public</label></li>
                                        </ul>
                                    </div>
                                </fieldset>
                              </div>
                            </div>
                        </div>
                </li>
                <li class="slide all-100 small-100 tiny-100" id="page">
                  <div class="control-group all-70">
                    <h5 for="description" align = "left" style="margin-top:2%">Description <small>(Optional)</small></h5>
                    <div class="control">
                      <textarea id="description" name ="description" rows="4" cols="50"></textarea>
                    </div>
                  </div>
                  <div class="control-group all-70">
                    <div class="control">
                      <h5 for="description" align = "left">Choose Event Photo <small>(Optional)</small></h5>
                      <div class="profilepic all-55">
                        <figure class = "ink-image">
                          <img id="eventphoto" src="{$BASE_URL}images/assets/event-generic.png" alt="event image">
                        </figure>
                        <input type="file" id="filechoice" name="image" accept="image/*">
                      </div>
                    </div>
                  </div>
                </li>
                <li class="slide all-100 small-100 tiny-100" id="page">
                  <div class="control-group all-70 small-95 tiny-95">
                    <h5 for="description" align = "left" style="margin-top:2%">Invite People </small></h5>
                    <div class="control" id="invited">
                      <div class="ink-shade fade">
                          <div id="myModal" class="ink-modal fade" data-trigger="#myModalTrigger" data-width="80%" data-height="80%" role="dialog" aria-hidden="true" aria-labelled-by="modal-title">
                              <div class="modal-header">
                                  <button class="modal-close ink-dismiss"></button>
                                  <h2 id="modal-title">Invite People</h2>
                                  <form action="#" class="ink-form" method="POST">
                                    <div class="control-group all-50 small-100 tiny-100 push-center">
                                      <div class="control append-button" role="search">
                                        <span><input type="text" name="search_user_clOut" id="search_user_clOut" placeholder="Search People"></span>
                                        <button class="ink-button"><i class="fa fa-search"></i> Search</button>
                                      </div>
                                    </div>
                                  </form>
                              </div>
                              <div class="modal-body" id="modalContent">
							  {foreach $allusers as $user}
                                <div class="user all-50 small-100 tiny-100 push-center" id="{$user.username}" >
                                  <div id="stacker-container" class="column-group">
                                    <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column">
                                      <img src="{$user.photo}" width="50px" height="50px">
                                    </div>
                                    <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                                      <a id= "link" href="#"> {$user.name} </a>
                                    </div>
                                      <div class="xlarge-20 large-20 medium-20 tiny-100 stacker-column push-center">

                                            <fieldset>
                                                <div class="control-group">
                                                    <ul class="control unstyled">
                                                        <li><input type="checkbox" id="cb[]" name="{$user.username}" value="{$user.name}" onclick="addToArray('{$user.username}','{$user.name}')"></li>
                                                    </ul>
                                                </div>
                                            </fieldset>

                                      </div>
                                  </div>
                                </div>
								{/foreach}
                              </div>
                              <div class="modal-footer">
                                  <div class="push-center">
                                      <button class="ink-button ink-dismiss blue">Done</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div style="margin-bottom:2%">
                        <a href="#" id="myModalTrigger" class="ink-button green"><i class="fa fa-plus" aria-hidden="true" ></i>  Invite</a><br>
                      </div>
					  {foreach $allusers as $user}
                      <div class="user xlarge-70 large-70 medium-100 tiny-100 push-center" id="{$user.name}" hidden>
                        <div id="stacker-container" class="column-group">
                          <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column">
                            <img src="{$user.photo}" width="50px" height="50px">
                          </div>
                          <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                            <a href="#"> {$user.name} </a>
                          </div>
                          <div class="xlarge-20 large-20 medium-20 tiny-100 stacker-column push-middle" align="right" >
                            <span class="ink-tooltip" data-tip-text="Delete" data-tip-color="grey" style="padding:4%" >
                                <i class="fa fa-times" aria-hidden="true" name="{$user.name}" value="{$user.name}" onclick="addToArray('{$user.name}','{$user.username}')"></i>
                            </span>
                          </div>
                        </div>
					   </div>
					  {/foreach}
					  </div>
                    </div>
					<div align="center" style="margin:2%">
						<input type="submit" name="sub" value="Create Event" class="ink-button success blue"/>
					</div>

                  </div>

                </li>
            </ul>
            <nav id="my-carousel-1-pagination" class="ink-navigation">
                <ul class="pagination grey"> </ul>
            </nav>

          </form>
      </div>
    </div>
