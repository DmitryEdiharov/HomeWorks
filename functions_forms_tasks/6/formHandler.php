<?php
/**
 * Created by PhpStorm.
 * User: dmitr_000
 * Date: 28.01.2017
 * Time: 14:23
 */
if(!empty($_FILES)){
    //$data = parseData($_FILES);
    $rezult = saveData($_FILES);
}

function saveData($data) : bool{
    $uploadDir = __DIR__ . DIRECTORY_SEPARATOR .DIRECTORY_SEPARATOR;
    $uploadFile = $uploadDir.basename($_FILES['image']['name']);

    $rezult = move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile);

    return $rezult;
}