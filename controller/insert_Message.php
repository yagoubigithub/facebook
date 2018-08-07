<?php
require_once('../Model/db.php');
require_once('../Model/messageAPI.php');

if (isset($_POST['mesg']) && isset($_POST['sender_id']) && isset($_POST['receiver_id'])) {

    $sender_id = $_POST['sender_id'];
    $receiver_id = $_POST['receiver_id'];
    $mesg = $_POST['mesg'];
    $date = date('Y-m-d H:i:s');

    $is_messages = messageAPI_insert_Message($mesg, $sender_id, $receiver_id,$date);
    $is_new_message = messageAPI_insert_new_Message($mesg, $sender_id, $receiver_id,$date);
    if ($is_messages && $is_new_message) {
        $messages = messageAPI_select_all_messages($sender_id, $receiver_id);
        if ($messages == null)
            echo 'null';
        else {
            echo json_encode($messages);
        }
    } else {
        echo 'null';
    }


}
?>