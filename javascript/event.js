window.addEventListener("load", function(){
}, true);

function onClickDeleteEvent(id){
	var result = confirm("Are you sure you want to delete the Event?");
	console.log("ID: " + id);
	if (result) {
		var linkref = "../../actions/admin/deleteEvent.php?id=" + id;
		window.location.href = linkref;
	}
}

function addCommentClick(id){
	var idpost = "post" + id;
	var post = document.getElementById(idpost);
	var n_children = post.childElementCount;
	
	if(n_children == 6)
		var add = 1;
	else
		var add = 0;
	
	post.children[2 + add].style.display = "none";
	post.children[3 + add].style.display = "inline";
	post.children[4 + add].style.display = "inline";
}

function showPollForm(){
	document.getElementById("post_form").style.display = "none";
	document.getElementById("poll_creator").style.display = "inline";
	return false;
}

function chooseFile(){
	document.getElementById('get_file').onclick = function() {
		document.getElementById('input_file').click();
	};
}

function showPost(){
	document.getElementById("poll_creator").style.display = "none";
	document.getElementById("post_form").style.display = "flex";
	return false;
}

function addPollOption(){
	var form_element = document.getElementById("poll_form");
	var n_children = form_element.childElementCount;
	var clone = form_element.children[3].cloneNode(true);
	clone.children[0].id = "option" + (n_children - 7);
	clone.children[0].name = "option" + (n_children - 7);
	clone.children[0].placeholder = "Option #" + (n_children - 7);
	clone.children[0].value = "";
	clone.children[1].setAttribute('onclick', "removePollOption(" + (n_children - 7) + ")");
	form_element.insertBefore(clone, form_element.children[n_children - 5]);
	
	document.getElementById("number_options").value = (n_children - 7);
}

function removePollOption(n){
	var options = document.getElementsByClassName("poll_option");
	if(options.length == 1)
		return;
	
	var form_element = document.getElementById("poll_form");
	var to_remove = form_element.children[n + 2];
	form_element.removeChild(to_remove);
	
	var options = document.getElementsByClassName("poll_option");
	
	for(var i = 0; i < options.length; i++){
		options[i].children[0].id = "option" + (i + 1);
		options[i].children[0].name = "option" + (i + 1);
		options[i].children[0].placeholder = "Option #" + (i + 1);
		options[i].children[1].setAttribute('onclick', "removePollOption(" + (i + 1) + ")");
	}
	
	document.getElementById("number_options").value = options.length;
}

function closeCommentClick(id){
	var idpost = "post" + id;
	var post = document.getElementById(idpost);
	post.children[3].style.display = "inline";
	post.children[4].style.display = "none";
	post.children[5].style.display = "none";
}

function changeToPost(){
	setTimeout(function(){
		var post_id = getParameterByName("post");
		if(post_id != null){
			console.log(post_id);
			document.getElementById("posts_button").click();
			document.getElementById("post" + post_id).scrollIntoView();
		}
	}, 1000);
	
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function AlertIt(link) {
	var answer = confirm ("Please click on OK to continue.")
	if (answer)
	window.location=link;
}



window.onload = changeToPost();
