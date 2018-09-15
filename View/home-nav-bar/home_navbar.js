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
                                    let newMessagesHtml = "";
                                    let obj = JSON.parse(data);
                                    console.log(obj);
                                    //$("#demo").append("<pre>"+data+"</pre>");
                                    for (var i = 0; i < obj.length; i++) {
                                        newMessagesHtml += "<a  class='contact'>" +
                                        "<img src='./images/" + obj[i].url + "'"+
                                        "class='avatar' width='33' height='33' " +
                                        " alt='" + obj[i].firstname + "_images'>"+
                                        '<div class="name-friend">' + obj[i].firstname + ' ' + obj[i].lastname + '</div>' +
                                        
        
                                
                                       // ' <input type="hidden" class="id" value="' + obj[i].id + '">' +
                                        //' <input type="hidden"class="chatbox_id"  value="' + obj[i].chatbox_id + '">' +
                                        '</a>';


                                    }
                                    $("#new_message_card").html(newMessagesHtml);
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