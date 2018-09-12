<?php
require_once('../Model/db.php');
require_once('../Model/messageAPI.php');

if (isset($_GET['uid'])) {

   
    $uid = $_GET['uid'];
    $messages=false;
    $messages = messageAPI_select_all_new_messages( $uid);
    if (!$messages)
        echo 'null';
    else {
        echo json_encode($messages);
    }

}
?>