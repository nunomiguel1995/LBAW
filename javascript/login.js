$(document).ready(function() {
  $('#loginform').submit(function(e) {
    e.preventDefault();
    $.ajax({
       type: "POST",
       url: '../../actions/user/login_action.php',
       data: $(this).serialize(),
       success: function(response)
       {
          if(response == "ok"){
			   $('#logDiv').load(document.URL +  ' #logDiv');
		  }else{
			  alert("Username or apssword are wrong!");
		  }
         
          
       }
   });
 });
});