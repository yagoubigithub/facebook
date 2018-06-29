$(document).ready(function () {
    $("#submit_login").click(function () {
        var email = $("#email_login").val();
        var password = $("#password_login").val();
        $.post('../../controller/login.php', {
                email: email,
                password: password
            },
            function (data) {
                window.location="/../controller/login.php";

            })
    })
});