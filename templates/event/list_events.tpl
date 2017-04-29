<style type="text/css">
    #advanced-search{
        background: #ccc;
    }
</style>

<div class="ink-grid gutters">
<form class="ink-form" action="listEvent.php" method="GET">
<div class="control-group all-50 small-100 tiny-100 push-center">
    <div class="control append-button" role="search">
        <span><input type="text" name="search_text" id="name5" placeholder="Search for an event"></span>
        <button class="ink-button"><i class="fa fa-search"></i> Search</button>
    </div>
</div>
</form>
<div class="ink-grid align-center">
    <a class="ink-dropdown" data-target="#my-menu-dropdown" data-dismiss-on-outside-click="false">Advanced search</a>
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
        <tbody>        
            {foreach $events as $e}
                {if !$USERNAME}
                    {if $e.isPublic}
                        <tr>
                            <td>
                                <a href="EventPage.php?id={$e.idEvent}"> {$e.name} </a>
                                <p class="fw-300">{$e.calendar_date} - {$e.calendar_time}</p>
                                {$e.description}
                            </td>
                        </tr>
                    {/if}
                {/if}
            {/foreach}
        </tbody>
    </table>
</div>