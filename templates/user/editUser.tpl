<script type="text/javascript" src="{$BASE_URL}javascript/user.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{$BASE_URL}javascript/newUser.js"></script>

<div class="ink-grid" style="margin-bottom:5%">
      <div class="formulario all-80 small-100 tiny-100 push-center">
      <div class="column-group push-center">
        <div class="xlarge-70 large-70 medium-100 tiny-100">
        	<form name="edit_form" class="ink-form ink-formvalidator" method="post" action="../../actions/user/edit_user.php?id={$profileid}" enctype="multipart/form-data"  onsubmit="return checkEditForm()">
              <h5> Personal Information</h5>
               <div class="profilepic all-30">
                 <figure class = "ink-image">
                   <img id="userphoto" src="{$photo}" alt="user image">
                 </figure>
                 <input type="file" id="filechoice" name="image" accept="image/*"  />
               </div>
                <div class="control-group">
                     <label for="fullname">Full Name</label>
                     <div class="control">
                         <input id="fullname" name="fullname" type="text"  data-rules="required|text[true,false]" value="{$user.name}">
                     </div>
                 </div>
                 <div id="stacker-container" class="column-group">
                    <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                      <div class="control-group xlarge-95 large-95 medium-95 tiny-100">
                         <label for="email">Email</label>
                         <div class="control">
                             <input id="email" name="email" type="text" data-rules="required|email" value="{$user.email}">
                         </div>
                      </div>
                     </div>
                 </div>

          <div id="stacker-container" class="column-group">
              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                  <div class="control-group xlarge-95 large-95 medium-95 tiny-100">
                      <label for="password">New Password</label>
                      <div class="control">
                          <input type="password" name="newpassword" id="newpassword" placeholder="Old Password">
                      </div>
                  </div>
              </div>
              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                  <div class="control-group xlarge-95 large-95 medium-95 tiny-100">
                      <label for="retypepass">Confirm New Password</label>
                      <div class="control">
                          <input type="password" name="newpasswordretype" id="newpasswordretype" placeholder="Retype the password">
                      </div>
                  </div>
              </div>
              <p id="warnings" style="color: red"></p>
          </div>

            <div align="center">
              <input type="submit" name="sub" value="Submit" class="ink-button success blue" />
            </div>
        	</form>
        </div>
      </div>
    </div>
  </div>
