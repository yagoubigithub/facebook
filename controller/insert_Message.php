<?php
require_once('../Model/db.php');
require_once('../Model/messageAPI.php');

if (isset($_POST['mesg']) && isset($_POST['sender_id']) && isset($_POST['receiver_id'])) {

    $sender_id = $_GET['sender_id'];
    $receiver_id = $_GET['receiver_id'];

    $messages = messageAPI_insert_Message($mesg,$sender_id,$receiver_id);
    if ($messages){
        echo "true";
    }
      

}
?>