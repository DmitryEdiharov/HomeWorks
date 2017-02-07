<?php
/**
 * Created by PhpStorm.
 * User: dmitr_000
 * Date: 01.02.2017
 * Time: 11:28
 */
if (!empty($_POST)){
    foreach (getCommonWords($_POST['a'], $_POST['b']) as $item) {
        echo "<p>&item</p>";
    };
}



function getCommonWords(string $a, string $b): array{
    $separator = ' ';
    $array1 = explode($separator, $a);
    $array2 = explode($separator, $b);
    $rezult = [];
    for ($i = 0; $i<count($array1); $i++){
        if ( (in_array($array2, $array1[i])) && !isset($rezult[$array1[i]])){
            $rezult[] = $array1[i];
        }
    }

    return $rezult;
}