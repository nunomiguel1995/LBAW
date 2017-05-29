<div id="info" class="tabs-content">
	<div class="ink-grid">
		<div class="column-group horizontal-gutters">
			<div class="all-50 small-100 tiny-100">
				<h3>Organizer</h3>
				<a href="../user/UserPage.php?id={$organizer.idUser}"><p>{$organizer.name}</p></a>
				<h3>Type of Event</h3>
				<p>{$event.event_type}</p>
				{if $event.idCreator == $current_user}
				<br>
				<a style="text-decoration: none" onclick="AlertIt('../../actions/events/deleteEvent.php?idEvent={$event.idEvent}')" > <h3 style="color:red">DELETE EVENT</h3></a>
				{/if}
			</div>
			<div class="all-50 small-100 tiny-100">
				<h3>Description</h3>
				<p align="justify">{$event.description}</p>
				<h3>Location</h3>
				<p> {$location.address} , {$event.location}</p>
				<h3>Data and Time</h3>
				<p>{$event.calendar_date} at {$event.calendar_time|date_format:$config.time}</p>
			</div>
		</div>
	</div>
</div>