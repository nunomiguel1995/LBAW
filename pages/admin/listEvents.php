<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/events.php');

  $events = getAllEvents();
  foreach ($events as $key => $value) { ?>
    <tr>
      <td >
        <span class="ink-tooltip push-right" data-tip-text="Delete" data-tip-color="grey">
          <i class="fa fa-times" aria-hidden="true" onclick="onClickDeleteEvent('<?=$value[idEvent]?>')"></i>
        </span><br>
        <a href="#"><?php echo $value['name'];?></a>
        <h6 class="fw-300"><?echo $value['calendar_date']; echo " "; echo $value['calendar_time'];?></h6>
        <p> <?php echo $value['description'];?> </p>
      </td>
    </tr>
  <?php } ?>
