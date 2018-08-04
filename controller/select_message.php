<?php
require_once('../Model/db.php');
require_once('../Model/messageAPI.php');

if (isset($_GET['sender_id']) && isset($_GET['receiver_id'])) {

    $sender_id = $_GET['sender_id'];
    $receiver_id = $_GET['receiver_id'];

    $messages = messageAPI_select_all_messages($sender_id,$receiver_id);
    if ($messages == null)
        echo 'null';
    else{
        echo json_encode($messages);
    }

}
?>