$(document).ready(function () {
    $(".dropdown-content").hide();
    $.get('./controller/select_id.php',
        function (data) {
            if (data === "null") {

            } else {
                uid = Number(data);

                setInterval(function () {
                    $.get('./controller/select_number_new_message.php', {

                            uid: uid
                        },
                        function (data) {
                            if (data != '0') {
                                $("#new_messgae_badge").html(data);
                                $("#new_messgae_badge").addClass('nav_badge');
                                $.get('./controller/select_new_message.php', {
                                    uid: uid
                                }, function (data) {
                                    console.log(data);
                                    $("#new_message_card").html(data);
                                });
                            } else {
                                $("#new_messgae_badge").removeClass("nav_badge");
                            }


                        });
                }, 2000);

            }
        });

    $("#logout_btn").click(function () {
        $.get('./controller/logout.php',
            function (data) {
                if (data != 'null') {
                    window.location = "/.";
                }


            });
    });
});