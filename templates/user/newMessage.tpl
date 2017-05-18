{include file='common/header.tpl'}

<style type="text/css">
    #message{
        background: white;
        border-radius: 10px;
        border-color: #dedede #bababa #aaa #bababa;
        border-style: solid;
        border-width: 1px;
        margin-bottom: 10%;
    }

</style>

  <div id="message" class= "all-70 push-center" align="center">
    <div style="margin:3%">
        <h4> New Message </h4>
      <form class="ink-form ink-formvalidator push-center" method="post" action="../../actions/user/sendMessage.php" enctype="multipart/form-data">
          <div class="all-80" align="left">
            <p> <strong> To </strong>  <a href="{$BASE_URL}pages/user/UserPage.php?id={$user.idUser}"> {$user.name} </p> </a> </p>
          </div>
          <div class="all-80"  style="margin-left:1%" align="left">
           <label for="subject"> <strong> Subject <strong> </label>
           <input class ="all-80" type="text" name="subject" id="subject" data-rules="required|text[true,false]" placeholder="Subject" style:"margin-left: 5%">
          </div>
          <div class="all-80" style="margin-top:3%">
            <textarea class="all-100" type="text" name="message" id="message" rows="" placeholder="Write a message" style="margin-bottom:1%"></textarea>
            <input type="hidden" name="idReceiver" value="{$user.idUser}" />
          </div>
          <div style="margin: 3%">
            <input type="submit" name="sub" value="Send" class="ink-button success blue" />
          </div>
      </form>
    </div>
  </div>

{include file = 'common/footer.tpl'}
