window.addEventListener("load", function(){
}, true);

function onClickDelete(id){
	var result = confirm("Are you sure you want to delete the User?");
	console.log("ID: " + id);
	if (result) {
		var linkref = "../../actions/admin/deleteUser.php?id=" + id;
		window.location.href = linkref;
	}
}

function checkEditForm(){
	var matches = true;
	var min_length = true;

	var newpassword= document.forms["edit_form"]["newpassword"].value;
	if(newpassword != ""){
		var retype = document.forms["edit_form"]["newpasswordretype"].value;
		if(newpassword != retype) matches = false;
		if(newpassword.length <8) min_length = false;
	}

	var warnings;
	if(!min_length){
		warnings = "Password should have a minimum lenght of 8";
		updateWarnings(warnings);
	}else if(!matches){
		warnings = "Passwords are not matching";
		updateWarnings(warnings);
	}

	if(!min_length || !matches) return false;

	return true;
}

function updateWarnings(warning){
	 var p = document.createElement("p");
	 var node = document.createTextNode(warning);
	 p.appendChild(node);

	 var elem = document.getElementById("warnings");
	 if(elem.childNodes.length == 1){
		 var child = elem.childNodes[0];
		 elem.removeChild(child);
	 }
	 elem.appendChild(p);
}
