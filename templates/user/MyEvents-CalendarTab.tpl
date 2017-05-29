<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{$BASE_URL}javascript/getCalendarDate.js"></script>
<div id="calendar" class="tabs-content" style="padding-top:15px;margin-top:0px;background:white">
    <div class="ink-form">
        <fieldset>
            <div class="control-group column-group gutters" style="margin:3%">
                <div class="control all-20 small-100 tiny-100">
                  <form id="calendar_form">
                    <label for="calendar">Pick a date:</label>
                    <input
                        id="calendar_picker"
                        name="calendar"
                        type="text"
                        class="ink-datepicker"
                        data-css-class="ink-calendar my-never-closing-datepicker"
                        data-format="Y-m-d"
                        data-shy="false"
                        data-auto-open="true"
                        data-show-clean="false"
                        data-show-close="false"/>
                    <input id="calendar_submit" class="ink-button" type="submit" value="Pick date"/>
                  </form>
                </div>
                <div  id="myEvents" class="push-center control all-80 small-100 tiny-100">
                    {if ($myEvents|@count) == 0}
                      <div align="center"><p> You have no events for this day </p> </div>
                    {else}
                      <table class="ink-table alternating" style="table-layout:fixed;word-wrap:break-word" data-page-size="5" data-pagination="#myTablePagination">
                          <tbody>
                            {foreach $myEvents as $e}
                              <tr>
                                  <td >
                                      <a href="{$BASE_URL}pages/event/EventPage.php?id={$invitedEvent.idEvent}">{$e.name}</a>
                                      <p class="fw-300">{$e.calendar_date-$e.calendar_time}</p>
                                      {$e.description}
                                  </td>
                              </tr>
                            {/foreach}
                          </tbody>
                      </table>
                    {/if}
                </div>
            </div>
        </fieldset>
    </div>
</div>
