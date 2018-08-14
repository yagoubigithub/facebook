<?php
require_once('../Model/db.php');
require_once('../Model/messageAPI.php');

if (isset($_GET['sender_id']) && isset($_GET['receiver_id'])) {

    $sender_id = $_GET['sender_id'];
    $receiver_id = $_GET['receiver_id'];
    $is_new_messages_exist = messageAPI_if_is_a_new_message($sender_id, $receiver_id);
    if ($is_new_messages_exist) {
        $nb_mesg = messageAPI_select_number_of_new_messages_bysendrId_receiverId($sender_id, $receiver_id);
        echo $nb_mesg;
    } else {
        echo "0";
    }

}
?>