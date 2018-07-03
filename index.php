<?php
session_start();
if(isset($_SESSION['id'])){
    
    include_once('View/home/home.html');
}else{
    include_once('View/sign/sign.php');
}


?>