<?php
require_once('../Model/db.php');
require_once('../Model/usersAPI.php');

if (isset($_GET['uid'])) {
    $uid = $_GET['uid'];
    $friends = usersAPI_f_select_friends_by_user_id($uid);
    if ($friends == null)
        echo 'null';
    else{
        echo json_encode($friends);
    }

}
?>