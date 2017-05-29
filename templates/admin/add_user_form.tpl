<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{$BASE_URL}javascript/newUser.js"></script>

<div class="ink-grid" style="margin-bottom:5%">
      <div class="formulario all-80 small-100 tiny-100 push-center">
      <div class="column-group push-center">
        <div class="xlarge-70 large-70 medium-100 tiny-100">
        	<form class="ink-form ink-formvalidator" method="post" action="../../actions/user/create_user.php" enctype="multipart/form-data">
            <h5> Personal Information</h5>
             <div class="profilepic all-30">
               <figure class = "ink-image">
                 <img id="userphoto" src="../../images/users/user.png" alt="user image">
               </figure>
               <input type="file" id="filechoice" name="image" accept="image/*" />
            </div>
                <div class="control-group required ">
                     <label for="fullname">Full Name</label>
                     <div class="control">
                         <input id="fullname" name="fullname" type="text"  data-rules="required|text[true,false]" placeholder="User Full Name">
                     </div>
                 </div>
                 <div id="stacker-container" class="column-group required">
                   <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                     <div class="control-group xlarge-95 large-95 medium-95 tiny-100 required">
                        <label for="username">Username</label>
                        <div class="control">
                            <input id="username" name="username" type="text"  data-rules="required|text[true,false]" placeholder="New Username">
                        </div>
                      </div>
                    </div>
                    <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                      <div class="control-group xlarge-95 large-95 medium-95 tiny-100 required">
                         <label for="email">Email</label>
                         <div class="control">
                             <input id="email" name="email" type="text" data-rules="required|email" placeholder="E-mail">
                         </div>
                      </div>
                     </div>
                 </div>

          <div id="stacker-container" class="column-group required">
              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                  <div class="control-group xlarge-95 large-95 medium-95 tiny-100 required">
                      <label for="password">Password</label>
                      <div class="control">
                          <input type="password" name="password" id="password" data-rules="required|min_length[8]" placeholder="New Password">
                      </div>
                  </div>
              </div>
              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                  <div class="control-group xlarge-95 large-95 medium-95 tiny-100 required">
                      <label for="retypepass">Retype</label>
                      <div class="control">
                          <input type="password" name="retype" id="retypepass" data-rules="matches[password]" placeholder="Retype the password">
                      </div>
                  </div>
              </div>
          </div>

            <h5> Company Information </h5>
            <div id="stacker-container" class="column-group required">
              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                <div class="control-group xlarge-95 large-95 medium-95 tiny-100 required">
                    <label for="department">Department</label>
                    <div class="control">
                        <input type="text" name="department" id="department" data-rules="required|text[true,false]" placeholder="Department">
                    </div>
                </div>
              </div>
              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                <div class="control-group xlarge-95 large-95 medium-95 tiny-100 required">
                    <label for="position">Position</label>
                    <div class="control">
                        <input type="text" name="position" id="position" data-rules="required|text[true,false]" placeholder="Position">
                    </div>
                </div>
              </div>
            </div>
        	  <fieldset>
                <div class="control-group required">
                    <label class="type">Type of User
                      <span class="ink-tooltip" data-tip-html="<h6> The different types of users have different permissions:</h6> <ul> <li>Collaborator: can't create events</li>
                        <li>Supervisor: can create low level events</li> <li>Director: can create every type of event</li> </ul> "
                        data-tip-where="right" data-tip-color="grey">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                      </span>
                    </label>
                    <ul class="control unstyled">
                        <li><input type="radio" id="rb1" name="rb" value="Collaborator"><label for="rb1">Collaborator</label></li>
                        <li><input type="radio" id="rb2" name="rb" value="Supervisor"><label for="rb2">Supervisor</label></li>
                        <li><input type="radio" id="rb3" name="rb" value="Director"><label for="rb3">Director</label></li>
                    </ul>
                </div>
            </fieldset>
            <div align="center">
              <input type="submit" name="sub" value="Submit" class="ink-button success blue" />
            </div>
        	</form>
          <p id="warnings"></p>
        </div>
      </div>
    </div>
  </div>
