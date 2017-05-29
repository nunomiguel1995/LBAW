{include file = 'common/header.tpl'}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{$BASE_URL}javascript/addevent.js"></script>

<div class="ink-grid" style="margin-bottom:5%" >
      <div class="formulario all-80 small-100 tiny-100 push-center">
        <div class="column-group push-center">
          <div class="xlarge-70 large-70 medium-100 tiny-100">
          	<form name="edit_form" class="ink-form ink-formvalidator" method="post" action="../../actions/events/edit_event.php?id={$event.idEvent}" enctype="multipart/form-data"  onsubmit="">
              <h5 align="center"> Edit Event Information</h5>
               <div class="profilepic all-80 push-center">
                 <figure class = "ink-image">
                   <img id="eventphoto" src="{$photo}" alt="user image">
                 </figure>
                 <input type="file" id="filechoice" name="image" accept="image/*"  />
               </div>

               <div class="control-group">
                    <label for="eventName">Name</label>
                    <div class="control">
                        <input id="eventName" name="eventName" type="text"  data-rules="required|text[true,false]" value="{$event.name}">
                    </div>
              </div>

              <div class="control-group">
                   <label for="description">Description</label>
                   <div class="control">
                       <textarea id="description" name ="description" rows="4" cols="50"></textarea>
                   </div>
             </div>

             <div class="control-group">
                  <label for="location">Location</label>
                  <div class="control">
                      <input type="hidden" name = "idLocation" value = "{$location.idLocation}" />
                      <input id="location" name="location" type="text"  data-rules="required|text[true,false]" rows="4" cols="50" value="{$location.address}">
                  </div>
            </div>

            <div class="control-group">
              <label for="date" align="left">Date</label><br>
                <div id="stacker-container" class="column-group">
                  <div class="xlarge-40 large-40 medium-40 tiny-100 stacker-column" align="left">
                      <input id="eventdate" name="eventdate" type="text" class="ink-datepicker" data-format="Y-m-d" value={$event.calendar_date} />
                  </div>
                  <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column" align="left">
                    <input id="eventhour" name="eventhour" type="time" name="timePicker" value={$event.calendar_time} />
                  </div>
                </div>
              </div>

              <div align="center">
                <input type="submit" name="sub" value="Submit" class="ink-button success blue" />
              </div>
          	</form>
          </div>
        </div>
      </div>
  </div>

{include file = 'common/footer.tpl'}
