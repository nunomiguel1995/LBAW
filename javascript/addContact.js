$(document).ready(function () {
    $(".addUser").click(function () {
      alert("oi");
        var parent = $(this).closest(".table-row");
        $.ajax({
            type: 'get',
            url: '../../actions/user/addContactList.php',
            data: 'idList=17&idUser=' + $(this).attr('id'),
            success: function () {
                          $(this).remove();
        }
      });
    });
});
