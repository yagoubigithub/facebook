<?php
session_start();
if(isset($_SESSION['id'])){
    
    include_once('View/home/home.php');
}else{
    include_once('View/sign/sign.php');
}


?>