<?php

// add user in database
function facebookf_add_user($firstname, $lastname, $email, $password, $birthday, $sex, $isadmin = 0)
{
    global $facebook_handle;
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password)
        || empty($birthday) || empty($sex)) {
        return false;
    }
    $n_email = mysqli_real_escape_string($facebook_handle, strip_tags($email));
    if (!filter_var($n_email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    $n_firstname = mysqli_real_escape_string($facebook_handle, strip_tags($firstname));
    $n_lastname = mysqli_real_escape_string($facebook_handle, strip_tags($lastname));
    $n_password = sha1(mysqli_real_escape_string($facebook_handle, strip_tags($password)));
    $n_sex = mysqli_real_escape_string($facebook_handle, strip_tags($sex));
    $n_birthday = mysqli_real_escape_string($facebook_handle, strip_tags($birthday));
    $n_isadmin = (int)$isadmin;


    $query = sprintf(
        "INSERT INTO `users` (`firstname`,`lastname`,`email`,`password`,`birthday`,`sex`,`isadmin`)
  VALUE ('%s','%s','%s','%s','%s','%s',%d)",
        $n_firstname,
        $n_lastname,
        $n_email,
        $n_password,
        $n_birthday,
        $n_sex,
        $n_isadmin
    );

    $query_result = mysqli_query($facebook_handle, $query);
    if (!$query_result)
        return false;
    return true;


}


?>