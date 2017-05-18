<div id="manageEvents" class="tabs-content" style="margin-top:0%">
    <div class="ink-grid gutters">
        <form class="ink-form" action="adminDashboard.php" method="POST">
            <div class="control-group all-50 small-100 tiny-100 push-center">
                <div class="control append-button" role="search">
                    <span><input type="text" name="search_text" id="name5" placeholder="Search for an event"></span>
                    <button class="ink-button"><i class="fa fa-search"></i> Search</button>
                </div>
            </div>
            <div class="ink-grid align-center">
                <a class="ink-dropdown" data-target="#my-menu-dropdown" data-dismiss-on-outside-click="false">Advanced search</a>
                <div id="my-menu-dropdown" class="dropdown-menu"><br>
                    <div class="column-group gutters">
                        <div class="control-group all-33 small-100 tiny-100">
                            <fieldset>
                                <legend>Type of event</legend>
                                <ul class="control unstyled align-center inline">
                                    <li><input type="checkbox" id="cb1" name="eventType[]" value="Meeting"><label for="cb">Meeting </label></li>
                                    <li><input type="checkbox" id="cb2" name="eventType[]" value="Workshop"><label for="cb">Workshop </label></li>
                                    <li><input type="checkbox" id="cb3" name="eventType[]" value="Lecture/Conference"><label for="cb">Lecture/Conference </label></li>
                                    <li><input type="checkbox" id="cb4" name="eventType[]" value="SocialGathering"><label for="cb">Social Gathering </label></li>
                                    <li><input type="checkbox" id="cb5" name="eventType[]" value="KickOff"><label for="cb">Kickoff </label></li>
                                </ul>
                            </fieldset>
                        </div>
                        <div class="control-group all-33 small-100 tiny-100">
                            <fieldset>
                                <legend>Availability</legend>
                                <ul class="control unstyled">
                                    <li><input type="checkbox" name="availability[]" value="true"><label for="cb">Public </label></li>
                                    <li><input type="checkbox" name="availability[]" value="false"><label for="cb">Private </label></li>
                                </ul>
                            </fieldset>
                        </div>
                        <div class="control-group all-33 small-100 tiny-100">
                            <fieldset>
                                <legend for="filter">Order by</legend>
                                <select name="filter">
                                    <option disabled selected value> -- select an option -- </option>
                                    <option value="date">Date</option>
                                    <option value="alphabetical">Alphabetical</option>
                                </select>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word">
            <tbody>
                {foreach $events as $event}
                    <tr>
                        <td >
                            <span class="ink-tooltip push-right" data-tip-text="Delete" data-tip-color="grey">
                                <i class="fa fa-times" aria-hidden="true" onclick="onClickDeleteEvent('{$event.idEvent}')"></i>
                            </span><br>
                            <a href="#">{$event.name}</a>
                            <h6 class="fw-300">{$event.calendar_date} {$event.calendar_time}</h6>
                            <p> {$event.description} </p>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</div>
