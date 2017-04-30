<div class="ink-grid" style="margin-bottom:5%">
      <div class="formulario all-80 small-100 tiny-100 push-center">
      <div class="column-group push-center">
        <div class="xlarge-70 large-70 medium-100 tiny-100">
        	<form class="ink-form ink-formvalidator" method="post" action="../../database/submit_user.php">
              <h5> Personal Information</h5>
               <div class="profilepic all-30">
                 <figure class = "ink-image">
                   <img src="{$photo}" alt="user image">
                 </figure>
                 <button class="ink-button" type="button" style="margin:2%">Choose File</button>
               </div>
                <div class="control-group">
                     <label for="fullname">Full Name</label>
                     <div class="control">
                         <input id="fullname" name="fullname" type="text"  data-rules="required|text[true,false]" placeholder="{$user.name}">
                     </div>
                 </div>
                 <div id="stacker-container" class="column-group required">
                    <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                      <div class="control-group xlarge-95 large-95 medium-95 tiny-100">
                         <label for="email">Email</label>
                         <div class="control">
                             <input id="email" name="email" type="text" data-rules="required|email" placeholder="{$user.email}">
                         </div>
                      </div>
                     </div>
                 </div>

          <div id="stacker-container" class="column-group required">
              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                  <div class="control-group xlarge-95 large-95 medium-95 tiny-100">
                      <label for="password">Old Password</label>
                      <div class="control">
                          <input type="password" name="password" id="password" data-rules="required|min_length[8]" placeholder="Old Password">
                      </div>
                  </div>
              </div>
              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                  <div class="control-group xlarge-95 large-95 medium-95 tiny-100">
                      <label for="retypepass">New Password</label>
                      <div class="control">
                          <input type="password" name="retype" id="retypepass" data-rules="matches[password]" placeholder="Retype the password">
                      </div>
                  </div>
              </div>
          </div>

            <div align="center">
              <input type="submit" name="sub" value="Submit" class="ink-button success blue" />
            </div>
        	</form>
        </div>
      </div>
    </div>
  </div>
