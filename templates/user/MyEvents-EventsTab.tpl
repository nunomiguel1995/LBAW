<div id="events" class="tabs-content" style="padding-top:15px;margin-top:0px;background:white">
    <div class="ink-grid my-sections">
        <div class="column-group" style="padding-left:50px">
            <section class="all-50 small-100 tiny-100" id="my-section-1" data-target="#my-menu">
                <h2>My events</h2>
                {if ($createdEvents|@count) == 0}
                  <div align="center">   <p> You have no upcoming event </p> </div>
                {/if}
                <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="3" data-pagination="#myTablePagination">
                  <tbody>
                    {foreach $createdEvents as $createdEvent}
                      <tr>
                        <td >
                          <a href="{$BASE_URL}pages/event/EventPage.php?id={$createdEvent.idEvent}">{$createdEvent.name}</a><br>
                          <span style="margin-left: 15px"> <i class="fa fa-location-arrow" aria-hidden="true"></i> {$createdEvent.location} </span><br>
                          <span style="margin-left: 15px"><i class="fa fa-calendar" aria-hidden="true"></i> {$createdEvent.calendar_date} {$createdEvent.calendar_time}</span>
                        </td>
                      </tr>
                    {/foreach}
                    </tbody>
                  </table>
            </section>
            <section class="all-50 small-100 tiny-100" id="my-section-2" data-target="#my-menu">
                <h2>Invited Events</h2>
                {if ($invitedEvents|@count) == 0}
                  <div align="center">   <p> You have no upcoming invited event </p> </div>
                {/if}
                <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="3" data-pagination="#myTablePagination">
                  <tbody>
                      {foreach $invitedEvents as $invitedEvent}
                        <tr>
                          <td >
                            <a href="{$BASE_URL}pages/event/EventPage.php?id={$invitedEvent.idEvent}">{$invitedEvent.name}</a><br>
                            <span style="margin-left: 15px"> <i class="fa fa-location-arrow" aria-hidden="true"></i> {$invitedEvent.location} </span><br>
                            <span style="margin-left: 15px"><i class="fa fa-calendar" aria-hidden="true"></i> {$invitedEvent.cal_date} {$invitedEvent.cal_time}</span>
                          </td>
                        </tr>
                      {/foreach}
                    </tbody>
                  </table>
            </section>
        </div>
    </div>

    <style>
    #my-menu .active {
        background: #333 !important;
        color: yellow;
    }
    </style>
</div>
