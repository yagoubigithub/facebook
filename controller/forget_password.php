<?php
   require_once('../Model/db.php');
   require_once('../Model/usersAPI.php');
   if (isset($_GET['email']) ) {
    $user = usersAPI_f_select_user_by_email($_GET['email']);
    if ($user != null) {

    }else{
        
    }
   }


?>