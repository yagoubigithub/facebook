<?php
require_once('../Model/db.php');
require_once('../Model/usersAPI.php');


if (isset($_GET['id'])) {
    $uid = $_GET['id'];
    $user = usersAPI_f_select_user_by_id($uid);
    if($user != null){
        echo '{';
            echo "\"id\" : " .$uid . ",";
            echo "\"firstname\" : \"" . $user['firstname'] . "\",";
            echo "\"image_profile\" : \"" . $user['url'] . "\",";
            echo "\"lastname\" : \"" . $user['lastname'] . "\"";
            echo '}';
    }else{
        echo 'null';
    }
    

}
?>