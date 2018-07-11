<?php
require_once('../Model/db.php');
require_once('../Model/usersAPI.php');


if (isset($_GET['id'])) {
    $uid = $_GET['id'];

    echo '{';
    echo "\"id\" : " .$uid . ",";
    echo "\"firstname\" : \"" . $_SESSION['firstname'] . "\",";
    echo "\"image_profile\" : \"" . $_SESSION['image_profile'] . "\",";
    echo "\"lastname\" : \"" . $_SESSION['lastname'] . "\"";
    echo '}';

}
?>