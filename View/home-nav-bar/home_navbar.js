$(document).ready(function(){
    $.get('./controller/select_id.php',
    function (data) {
        if (data === "null") {

        } else {
            uid = Number(data);

              
            $.get('./controller/select_number_new_message.php', {
               
                receiver_id: uid
            },
            function (data) {
                if (data != 'null') {
                    var number_of_message = JSON.parse(data);

                }
                

            });
        }
        });
});