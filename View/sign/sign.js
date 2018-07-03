$(document).ready(function () {
    $("#submit_login").click(function () {
        var email = $("#email_login").val();
        var password = $("#password_login").val();
        $.get('./controller/login.php', {
                email: email,
                password: password
            },
            function (data) {
               if(data === "null"){
                   $(".input_login").css("border","4px solid rgba(255,0,0,0.5)");
               }else{
                   //login success
                   alert(data);
                   window.location="./index.php";
               }

            })
    })
});