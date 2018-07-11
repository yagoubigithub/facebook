<?php

// add user in database
function usersAPI_f__add_user($firstname, $lastname, $email, $password, $birthday, $sex, $isadmin = 0)
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

// get users information by his email if email invalid or empty return NULL
function usersAPI_f_select_user_by_email($email)
{
    global $facebook_handle;
    if (empty($email))
        return null;
    $n_email = mysqli_real_escape_string($facebook_handle, strip_tags($email));
    if (!filter_var($n_email, FILTER_VALIDATE_EMAIL))
        return null;

    $query = sprintf("SELECT * 
    FROM `users` u
    JOIN `images` i
    ON u.id = i.id_user AND i.isprofile = 1
     WHERE `email` = '%s'", $n_email);
    $query_result = mysqli_query($facebook_handle, $query);

    if (!$query_result)
        return null;

    $user = null;
    $user = mysqli_fetch_assoc($query_result);


    return $user;


}
/*get users information by his email and password  if email or the password 
invalid or empty or the password not belong in the email return NULL*/
function usersAPI_f_select_user_by_email_and_password($email, $password)
{
    global $facebook_handle;
    if (empty($email) || empty($password))
        return null;
    $user = usersAPI_f_select_user_by_email($email);

    if ($user == null || $user['password'] != sha1($password)) {
        return null;
    }
    return $user;
}




function usersAPI_f_select_friends_by_user_id($uid)
{
    global $facebook_handle;
    $id = (int)$uid;
    $query = sprintf("SELECT u.id,i.url,u.firstname 
    FROM `users` u 
    JOIN `friends` f
    ON f.id_friend = u.id
    JOIN `images` i
    ON i.id_user = f.id_friend
    WHERE f.id_user = %d
    LIMIT 10", $id);
    $query_result = mysqli_query($facebook_handle, $query);

    if (!$query_result)
        return null;
    if($query_result->num_rows > 0 ){
        $friends = mysqli_fetch_assoc($query_result);
        
        
        return $friends;
    }
    return null;   
}

function usersAPI_f_select_user_by_id($uid){
    global $facebook_handle;
    $id = (int)$uid;
    $query = sprintf("SELECT * 
    FROM `users` u 
    JOIN `images` i
    ON i.id_user = u.id AND i.isprofile = 1
    WHERE u.id = %d", $id);
    $query_result = mysqli_query($facebook_handle, $query);

    if (!$query_result)
        return null;
    if($query_result->num_rows > 0 ){
        $user = mysqli_fetch_assoc($query_result);
        
        
        return $user;
    }
    return null;
}

?>