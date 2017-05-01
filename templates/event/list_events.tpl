<style type="text/css">
    #advanced-search{
        background: #ccc;
    }
</style>

<div class="ink-grid gutters">
<form class="ink-form" action="listEvent.php" method="POST">
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
                            <li><input type="checkbox" id="cb1" name="meeting" value="Meeting"><label for="cb">Meeting </label></li>
                            <li><input type="checkbox" id="cb2" name="workshop" value="Workshop"><label for="cb">Workshop </label></li>
                            <li><input type="checkbox" id="cb3" name="conference" value="Conference"><label for="cb">Conference </label></li>
                            <li><input type="checkbox" id="cb4" name="social" value="Social Gathering"><label for="cb">Social Gathering </label></li>
                            <li><input type="checkbox" id="cb5" name="lecture" value="Lecture"><label for="cb">Lecture </label></li>
                        </ul>
                    </fieldset>
                </div>
                <div class="control-group all-33 small-100 tiny-100">
                    <fieldset>
                        <legend>Availability</legend>
                        <ul class="control unstyled">
                            <li><input type="checkbox" name="availability[]" value="public"><label for="cb">Public </label></li>
                            <li><input type="checkbox" name="availability[]" value="private"><label for="cb">Private </label></li>
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
    <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="5" data-pagination="#myTablePagination">
    <tbody>
        {if $USERNAME}
            {foreach $events as $e}
                <tr>
                    <td>
                        <a href="EventPage.php?id={$e.idEvent}"> {$e.name} </a>
                        {if $e.isPublic}
                            <p class="fw-300">{$e.calendar_date} - {$e.calendar_time} - Public Event</p>
                        {else}
                            <p class="fw-300">{$e.calendar_date} - {$e.calendar_time}</p>
                        {/if}
                        {$e.description}
                    </td>
                </tr>
            {/foreach}
        {else}
            {foreach $public as $p}
                <tr>
                    <td>
                        <a href="EventPage.php?id={$p.idEvent}"> {$p.name} </a>
                        <p class="fw-300">{$p.calendar_date} - {$p.calendar_time} - Public Event</p>
                        {$p.description}
                    </td>
                </tr>
            {/foreach}
        {/if}
    
    </tbody>
</table>
</div>