$(document).ready(function () {
  //your code here

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#userphoto').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}



$("#filechoice").change(function(){
    readURL(this);
});

});
