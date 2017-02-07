<?php
/**
 * Created by PhpStorm.
 * User: dmitr_000
 * Date: 01.02.2017
 * Time: 13:33
 */
$kw = "handler";
showDirectory("lessonsTasks/functions_forms_tasks", $kw);
function showDirectory(string $dir, string $keyWord){
    if (is_dir($dir)){
        foreach (glob($dir."/".$keyWord.".*") as $item) {
            echo $item;
        }
    }
}