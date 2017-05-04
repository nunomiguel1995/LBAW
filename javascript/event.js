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
	post.children[2].style.display = "none";
	post.children[3].style.display = "inline";
	post.children[4].style.display = "inline";
}

function closeCommentClick(id){
	var idpost = "post" + id;
	var post = document.getElementById(idpost);
	post.children[2].style.display = "inline";
	post.children[3].style.display = "none";
	post.children[4].style.display = "none";
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

window.onload = changeToPost();
