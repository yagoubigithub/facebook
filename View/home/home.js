var count_chat_box = 0;
$(document).ready(function () {
    
    var uid = 0;
    $.get('./controller/select_id.php',
        function (data) {
            if (data === "null") {

            } else {
                uid = Number(data);
                $.get('./controller/select_friends.php', {
                        uid: uid
                    },
                    function (data) {
                        var friends = JSON.parse(data);
                        var height = $('body').height() - 43;
                        $('#fixed_2').css('height', height);
                        $('#fixed_1').css('height', height);
                        for (var j = 0; j < 7; j++) {
                            for (i = 0; i < friends.length; i++) {
                                $('#fixed_2').append(' <!--CONTACTS Item-->' +
                                    '<a  class="contact">' +
                                    '<img src="./images/' + friends[i].url +
                                    '" alt="' + friends[i].firstname + '"' +
                                    'class="avatar" width="33" height="33" >' +
                                    '<div class="name-friend">' + friends[i].firstname + ' ' + friends[i].lastname + '</div>' +
                                    ' <div class="is_online_mark">' +
                                    '<span class="online"></span>' +
                                    '</div>' +
                                    '</a>');
                            }
                        }

                        $(".contact").click(function () {
                            $('.fixed-4').append(' <div class="chat-container"  id="chat_container_1">'+
                           ' <div class="chat-header" id="chat_header_1">'+
                                '<a href="#" class="chat-name-friend">'+$(this).children('.name-friend').html()+' </a>'+
                               '<a href="#" onclick="hideChatContainer(this)"><i class="fas fa-times"></i></a>'+
                            '</div>'+
                            '<div class="chat-body"  id="chat_body_1">'+
                                '<p>2it. Atque, ipsum perferendis!</p>'+
                            '</div>'+
                            '<div class="chat-footer" id="chat_footer_1">'+
                                '<textarea  cols="30" rows="2"></textarea>'+
                            '</div>'+
                
                        '</div>');
                           
                        });

                    });
            }

        });
    $('#btn_nav_friend_requests').click(function () {
        $('#collapse_friend_requests').toggle(100);
        $('#collapse_messenger').hide();
        $('#collapse_notifications').hide();
        $('#collapse_quick_help').hide();
        $('#collapse_log_out_card').hide();
    });
    $('#btn_nav_messenger').click(function () {
        $('#collapse_messenger').toggle(100);
        $('#collapse_friend_requests').hide();
        $('#collapse_notifications').hide();
        $('#collapse_quick_help').hide();
        $('#collapse_log_out_card').hide();
    });
    $('#btn_nav_notifications').click(function () {
        $('#collapse_notifications').toggle(100);
        $('#collapse_friend_requests').hide();
        $('#collapse_messenger').hide();
        $('#collapse_quick_help').hide();
        $('#collapse_log_out_card').hide();
    });
    $('#btn_nav_quick_help').click(function () {
        $('#collapse_quick_help').toggle(100);
        $('#collapse_friend_requests').hide();
        $('#collapse_messenger').hide();
        $('#collapse_notifications').hide();
        $('#collapse_log_out_card').hide();
    });
    $('#btn_nav_log_out_card').click(function () {
        $('#collapse_log_out_card').toggle(100);
        $('#collapse_quick_help').hide();;
        $('#collapse_friend_requests').hide();
        $('#collapse_messenger').hide();
        $('#collapse_notifications').hide();
    });
    $('#chat_header_1').click(function () {

        $('#chat_body_1').toggle();
        $('#chat_footer_1').toggle();
    });
    $('#chat_header_2').click(function () {

        $('#chat_body_2').toggle();
        $('#chat_footer_2').toggle();
    });

});



/***************Function********************************** */
function hideChatContainer(elemnt) {
    elemnt.parentElement.parentElement.style.display = 'none';
    count_chat_box--;
}

function toggleChatbodyAndChatFooter(elemnt) {

    elemnt.parentElement.getElementsByTagName('div')[1].style.display = 'none';
    elemnt.parentElement.getElementsByTagName('div')[2].style.display = 'none';
}