<?php  
$tf_host='localhost';
$tf_dbname='facebook';
$tf_username = 'root';
$tf_password = '';

// Create connection
$facebook_handle = mysqli_connect($tf_host, $tf_username, $tf_password,$tf_dbname);

// Check connection
if (!$facebook_handle) {
    die("Connection failed: " . mysqli_connect_error());
}

//
mysqli_query($facebook_handle,"SET NAMES 'utf8'");

// close connection
function tinyf_db_close(){
    global $facebook_handle;
    mysqli_close($facebook_handle);
}

?>
