    <style type="text/css">
        #column{
          background: white;
          padding: 3%;
          border-bottom-left-radius: 15px;
          border-bottom-right-radius: 15px;
          margin-bottom: 4%;
        }
    </style>
        <div class="ink-grid">
            <div class="column-group horizontal-gutters">
                <div class="all-40 small-100 tiny-100">
                    <figure class="ink-image push-center" style="max-width:350px">
                        <img src="{$photo}">
                        <figcaption class="over-bottom" style="padding-bottom:5px;padding-top:5px">
                            <h6 align="center" style="margin-bottom:0px">{$user.name}</h6>
                        </figcaption>
                    </figure>
                    <br>
                    <div id="column" class="push-center" style="max-width:350px">
                        <h4 align="center">Info</h4>
                        <h5 style="margin-bottom:2px"><small>Username</small></h5>
                        <p>{$user.username}</p>
                        <h5 style="margin-bottom:2px"><small>Email</small></h5>
                        <p>{$user.email}</p>
                        <h5 style="margin-bottom:2px"><small>Position</small></h5>
                        <p>{$companyInfo.position}</p>
                        <h5 style="margin-bottom:2px"><small>Department</small></h5>
                        <p>{$companyInfo.department}</p>
                    </div>
                </div>
                <div class="all-60 small-100 tiny-100 push-left" style="max-width:500px">
                    <div id="column">
                        <h4 align="center">Upcoming Events</h4>
                        <div class="ink-grid">
                            <div class="column-group">
                                <p class="all-60"><a href="./EventPage.html"><big>Weekly Design Meeting</big></a></p>
                                <h6 align="right" class="all-40" style="padding-top:6px"><small>11/11/2014</small></h6>
                                <p class="all-60"><a><big>Visual Interactive Design Workshop</big></a></p>
                                <h6 align="right" class="all-40" style="padding-top:6px"><small>13/11/2014</small></h6>
                                <p class="all-60"><a><big>Pam's Birthday Party</big></a></p>
                                <h6 align="right" class="all-40" style="padding-top:6px"><small>20/04/2014</small></h6>
                                <p class="all-60"><a><big>Sonae Clients Meet</big></a></p>
                                <h6 align="right" class="all-40" style="padding-top:6px"><small>25/04/2014</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
