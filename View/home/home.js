$(document).ready(function () {
    var uid=0;
    $.get('./controller/select_id.php',
    function (data) {
       if(data === "null"){
           
       }else{
          uid = Number(data);   
          $.get('./controller/select_friends.php',{
              uid:uid
          },
          function (data) {
           var friends=JSON.parse(data);
           var height=$('body').height() - 43;
           $('#fixed_2').css('height',height);
           alert(friends);
           for(i=0;i<friends.length;i++) {
               $('#fixed_2').append(' <!--CONTACTS Item-->'+
               '<a href="#" class="contact">'+
                   '<img src="./images/'+friends[i].url+
                   '" alt="'+friends[i].firstname+'"'+
                    'class="avatar" width="33" height="33" >'+
                   '<div class="name-friend">'+friends[i].firstname+' '+friends[i].lastname+'</div>'+
                   '<span class="time">11m</span>'+
              '</a>');
           }
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
   
});