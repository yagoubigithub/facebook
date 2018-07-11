<?php
require_once('../Model/db.php');
require_once('../Model/usersAPI.php');


if (isset($_GET['id'])) {
    $uid = $_GET['id'];
    $user = usersAPI_f_select_user_by_id($uid);
    if($user != null){
      echo json_encode($user);
    }else{
        echo 'null';
    }
}
?>