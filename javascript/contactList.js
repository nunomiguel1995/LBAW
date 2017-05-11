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
  var linkref = "../../actions/user/addContactList.php?idList=" + idList+"&idUser="+idUser;
  window.location.href = linkref;
}

$(function() {
    $('#myModalTrigger2').click();
});
