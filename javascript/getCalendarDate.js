$(document).ready(function() {
  $('#calendar_form').submit(function(e) {
    var calendar_date = $('#calendar_picker').val();

    $.ajax({
       type: 'GET',
       url: '../../pages/user/MyEvents.php?calendar=' + calendar_date,
       success: function(success){
         searchResult = $(success).find("#myEvents");
         $('#myEvents').html(searchResult);
       }
    });
    return false;
  });
});
