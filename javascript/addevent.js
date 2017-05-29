function addToArray(nelement,nel2){
	//String nel = nelement + "N";
    document.getElementById(nelement).hidden = true;
	document.getElementById(nel2).hidden = false;
	//document.getElementsByName(nel2).checked = true;
	
	document.getElementsByName(nel2)[0].checked = false;
	
	
	//document.getElementById(nel).hidden = false;
        
	
	  
}

 function addToArray2(nelement,nel2){
	//String nel = nelement + "N";
    document.getElementById(nelement).hidden = true;
	document.getElementById(nel2).hidden = false;
	
	
	//document.getElementById(nel).hidden = false;
        
	
	  
}

function chooseFile(){
	document.getElementById('get_file').onclick = function() {
		document.getElementById('filechoice').click();
	};
}


$(document).ready(function () {
  //your code here

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#eventphoto').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}



$("#filechoice").change(function(){
    readURL(this);
});


 


});