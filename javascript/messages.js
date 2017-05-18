window.addEventListener("load", function(){
}, true);


function deleteMessage(idMessage){
	var result = confirm("Are you sure you want to delete this message?");
	if (result) {
		var linkref = "../../actions/user/deleteMessage.php?id=" + idMessage;
		window.location.href = linkref;
	}
}
