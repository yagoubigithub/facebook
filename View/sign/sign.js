$(document).ready(function () {
    $("#submit_login").click(function () {
        var email = $("#email_login").val();
        var password = $("#password_login").val();
        $.get('../../controller/login.php', {
                email: email,
                password: password
            },
            function (data) {
               alert(data);

            })
    })
});