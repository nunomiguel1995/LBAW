$(document).ready(function() {
  $('#loginform').submit(function(e) {
    e.preventDefault();
    $.ajax({
       type: "POST",
       url: '../../actions/user/login_action.php',
       data: $(this).serialize(),
       success: function(response)
       {
		  if(response == "ok2"){
			  window.location.href = "../../pages/admin/adminDashboard.php";
		  }
          else if(response == "ok"){
			   $('#th').load(document.URL +  ' #th');
			   $('#logDiv').load(document.URL +  ' #logDiv');
			   $("body").html(response);
		  }else{
			  alert("Wrong credentials!");
			  
		  }
         
          
       }
   });
 });
});