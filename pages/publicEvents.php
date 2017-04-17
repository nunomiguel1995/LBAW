<?php
  include_once('../config/init.php');
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
      <img src="../images/events/public_events.jpg" class="imagequery">
      <figcaption class="over-bottom">
        Events for all the community
      </figcaption>
    </figure>
  </div>

	<div id="title" align="middle" style="margin-top:1%">
		<h3> Public Events </h3>
	</div>

	<div id="pEvent" align= "left" class="all-75 small-100 tiny-100 push-center" >

		<a href="#" class="large" >August Product Showcase </a>
        <p class="small"> <i class="fa fa-calendar-o" aria-hidden="true"></i>  2/08/2017 17:30 <i class="fa fa-map-marker" aria-hidden="true"></i> Main Presentation Area</p>
		<hr>
		<p> Showcase of all new products the company will release in the next months. Anyone can attend.</p>


	</div>
      <div id="pEvent" align= "left" class="all-75 small-100 tiny-100 push-center" >

		<a href="#" class="large" >27 Years Anniversary Celebration </a>
          <p class="small"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 17/12/2017 22:00 <i class="fa fa-map-marker" aria-hidden="true"></i> Canteen </p>
		<hr>
		<p> Our esteemed company is going to become one year older! Come celebrate with us!</p>


	</div>
      <div id="pEvent" align= "left" class="all-75 small-100 tiny-100 push-center" >

		<a href="#" class="large" >Charity Event</a>
        <p class="small"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 24/02/2018 21:30 <i class="fa fa-map-marker" aria-hidden="true"></i> Canteen</p>
		<hr>
		<p>Event to raise funds to send to several organizations battling the ebola spread in Central Africa. </p>
	</div>

<?php include_once($BASE_DIR .'templates/common/footer.tpl'); ?>
