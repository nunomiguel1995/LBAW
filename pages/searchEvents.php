<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'templates/common/header.tpl');
?>

	<style type="text/css">
		#advanced-search{
			background: #ccc;
		}
  </style>

	<div class="ink-grid gutters">
		<form action="#" class="ink-form">
			<div class="control-group all-50 small-100 tiny-100 push-center">
				<div class="control append-button" role="search">
					<span><input type="text" id="name5" placeholder="Search for an event"></span>
					<button class="ink-button"><i class="fa fa-search"></i> Search</button>
				</div>
			</div>
		</form>
		<div class="ink-grid align-center">
			<a class="ink-dropdown" data-target="#my-menu-dropdown" data-dismiss-on-outside-click="false"  >Advanced search</a>
			<div id="my-menu-dropdown" class="dropdown-menu"><br>
				<form class="ink-form">
					<div class="column-group gutters">
						<div class="control-group all-33 small-100 tiny-100">
							<fieldset>
								<legend>Type of event</legend>
								<ul class="control unstyled align-center inline">
									<li><input type="checkbox" id="cb1" name="cb" value="Meeting"><label for="cb">Meeting </label></li>
									<li><input type="checkbox" id="cb2" name="cb" value="Workshop"><label for="cb">Workshop </label></li>
									<li><input type="checkbox" id="cb3" name="cb" value="Conference"><label for="cb">Conference </label></li>
									<li><input type="checkbox" id="cb4" name="cb" value="Social Gathering"><label for="cb">Social Gathering </label></li>
									<li><input type="checkbox" id="cb5" name="cb" value="Lecture"><label for="cb">Lecture </label></li>
								</ul>
							</fieldset>
						</div>
						<div class="control-group all-33 small-100 tiny-100">
							<fieldset>
								<legend>Availability</legend>
								<ul class="control unstyled">
									<li><input type="checkbox" id="cb6" name="cb" value="Meeting"><label for="cb">Public </label></li>
									<li><input type="checkbox" id="cb7" name="cb" value="Workshop"><label for="cb">Private </label></li>
								</ul>
							</fieldset>
						</div>
						<div class="control-group all-33 small-100 tiny-100">
							<fieldset>
								<legend for="filter">Order by</legend>
								<select name="filter" id="filter">
									<option value="date">Date</option>
									<option value="alphabetical">Alphabetical</option>
								</select>
							</fieldset>
						</div>
					</div>
					<div class="control-group all-100 small-100 tiny-100 push-center">
						<input type="submit" value="Filter" class="ink-button">
					</div>
				</form>
			</div>
		</div>
		<br>
		<table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word">
			<tbody >
				<tr>
					<td >
						<a href="#">Meeting</a>
						<p class="fw-300">05/03/2017-16:30</p>
Meetings, meetings, meetings ... you've got to have at least some to keep the team communicating, but which ones, why, and with whom in attendance? Check out one team's approach in their meeting-phobic environment; describing their critical "types" meetings in a way that portrays their practicality and value(!).

					</td>
				</tr>
				<tr>
					<td>
						<a href="#">Conference</a>
						<p class="fw-300">08/04/2017-10:00</p>
							How difficult can it be to give a test? You’ve probably heard this from your family, friends, and perhaps even your supervisor, but as testing professionals, we know it can be challenging and stressful. In this workshop, attendees will explore stressors you might encounter in your work day and ways to handle them by way of desserts and entertaining. The presentation, a participatory format layered with stories and examples, glazed with handouts, and dipped in humor, will offer a creative view of stress, as well as, a quirky sprinkling of creativity to get you through the day. The interactive workshop will have you wanting a second helping but you’ll be ready to get back to work to try your new recipes for success.
					</td>
				</tr>
				<tr>
					<td>
						<a href="#">Meeting</a>
						<p class="fw-300"> 09/07/2017-14:00</p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

<?php include_once($BASE_DIR .'templates/common/footer.tpl'); ?>
