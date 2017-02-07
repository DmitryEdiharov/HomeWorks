<?php
/**
 * Created by PhpStorm.
 * User: dmitr_000
 * Date: 01.02.2017
 * Time: 13:21
 */
showDirectory("././");
function showDirectory(string $dir){
    if (is_dir($dir)){
        if ($dr = opendir($dir)){
            while($file = readdir($dr)!==false){
                echo $file;
            }
        }
        closedir($dr);
    }
}