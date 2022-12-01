<?php

    $text = readline("Введите текст: ");
    $arr = explode(" ", $text);
    $max = $arr[0];
    for ($i=0; $i<count($arr); $i++) {
        if(strlen($arr[$i]) > strlen($max)){
            $max = $arr[$i];
        }
        }
    echo $max;
    
?>
