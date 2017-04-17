<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'templates/common/header.tpl');
?>
  <style type="text/css">
      #pEvent{
        background: white;
        padding: 1%;
        border-style: solid;
        border-color: #dbdbdb;
        border-radius: 15px;
        margin-bottom: 2%;
      }
  </style>

  <div id="top-image">
    <figure class="ink-image bottom-space all-75 small-100 tiny-100 push-center">
      <img src="../../images/events/public_events.jpg" class="imagequery">
      <figcaption class="over-bottom">
        Events for all the community
      </figcaption>
    </figure>
  </div>

	<div id="title" align="middle" style="margin-top:1%">
		<h3> Public Events </h3>
	</div>
	
	<?php
		include_once('../../database/get_public_events.php');
		$public_events = get_public_events();

	?>
	
	<?php foreach($public_events as $public_event){?>
	
	<div id="pEvent" align= "left" class="all-75 small-100 tiny-100 push-center" >

		<a href="#" class="large" > <? echo $public_event['name'] ?> </a>
        <p class="small"> <i class="fa fa-calendar-o" aria-hidden="true"></i> <? echo $public_event['calendar_date'] ?> <? echo $public_event['calendar_time'] ?> <i class="fa fa-map-marker" aria-hidden="true"></i> <? echo $public_event['location'] ?> </p>
		<hr>
		<p> <? echo $public_event['description'] ?> </p>
	</div>
	
	<?php } ?>


<?php include_once($BASE_DIR .'templates/common/footer.tpl'); ?>