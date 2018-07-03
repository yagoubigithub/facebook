<?php
session_start();
if(isset($_SESSION['id'])){
    
    include_once('View/forget_password/forget_password.php');
}else{
    include_once('View/sign/sign.php');
}


?>