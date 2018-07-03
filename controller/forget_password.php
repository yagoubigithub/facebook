<?php
require_once('../Model/db.php');
require_once('../Model/usersAPI.php');
if (isset($_GET['email'])) {
    $user = usersAPI_f_select_user_by_email($_GET['email']);
    if ($user != null) {
        $code = rand(100000,999999);
        /* $to = $_GET['email'];
        $subject = "Facebook";

        $htmlContent = '<h1>Hello '.$user['firstname'].'</h1>,

        <p>We have received a request to reset your Facebook password.</p>
        
        <a href="#">Click here to change your password.</a>
        
        <p>You can also enter the password reset code:</p>
        <h1><mark>'.$code.'</mark></h1>
        <p><strong>You did not ask for this change ?</strong></p>
        <br>
        If you have not requested a new password,<a href="#"> tell us.</a>';
        
        // Set content-type header for sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // Additional headers
        $headers .= 'From: Facebook<facebook.com>' . "\r\n";
        $headers .= 'Cc: facebook.com' . "\r\n";
        $headers .= 'Bcc: facebook.com' . "\r\n";

        
        // Send email
        if (mail($to, $subject, $htmlContent, $headers)) :
            echo $code;
        else :
           echo 'null';
        endif;
        */
        echo 151515;
    } else {
        echo "null";
    }
} else {
    echo "null";
}


?>