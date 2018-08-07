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
                                ' <input type="hidden" class="id" value="' + friends[i].id + '">' +
                                ' <input type="hidden"class="chatbox_id"  value="' + friends[i].chatbox_id + '">' +
                                '</a>');
                        }


                        $(".contact").click(function () {

                            if (chatbox_count != 3 && chatbox_id_array.indexOf($(this).children('.chatbox_id').val()) == -1) {
                                $('.fixed-4').append(' <div class="chat-container"  id="chat_container_' + $(this).children('.chatbox_id').val() + '">' +
                                    ' <div class="chat-header" id="chat_header_' + $(this).children('.chatbox_id').val() + '">' +
                                    '<a href="#" class="chat-name-friend">' + $(this).children('.name-friend').html() + ' </a>' +
                                    '<a href="#" onclick="hideChatContainer(this,\'' + $(this).children('.chatbox_id').val() + '\')"><i class="fas fa-times"></i></a>' +
                                    '</div>' +
                                    '<div class="chat-body"  id="chat_body_' + $(this).children('.chatbox_id').val() + '">' +
                                    '</div>' +
                                    '<div class="chat-footer" id="chat_footer_' + $(this).children('.chatbox_id').val() + '">' +
                                    '<textarea  cols="30"  rows="2" id="' + $(this).children('.chatbox_id').val() + '_textarea">'+
                                    '</textarea>' +
                                    ' <input type="hidden" value="' + $(this).children('.id').val() + '">' +
                                    '</div>' +

                                    '</div>');
                                chatbox_count++;
                                var textarea_id=$(this).children('.chatbox_id').val() + "_textarea";
                                var receiver_id = $(this).children('.id').val();
                                var sender_id = uid;

                                chatbox_id_array[chatbox_count] = $(this).children('.chatbox_id').val();
                                $("#" + textarea_id).keypress(function (e) {
                                    //send message

                                    var code = e.keyCode || e.which;
                                    if(code == 13) { //Enter keycode
                                        $(this).sendMessage($(this),$(this).val(),sender_id,receiver_id);
                                        $(this).val("");
                                    }
                                });
                            }

                        });
                        (function( $ ){
                            $.fn.sendMessage = function(textarea_id,mesg,sender_id,receiver_id) {
                                $.post('./controller/insert_Message.php', {
                                    mesg:mesg,
                                    sender_id:sender_id,
                                    receiver_id:receiver_id
                                },
                                function (data) {
                                 if(data != 'null'){
                                     var message = JSON.parse(data);
                                     for(var i = 0;i<message.length;i++){
                                         if(message[i].sender_id == sender_id){
                                            textarea_id.parent().parent().children(".chat-body").append("<br><div class='message_container m_left'><span class='message_left'>"+message[i].mesg+"</span></div>");
                                         }else{
                                            textarea_id.parent().parent().children(".chat-body").append("<br><div class='message_container m_right'><span class='message_right'>"+message[i].mesg+"</span></div>");
                                         }
                                        
                                     }
                                 }
                    
                                });

                               return this;
                            }; 
                         })( jQuery );




                    });
            }

        });
});