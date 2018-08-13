<?php
require_once('../Model/db.php');
require_once('../Model/messageAPI.php');
if(isset($_GET['uid'])){
    echo messageAPI_select_number_of_new_messages($_GET['uid']);
}else{
    echo '0';
}

?>