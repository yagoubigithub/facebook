<?php
require_once('../Model/db.php');
require_once('../Model/messageAPI.php');

if (isset($_GET['sender_id']) && isset($_GET['receiver_id'])) {

    $sender_id = $_GET['sender_id'];
    $receiver_id = $_GET['receiver_id'];

    echo messageAPI_delete_the_new_Message($sender_id, $receiver_id);
   



}
?>