window.addEventListener("load", function(){
}, true);

function onClickAcceptEvent(id){
	console.log("ID: " + id);
		var linkref = "../../actions/admin/acceptNotification.php?id=" + id;
		window.location.href = linkref;
}
