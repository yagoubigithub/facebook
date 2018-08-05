$(document).ready(function(){
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
                                    ' <input type="hidden" value="'+friends[i].id+'">' +
                                    '</a>');
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
                                    ' <input type="hidden" value="'+$(this).children('input').val()+'">' +
                                '</div>'+
                            
                            '</div>');
                               
                            });
                        

                       

                    });
            }

        });
});