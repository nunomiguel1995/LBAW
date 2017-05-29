window.addEventListener("load", function(){
}, true);


function deleteMessage(idMessage){
	var result = confirm("Are you sure you want to delete this message?");
	if (result) {
		var linkref = "../../actions/user/deleteMessage.php?id=" + idMessage;
		window.location.href = linkref;
	}
}

$(document).ready(function() {
 $('#findingMessages').submit(function(e) {
	e.preventDefault();
    $.ajax({
       type: "POST",
       url: '../../pages/user/Messages.php',
       data: $(this).serialize(),
       success: function(result)
       {
		
		 searchResult = $(result).find("#creatingMessages");
		 
			var searching = document.URL + ' #creatingMessages';
			console.log(searching);
		 $('#creatingMessages').html(searchResult);
         
          
       }
   });
   
 });
});


