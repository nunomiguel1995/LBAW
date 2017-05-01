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
            <div class="column-group horizontal-gutters" style="margin-bottom:5%">
                <div class="all-40 small-100 tiny-100">
                    <figure class="ink-image push-center" style="max-width:350px">
                        <img src="{$photo}">
                        <figcaption class="over-bottom" style="padding-bottom:5px;padding-top:5px">
                            <h6 align="center" style="margin-bottom:0px">{$user.name}</h6>
                        </figcaption>
                    </figure>
                    <br>
                    {if ($IDUSER == $profileid || $USERNAME == "admin")}
                    <div align="center">
                      <a href="{$BASE_URL}pages/user/editProfile.php?id={$profileid}">
                        <button class="ink-button green"> <div class="fw-300">Edit Profile</div></button>
                      </a>
                    </div>
                    {/if}

                </div>
                <div class="all-60 small-100 tiny-100 push-left" style="max-width:500px">
                    <div id="column">
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

            </div>
        </div>
