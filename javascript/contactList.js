window.addEventListener("load", function(){
}, true);


function deleteContactListUser(idList,idUser){
	var result = confirm("Are you sure you want to delete the User?");
	if (result) {
		var linkref = "../../actions/user/deleteContactList.php?idList=" + idList+"&idUser="+idUser;
		window.location.href = linkref;
	}
}

function addUser(idList,idUser){
  
  
  $.ajax({
       type: "GET",
       url: "../../actions/user/addContactList.php?idList=" + idList+"&idUser="+idUser,
       data: $(this).serialize(),
       success: function(response)
       {
		  $('#addingUsers').load(document.URL +  ' #addingUsers');
		 
		  
          
       }
   });
}

function reloadPage(){
	location.reload();
}
