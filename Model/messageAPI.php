<?php

/******insert message into message table in database */
function messageAPI_insert_Message($mesg,$sender_id,$receiver_id){
    try{
        global $facebook_handle;
        if (empty($mesg) || empty($sender_id) || empty($receiver_id)) {
            error_log("message or sender_id or receiver_id is empty()");
            return false;
        }
        
        $n_mesg = mysqli_real_escape_string($facebook_handle, strip_tags($mesg));
       
        $n_sender_id = (int)$sender_id;
        $n_receiver_id = (int)$receiver_id;
    
    
        $query = sprintf(
            "INSERT INTO `message` (`mesg`,`sender_id`,`receiver_id`)
      VALUE ('%s',%d,%d)",
            $n_mesg,
            $n_sender_id,
            $n_receiver_id
        );
    
        $query_result = mysqli_query($facebook_handle, $query);
        if (!$query_result)
            return false;
        return true;
    
    }catch(Exepetion $ex){
        error_log($ex->getMessage());
        return false;
    }
   

}

/******insert new message into new_message table in database */
function messageAPI_insert_new_Message($mesg,$sender_id,$receiver_id){
    try{
        global $facebook_handle;
        if (empty($mesg) || empty($sender_id) || empty($receiver_id)) {
            error_log("message or sender_id or receiver_id is empty()");
            return false;
        }
        
        $n_mesg = mysqli_real_escape_string($facebook_handle, strip_tags($mesg));
       
        $n_sender_id = (int)$sender_id;
        $n_receiver_id = (int)$receiver_id;
    
    
        $query = sprintf(
            "INSERT INTO `new_message` (`mesg`,`sender_id`,`receiver_id`)
      VALUE ('%s',%d,%d)",
            $n_mesg,
            $n_sender_id,
            $n_receiver_id
        );
    
        $query_result = mysqli_query($facebook_handle, $query);
        if (!$query_result)
            return false;
        return true;
    
    }catch(Exepetion $ex){
        error_log($ex->getMessage());
        return false;
    }
   
}
/******delete the  new message into new_message table in database */
function messageAPI_delete_the_new_Message($sender_id,$receiver_id){
    try{
        global $facebook_handle;
        if (empty($sender_id) || empty($receiver_id)) {
            error_log("sender_id or receiver_id is empty()");
            return false;
        }
       
        $n_sender_id = (int)$sender_id;
        $n_receiver_id = (int)$receiver_id;
    
    
        $query = sprintf(
            "DELETE FROM `new_message` WHERE `sender_id`=%d  AND `receiver_id`=%d",
            $n_sender_id,
            $n_receiver_id
        );
    
        $query_result = mysqli_query($facebook_handle, $query);
        if (!$query_result)
            return false;
        return true;
    
    }catch(Exepetion $ex){
        error_log($ex->getMessage());
        return false;
    }
   
}

function messageAPI_select_all_messages($sender_id,$receiver_id){
    try{
        global $facebook_handle;
        $n_sender_id = (int)$sender_id;
        $n_receiver_id = (int)$receiver_id;

        
    
        $query = sprintf("SELECT *  FROM `message` WHERE (sender_id = %d AND receiver_id = %d ) OR
        (sender_id = %d AND receiver_id = %d)", $n_sender_id,$n_receiver_id,$n_receiver_id,$n_sender_id);
        error_log($query);
        $query_result = mysqli_query($facebook_handle, $query);
    
        if (!$query_result)
            return null;
    
        $messages = array();
        
        if($query_result->num_rows > 0 ){
            while($row = $query_result->fetch_assoc()) {
                array_push($messages,$row);
            }
           
            mysqli_free_result($query_result);
            return $messages;
        }
    
    }catch(Exepetion $ex){
        error_log($ex->getMessage());
        return false;
    }
   
}
?>