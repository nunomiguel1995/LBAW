<div class="ink-shade fade">
   <div id="myModal" class="ink-modal fade" data-trigger="#myModalTrigger2" data-width="55%" data-height="55%" role="dialog" aria-hidden="true" aria-labelled-by="modal-title">
    <div class="modal-header">
      <button class="modal-close ink-dismiss"></button>
  </div>
  <div class="modal-body" id="modalContent">
    <div id="login" align="center">
    <h2 > Log In </h1>
    <form class="ink-form ink-formvalidator" action="../../actions/user/login_action.php" method="post">
      <div class="control-group required all-70">
        <div class="control" style="margin:5%">
          <input id="username" name="username" type="text" data-rules="required|text[true,false]" placeholder="Username">
        </div>
        <div class="control" style="margin:5%">
          <input  id="password" name="password" type="password" data-rules="required|min_length[8]" placeholder="Password">
        </div>
      </div>
      <button class="ink-button blue" type="submit">Log in</button>
    </form>
    </div>
  </div>
  </div>
</div>
<a href="#" id="myModalTrigger2" class="ink-button black">Log In</a>
