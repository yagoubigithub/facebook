$(document).ready(function () {
    $("#submit_login").click(function () {
        var email = $("#email_login").val();
        var password = $("#password_login").val();
        $.get('../../controller/login.php', {
                email: email,
                password: password
            },
            function (data) {
               if(data === "null"){
                   $(".input_login").css("border","4px solid rgba(255,0,0,0.5)");
               }else{
                   //login success
                   
               }

            });
    });
    $("#serch_email").click(function(){
        var email = $("#input_serch_email").val();
        $.get('../../controller/forget_password.php', {
            email: email,
        },
        function (data) {
           if(data === "null"){
               
           }else{
               //email success go to enter code
               $(".jumbotron").html(
                   '   <div class="card " >'+
                   '<div class="card-header">'+
                     '  <h2>Enter Security Code</h2>'+
                  ' </div>'+
                   '<div class="card-body">'+
                       '<p>Please check your email for a message with your code. Your code is 6 numbers long.</p>'+
                       '<input type="text" placeholder="Enter Code"  id="input_enter_code">'+
                   '</div>'+
                   '<div class="card-footer">'+
                       '<button type="button" id="enter_code">Continue</button>'+
                       '<button type="button">Cancel</button>'+
                   '</div>'+
       
       
               '</div>'
               );
               $("#enter_code").click(function(){
                   var code = $("#input_enter_code").val();
                   if(data   == code){
                       //got to new password
                       $(".jumbotron").html(
                        '   <div class="card " >'+
                        '<div class="card-header">'+
                          '  <h2>Choose a new password</h2>'+
                       ' </div>'+
                        '<div class="card-body">'+
                            '<p>A strong password is a combination of letters and punctuation marks. It must be at least 6 characters long.</p>'+
                            '<input type="text" placeholder="New Password"  id="input_new_password">'+
                        '</div>'+
                        '<div class="card-footer">'+
                            '<button type="button" id="new_password">Continue</button>'+
                            '<button type="button">Skip</button>'+
                        '</div>'+
            
            
                    '</div>'
                    );
                   }
               });


           }
          

        });

    });
});