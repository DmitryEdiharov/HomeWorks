<?php
/**
 * Created by PhpStorm.
 * User: dmitr_000
 * Date: 01.02.2017
 * Time: 13:12
 */
$nSymbols = 0;
if(!empty($_POST['N'])){
$nSymbols = (int)$_POST['N'];
echo $nSymbols;
deleteWords($nSymbols, "textfile.txt");
}
function deleteWords(int $N, string $path){
    if (file_exists($path)){
        $text = file_get_contents($path);
        $text = iconv("windows-1251","utf-8",$text);
        $array = explode(" ", $text);
        $rezult ="";
        foreach ($array as $item){
            if (strlen($item)<=$N){
                $rezult = $text." ".$item;
            }
        }
        file_put_contents($path, $rezult);
    }
}