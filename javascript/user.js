window.addEventListener("load", function(){
}, true);

function onClickDelete(id){
	var result = confirm("Are you sure you want to delete the User?");
	console.log("ID: " + id);
	if (result) {
		var linkref = "../../database/deleteUser.php?id=" + id;
		window.location.href = linkref;
	}
}
