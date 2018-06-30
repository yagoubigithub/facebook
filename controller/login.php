<?php
require_once('../Model/db.php');
require_once('../Model/usersAPI.php');
if (isset($_GET['email']) && isset($_GET['password'])) {
    $user = usersAPI_f_select_user_by_email_and_password($_GET['email'], $_GET['password']);
    if ($user != null) {
        // create session to use in other pages
        $_SESSION['id'] = $user['id'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname'] = $user['lastname'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['sex'] = $user['sex'];
        $_SESSION['birthday'] = $user['birthday'];
        $_SESSION['isadmin'] = $user['isadmin'];

        //set email cookie
        $cookie_email_name = sha1('email_facebook');
        $cookie_email_value = $user['email'];
        setcookie($cookie_email_name, $cookie_email_value, time() + (86400 * 30), "/"); // 86400 = 1 day


        //set password cookie
        $cookie_password_name = sha1('password_facebook');
        $cookie_password_value = $user['password'];
        setcookie($cookie_password_name, $cookie_password_value, time() + (86400 * 30), "/"); // 86400 = 1 day

        echo json_encode($user);
    } else {
        echo "null";
    }
} else {
    echo "null";
}


?>