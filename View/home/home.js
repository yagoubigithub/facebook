var chatbox_count = 0;
$(document).ready(function () {
    
  
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
    chatbox_count--;
}

function toggleChatbodyAndChatFooter(elemnt) {

    elemnt.parentElement.getElementsByTagName('div')[1].style.display = 'none';
    elemnt.parentElement.getElementsByTagName('div')[2].style.display = 'none';
}