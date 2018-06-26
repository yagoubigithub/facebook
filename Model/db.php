<?php  
$tf_host='localhost';
$tf_dbname='facebook';
$tf_username = 'root';
$tf_password = '';

// Create connection
$tf_handle = mysqli_connect($tf_host, $tf_username, $tf_password,$tf_dbname);

// Check connection
if (!$tf_handle) {
    die("Connection failed: " . mysqli_connect_error());
}

//
mysqli_query($tf_handle,"SET NAMES 'utf8'");

// close connection
function tinyf_db_close(){
    global $tf_handle;
    mysqli_close($tf_handle);
}

?>
