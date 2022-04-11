$(document).ready(function () {
    $('button[del]').click(function () {
        var id = $(this).data('del');
    var answer = confirm("Delete confirm ID="+id);
        if(answer){

            location.href="delete.php?del="+id;
        }
    });
});