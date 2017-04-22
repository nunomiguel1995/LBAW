
        <style type="text/css">
           #tabContent{
             background: white;
             padding: 3%;
             border-bottom-left-radius: 15px;
             border-bottom-right-radius: 15px;
             margin-bottom: 4%;
           }
        </style>

        <div style="padding:5%px" class="ink-grid all-70 medium-100 small-100 tiny-100">
            <div class="column-group">
                <div>
                    <h2>{$event.name}</h2>
                    <figure class="ink-image bottom-space">
                        <img src="../../images/events/event%20page.png" class="imagequery">
                    </figure>

                    <div class="ink-tabs top" data-prevent-url-change="true" >
                        <ul class="tabs-nav" style="margin-bottom:0px">
                            <li><a class="tabs-tab" href="#info">Information</a></li>
                            <li><a class="tabs-tab" href="#posts">Posts</a></li>
                            <li><a class="tabs-tab" href="#invited">Invited</a></li>
                        </ul>
                        <div id="tabContent">
                            <div id="info" class="tabs-content">
                                <div class="ink-grid">
                                    <div class="column-group horizontal-gutters">
                                        <div class="all-50 small-100 tiny-100">
                                            <h3>Organizer</h3>
                                            <a href="#"><p href="#">{$organizer.name}</p></a>
                                            <h3>Type of Event</h3>
                                            <p>{$event.event_type}</p>
                                        </div>
                                        <div class="all-50 small-100 tiny-100">
                                            <h3>Description</h3>
                                            <p align="justify">{$event.description}</p>
                                            <h3>Location</h3>
                                            <p> {$location.address} , {$event.location}</p>
                                            <h3>Data and Time</h3>
                                            <p>{$event.calendar_date} at {$event.calendar_time}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="posts" class="tabs-content">
                                <div class="ink-grid">
                                    <div class="column-group">
                                        <form class="ink-form all-90 push-center">
                                            <textarea class="all-100" type="text" name="name" id="name" rows="" placeholder="Write something about the event..." style="margin-bottom:1%"></textarea>
                                            <button class="ink-button blue push-right" >Submit</button>
                                            <button class="ink-button push-right" >Add File</button>
                                            <button class="ink-button push-right" >Create Poll</button>
                                        </form>
                                    </div>
                                        {foreach $posts as $post}
                                            <hr class="all-90 push-center">
                                            <div class="post column-group all-90 push-center">
                                              <div class="column-group all-100">
                                                <img class="all-20" src="../../images/users/user.png" style="height:50px;width:50px">

                                                <h6 class="all-80" style="padding-left:1%;padding-top:1%"><a>{$post.name}</a><br><small>{$post.calendar_date} {$post.calendar_time}</small></h6>
                                              </div>
                                              <div class="all-100">
                                                <p align="justify">{$post.post_text}</p>
                                              </div>
                                            </div>
                                        {/foreach}
                                </div>
                            </div>
                            <div id="invited" class="tabs-content">
                                <div class="ink-grid" >
                                    <div class="column-group horizontal-gutters">
                                            {if empty($invited)}
                                                <div class="column-group all-50 small-100 tiny-100">
                                                  <p> There are no invited users </p>
                                                </div>
                                            {else}
                                                {foreach $invited as $inv}
                                                    <div class="column-group all-50 small-100 tiny-100">
                                                      <img class="all-20" src="../../images/users/user.png" style="height:50px;width:50px">
                                                      <h6 class="all-65" style="padding-left:2%;padding-top:5%"><a>{$inv.name}</a></h6>
                                                    </div>
                                                {/foreach}
                                            {/if}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
