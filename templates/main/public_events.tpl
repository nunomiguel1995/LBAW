
{include file='common/header.tpl'}

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
	
	{foreach $events as $event}
		<div id="pEvent" align= "left" class="all-75 small-100 tiny-100 push-center" >
			<a href="{$BASE_URL}pages/event/EventPage.php?id={$event.idEvent}" class="large" > {$event.name} </a>
			<p class="small"> <i class="fa fa-calendar-o" aria-hidden="true"></i> {$event.calendar_date} {$event.calendar_time} <i class="fa fa-map-marker" aria-hidden="true"></i> {$event.location} </p>
			<hr>
			<p> {$event.description} </p>
		</div>
	{/foreach}
{include file='common/footer.tpl'}