<?php
if(!empty($_POST)){
    $data = parseData($_POST);
    $allData = getDataFromFile("comments.txt");
    $allData[] = $data;
    var_dump(saveData($allData, "comments.txt"));
}

function parseData($request){
    $dataArray = [
        /*  в форме мы указали для инпутов конкретные имена, которые мы ожидаем получить
         * ниже мы получаем из массива $request значения по ключам, которые указаны в именах инпутов
         * и заносим их в массив под нужным уже нам ключам.
         * */
        'name' => $request['name'] ?? '',
        'email' => $request['email'] ?? '',
        'comment' => $request['text'] ?? ''
    ];
}


function getDataFromFile(string $path):array {
    if (file_exists($path)){
        $items = deserialize(file_get_contents($path));
    }
    return $items ?? [];
}

function saveData(array $data, string $path):bool{
    if (file_exists($path)){
        file_put_contents($path,serialize($data));
        return true;
    }
    return false;
}
