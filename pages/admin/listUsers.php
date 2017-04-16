<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $users = getAllUsers();
  foreach ($users as $key => $value) { ?>
    <div class="user xlarge-70 large-70 medium-100 tiny-100 push-center">
      <div id="stacker-container" class="column-group">
        <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column">
          <?php $photo = getPhotoName($value["idUser"]); ?>
          <?php if(is_null($photo) ){ ?>
              <img src="../../images/users/user.png" width="50px" height="50px">
          <?php }else{ $path = "../../images/users/".$photo ?>
              <img src= <?php echo $path; ?> width="50px" height="50px">
          <?php }?>
        </div>
        <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
          <a href="#"> <?php echo $value[name] ?> </a>
        </div>
          <div class="xlarge-20 large-20 medium-20 tiny-100 stacker-column push-middle" align="right">
            <span class="ink-tooltip" data-tip-text="Edit User" data-tip-color="grey" style="padding:4%">
              <i class="fa fa-pencil-square-o" aria-hidden="true" ></i>
            </span>
            <span class="ink-tooltip" data-tip-text="Delete User" data-tip-color="grey" style="padding:4%" >
              <i class="fa fa-trash" aria-hidden="true" onclick="onClickDelete('<?=$value[idUser]?>')" ></i>
            </span>
          </div>
      </div>
    </div>

  <?php } ?>
