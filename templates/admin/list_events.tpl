{foreach $events as $event}

  <tr>
    <td >
      <span class="ink-tooltip push-right" data-tip-text="Delete" data-tip-color="grey">
        <i class="fa fa-times" aria-hidden="true" onclick="onClickDeleteEvent('{$event.idEvent}')"></i>
      </span><br>
      <a href="#">{$event.name}</a>
      <h6 class="fw-300">{$event.calendar_date} {$event.calendar_time}</h6>
      <p> {event.description} </p>
    </td>
  </tr>

{/foreach}
