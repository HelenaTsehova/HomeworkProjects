<?php 

    $pattern = "/\+375\(\d{2}\)\d{3}-\d{2}-\d{2}/";
    $testString = '+375(29)777-77-77';
    
    if (preg_match($pattern, $testString)) {
        echo 'Номер указан верно' . PHP_EOL;
    } 
    else {
        echo 'Ошибка: не соответствует формату!' . PHP_EOL;
    }

?>