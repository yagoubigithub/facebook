$(document).ready(function(){
    $.get('./controller/select_id.php',
    function (data) {
        if (data === "null") {

        } else {
            uid = Number(data);

              
            $.get('./controller/select_number_new_message.php', {
               
                uid: uid
            },
            function (data) {
                if (data != '0') {
                    $("#new_messgae_badge").html(data);
                }
                

            });
        }
        });
});