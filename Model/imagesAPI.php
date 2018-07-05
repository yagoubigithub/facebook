<?php
// images API
// get users information by his email if email invalid or empty return NULL
function imagesAPI_f_select_image_by_user_id($uid)
{
    global $facebook_handle;
    $id  = (int)$uid;
    if ($id  == 0)
        return null;
    

    $query = sprintf("SELECT * FROM `images` WHERE `id_user` = %d", $id);
    $query_result = mysqli_query($facebook_handle, $query);

    if (!$query_result)
        return null;

    $image = null;
    $image = mysqli_fetch_assoc($query_result);


    return $image;


}

?>