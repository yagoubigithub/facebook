<?php 
session_start();
try{
   unset($_SESSION['id']) ;
  unset($_SESSION['firstname']) ;
  unset($_SESSION['lastname']) ;

  unset($_SESSION['email']) ;
  unset($_SESSION['sex']) ;
  unset($_SESSION['birthday']) ;
  unset($_SESSION['image_profile']) ;
  unset($_SESSION['isadmin']) ; 
}catch(Exeption $ex){
    error_log($ex->getMessage());
}
  

?>