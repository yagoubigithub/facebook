$(document).ready(function(){
    $.get('./controller/select_id.php',
    function (data) {
        if (data === "null") {

        } else {
            uid = Number(data);
        }
        });
});