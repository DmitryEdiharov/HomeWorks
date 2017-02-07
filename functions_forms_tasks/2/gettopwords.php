<?php
/**
 * Created by PhpStorm.
 * User: dmitr_000
 * Date: 01.02.2017
 * Time: 12:56
 */

function getTopWords(string $str, string $separator){
    $array =explode($separator, $str);
    $rezult = [];

    foreach ($array as $key => $item){
        $rezult[] = [$item => strlen($item)];
    }
    asrort($rezult);
    $r = array_slice($rezult,0,3);

    return $r;

}