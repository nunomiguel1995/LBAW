window.addEventListener("load", function(){
}, true);

function onClickDeleteEvent(id){
	var result = confirm("Are you sure you want to delete the Event?");
	console.log("ID: " + id);
	if (result) {
		var linkref = "../../database/deleteEvent.php?id=" + id;
		window.location.href = linkref;
	}
}
