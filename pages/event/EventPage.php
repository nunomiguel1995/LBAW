<?php
  include_once('../config/init.php');
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
        </style>

        <div style="padding:5%px" class="ink-grid all-70 medium-100 small-100 tiny-100">
            <div class="column-group">
                <div>
                    <h2> Weekly Design Meeting</h2>
                    <figure class="ink-image bottom-space">
                        <img src="../images/events/event%20page.png" class="imagequery">
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
                                            <a href="#"><p href="#">John Doe</p></a>
                                            <h3>Topics</h3>
                                            <ul class="unstyled">
                                                <p class="ink-toggle" data-target="#myAlert">first topic</p>
                                                <div id="myAlert" class="ink-alert block hide-all">
                                                    <h4>This is a details section</h4>
                                                    <p>more info on the topic</p>
                                                </div>
                                                <p>second topic</p>
                                                <p>last topic</p>
                                            </ul>

                                        </div>
                                        <div class="all-50 small-100 tiny-100">
                                            <h3>Event</h3>
                                            <p>Weekly Meeting</p>
                                            <h3>Location</h3>
                                            <p>Meeting Room 4<sup>th</sup> Floor, Design Department</p>
                                            <h3>Data and Time</h3>
                                            <p> 2/31/2099 at 10:00 am</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="posts" class="tabs-content">
                                <div class="ink-grid">
                                    <div class="column-group">
                                        <form class="ink-form all-90 push-center" >
                                            <textarea class="all-100" type="text" name="name" id="name" rows="" placeholder="Write something about the event..." style="margin-bottom:1%"></textarea>
                                            <button class="ink-button blue push-right" >Submit</button>
                                            <button class="ink-button push-right" >Add File</button>
                                            <button class="ink-button push-right" >Create Poll</button>
                                        </form>
                                    </div>
                                    <hr class="all-90 push-center">
                                    <div class="post column-group all-90 push-center">
                                        <div class="column-group all-100">
                                            <img class="all-20" src="../images/users/user.png" style="height:50px;width:50px">
                                            <h6 class="all-80" style="padding-left:1%;padding-top:1%"><a>John Doe</a><br><small>10/10/2016 10:32</small></h6>
                                        </div>
                                        <div class="all-100">
                                            <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet consectetur quam. Cras sed neque ligula. Etiam condimentum velit id sollicitudin aliquet. Mauris egestas leo erat, vel rhoncus libero sollicitudin vitae. Cras leo urna, maximus ut convallis eu, rhoncus ac turpis. Vivamus nec bibendum nibh. Maecenas dictum molestie nulla, et vestibulum est eleifend aliquam. Curabitur et mauris vitae augue posuere commodo. Pellentesque ac imperdiet sapien. Donec ornare varius tempor. Duis vulputate quis velit vel aliquet. Vestibulum viverra nibh lectus, eget lacinia felis sollicitudin eget. Donec dignissim ultricies diam vitae ultricies. Morbi volutpat commodo ex.</p>
                                        </div>
                                    </div>
                                    <hr class="all-90 push-center">
                                    <div class="post column-group all-90 push-center">
                                        <div class="column-group all-100">
                                            <img class="all-20" src="../images/users/user.png" style="height:50px;width:50px">
                                            <h6 class="all-80" style="padding-left:1%;padding-top:1%"><a>Lena Amett</a><br><small>08/10/2016 15:12</small></h6>
                                        </div>
                                        <div class="all-100">
                                            <p align="justify">Nunc tempor convallis bibendum. Nulla eleifend, diam sit amet lobortis interdum, justo massa faucibus lectus, et facilisis nisi ligula sed orci. Cras et tempor odio, ut ultrices urna. Integer id vulputate justo, in pulvinar dolor. Pellentesque nec tellus a odio iaculis egestas. Ut ac scelerisque velit, in iaculis nisi.</p>
                                        </div>
                                        <div class="file-div all-100">
                                            <div class="column-group all-100">
                                            <img class="all-20" src="../images/assets/file_icon.png" style="height:30px;width:30px">
                                                <h6 class="all-80" style="padding-top:1%;padding-left:1%"><a>file_name.xpto</a></h6>
                                            </div>
                                        </div>
                                        <div class="file-div all-100">
                                            <div class="column-group all-100">
                                            <img class="all-20" src="../images/assets/file_icon.png" style="height:30px;width:30px">
                                                <h6 class="all-80" style="padding-top:1%;padding-left:1%"><a>file_name.xpto</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                     <hr class="all-90 push-center">
                                </div>
                            </div>
                            <div id="invited" class="tabs-content">
                                <div class="ink-grid" >
                                    <div class="column-group horizontal-gutters">
                                        <div class="column-group all-50 small-100 tiny-100">
                                            <img class="all-20" src="../images/users/user.png" style="height:50px;width:50px">
                                            <h6 class="all-65" style="padding-left:2%;padding-top:5%"><a>John Doe</a></h6>
                                        </div>
                                        <div class="column-group all-50 small-100 tiny-100" style="padding-bottom:2%">
                                            <img class="all-20" src="img/user.png" style="height:50px;width:50px">
                                            <h6 class="all-65" style="padding-left:2%;padding-top:5%"><a>Dwight Schrute</a></h6>
                                        </div>
                                        <div class="column-group all-50 small-100 tiny-100" style="padding-bottom:2%">
                                            <img class="all-20" src="../images/users/user.png" style="height:50px;width:50px">
                                            <h6 class="all-65" style="padding-left:2%;padding-top:5%"><a>Jim Halpert</a></h6>
                                        </div>
                                        <div class="column-group all-50 small-100 tiny-100" style="padding-bottom:2%">
                                            <img class="all-20" src="../images/users/user.png" style="height:50px;width:50px">
                                            <h6 class="all-65" style="padding-left:2%;padding-top:5%"><a>Pam Beesly</a></h6>
                                        </div>
                                        <div class="column-group all-50 small-100 tiny-100" style="padding-bottom:2%">
                                            <img class="all-20" src="../images/users/user.png" style="height:50px;width:50px">
                                            <h6 class="all-65" style="padding-left:2%;padding-top:5%"><a>Angela Martin</a></h6>
                                        </div>
                                        <div class="column-group all-50 small-100 tiny-100" style="padding-bottom:2%">
                                            <img class="all-20" src="../images/users/user.png" style="height:50px;width:50px">
                                            <h6 class="all-65" style="padding-left:2%;padding-top:5%"><a>Meredith Palmer</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include_once($BASE_DIR .'templates/common/footer.tpl'); ?>
