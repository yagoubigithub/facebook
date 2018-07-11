<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['firstname'])
    && isset($_SESSION['lastname']) && isset($_SESSION['email'])) {

    echo '{';
    echo "\"id\" : " . $_SESSION['id'] . ",";
    echo "\"firstname\" : \"" . $_SESSION['firstname'] . "\",";
    echo "\"lastname\" : \"" . $_SESSION['lastname'] . "\"";
    echo '}';

}
?>