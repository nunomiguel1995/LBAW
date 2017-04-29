  <div id="manageEvents" class="tabs-content" style="margin-top:0%">
    <div class="ink-grid gutters">
      <form action="#" class="ink-form">
        <div class="control-group all-70 small-100 tiny-100 push-center">
          <div class="control append-button" role="search">
            <span><input type="text" id="searchEvent" placeholder="Search for an event"></span>
            <button class="ink-button"><i class="fa fa-search"></i> Search</button>
          </div>
        </div>
      </form>
      <div style="text-align:center">
        <a class="ink-dropdown" data-target="#dropMenuEvent" data-dismiss-on-outside-click="false">Advanced search</a>
        <div id="dropMenuEvent" class="dropdown-menu">
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
