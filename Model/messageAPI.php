<?php

/******insert message into message table in database */
function messageAPI_insert_Message($mesg,$sender_id,$receiver_id,$date){
    try{
        global $facebook_handle;
        if (empty($mesg) || empty($sender_id) || empty($receiver_id) || empty($date)) {
            error_log("message or sender_id or receiver_id is empty()");
            return false;
        }
        
        $n_mesg = mysqli_real_escape_string($facebook_handle, strip_tags($mesg));
        $n_date = mysqli_real_escape_string($facebook_handle, strip_tags($date));
       
        $n_sender_id = (int)$sender_id;
        $n_receiver_id = (int)$receiver_id;
    
    
        $query = sprintf(
            "INSERT INTO `message` (`mesg`,`sender_id`,`receiver_id`,`date`)
      VALUE ('%s',%d,%d,'%s')",
            $n_mesg,
            $n_sender_id,
            $n_receiver_id
            ,$n_date
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
function messageAPI_insert_new_Message($mesg,$sender_id,$receiver_id,$date){
    try{
        global $facebook_handle;
        if (empty($mesg) || empty($sender_id) || empty($receiver_id)) {
            error_log("message or sender_id or receiver_id is empty()");
            return false;
        }
        
        $n_mesg = mysqli_real_escape_string($facebook_handle, strip_tags($mesg));
        $n_date = mysqli_real_escape_string($facebook_handle, strip_tags($date));
       
        $n_sender_id = (int)$sender_id;
        $n_receiver_id = (int)$receiver_id;
    
    
        $query = sprintf(
            "INSERT INTO `new_message` (`mesg`,`sender_id`,`receiver_id`,`date`)
      VALUE ('%s',%d,%d,'%s')",
            $n_mesg,
            $n_sender_id,
            $n_receiver_id,
            $n_date
        );
    error_log($query);
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
/********Test if senderid and reciever id exist in new_message******************************************************* */
function messageAPI_if_is_a_new_message($sender_id,$receiver_id){
    try{
        global $facebook_handle;
        $n_sender_id = (int)$sender_id;
        $n_receiver_id = (int)$receiver_id;
        $query = sprintf("SELECT *  FROM `new_message` WHERE (sender_id = %d AND receiver_id = %d )",$n_receiver_id, $n_sender_id);
        
        $query_result = mysqli_query($facebook_handle, $query);
    
        if (!$query_result)
            return false;
            if($query_result->num_rows > 0 ){
                return true;
            }

    }catch(Exepetion $ex){
        error_log($ex->getMessage());
        return false;
    }
}
function messageAPI_select_number_of_new_messages($receiver_id){
    try{
        global $facebook_handle;
       
        $n_receiver_id = (int)$receiver_id;

        
    
        $query = sprintf("SELECT COUNT(*) n_n_messages  FROM `new_message` WHERE  receiver_id = %d ", $n_receiver_id);
        
        $query_result = mysqli_query($facebook_handle, $query);
    
        if (!$query_result)
            return null;
    
        $n_n_messages = 0;
        
        if($query_result->num_rows > 0 ){
            while($row = $query_result->fetch_assoc()) {
                $n_n_messages = $row['n_n_messages'];
            }
           
            mysqli_free_result($query_result);
            return $n_n_messages;
        }
    
    }catch(Exepetion $ex){
        error_log($ex->getMessage());
        return false;
    }
   
}
/*********************************************************************************** */


function messageAPI_select_number_of_new_messages_bysendrId_receiverId($sender_id,$receiver_id){
    try{
        global $facebook_handle;
       
        $n_sender_id = (int)$sender_id;
        $n_receiver_id = (int)$receiver_id;

        
    
        $query = sprintf("SELECT COUNT(*) n_n_messages  FROM `new_message` 
        WHERE sender_id= %d AND receiver_id = %d ",$n_sender_id, $n_receiver_id);
        
        $query_result = mysqli_query($facebook_handle, $query);
    
        if (!$query_result)
            return null;
    
        $n_n_messages = 0;
        
        if($query_result->num_rows > 0 ){
            while($row = $query_result->fetch_assoc()) {
                $n_n_messages = $row['n_n_messages'];
            }
           
            mysqli_free_result($query_result);
            return $n_n_messages;
        }
    
    }catch(Exepetion $ex){
        error_log($ex->getMessage());
        return false;
    }
   
}

?>