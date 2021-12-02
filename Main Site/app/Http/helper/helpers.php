<?php


function statusArray()
{
    $arr = [
        '0'=>'Not Activated',
        '1'=>'Activated',
    ];
    return $arr ;
}


function userRoles()
{
    $arr =
        ['user'=>'User','admin'=>'Admin'];
    return $arr;
}

/**
 * Upload Path
 * @return string
 */
function uploadpath()
{
    return 'photos';
}

/**
 * Get Image
 * @param $filename
 * @return string
 */
function getimg($filename,$web = null)
{
    return '/storage/'.$filename;
}

/**
 * Upload an image
 * @param $img
 */
function uploader($request,$img_name)
{
    $path = \Storage::disk('public')->putFile(uploadpath(), $request->file($img_name));
    return $path;
}
