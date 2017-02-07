<?php
/**
 * Created by PhpStorm.
 * User: dmitr_000
 * Date: 07.02.2017
 * Time: 15:17
 */

if(!empty($_POST) && isset($_POST['text'])){
    $data = parseData($_POST);
    $allData = getDataFromFile("comments.txt");
    $allData[] = $data;
    saveData($allData, "comments.txt");
}
function parseData($request):array {
    $dataArray = [
    'login' => $_POST['Login'] ?? "",
    'comment' => $_POST['text'],
    ];

    return $dataArray;
}

function getDataFromFile(string $path):array {
    if (file_exists($path)){
        $items = deserialize(file_get_contents($path));
    }
    return $items ?? [];
}

function saveData(array $data, string $path){
        $rezult = file_put_contents($path,serialize($data));
}