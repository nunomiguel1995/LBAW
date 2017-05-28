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

    #text{
      background:white;
      border-style: solid;
      border-color: #dedede #bababa #aaa #bababa;
      border-width: 1px;
      margin: 3%;
    }

</style>

<script type="text/javascript" src="../../javascript/messages.js"></script>

<div id="toolBox" class="xlarge-60 large-60 medium-60 tiny-100 push-center" style="margin-bottom:1%">
  <span class="ink-tooltip" data-tip-text="Back" data-tip-color="grey">
    <a href="{$BASE_URL}pages/user/Messages.php" class="ink-button grey">  <i class="fa fa-chevron-left" aria-hidden="true"></i></a>
  </span>
  <span class="ink-tooltip" data-tip-text="Reply" data-tip-color="grey">
    <a href="{$BASE_URL}pages/user/newMessage.php?id={$user.idUser}" class="ink-button grey">  <i class="fa fa-reply" aria-hidden="true"></i></a>
  </span>
  <span class="ink-tooltip" data-tip-text="Delete" data-tip-color="grey">
    <a href="javascript:deleteMessage({$message.idMessage});" class="ink-button grey">  <i class="fa fa-trash-o" aria-hidden="true"></i></a>
  </span>
</div>

<div id="message" class="xlarge-60 large-60 medium-60 tiny-100 push-center">
  <div id="stacker-container" class="column-group push-center" >
      <div class="xlarge-10 large-10 medium-20 tiny-100" style="margin-top:3%">
          <img src="{$user.photo}" width="50px" height="50px">
      </div>
      <div class="xlarge-60 large-60 medium-60 tiny-100 stacker-column push-left" style="margin-top:3%">
        <a href="{$BASE_URL}pages/user/UserPage.php?id={$user.idUser}">{$user.name}</a>
        <p> <b> {$message.subject} </b> </p>
      </div>
  </div>
  <div id="text" class="push-center all-70" style="margin-left:15%">
    <p style="margin:3%"> {$message.message_text} </p>
  </div>
</div>

{include file = 'common/footer.tpl'}
