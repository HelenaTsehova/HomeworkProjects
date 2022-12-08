<?php 

    $pattern = "/\d{4}\s[A-Z]{2}\-\d/";
    $testString = '5555 AB-6';
    
    if (preg_match($pattern, $testString)) {
        echo 'Номер введён верно' . PHP_EOL;
    } 
    else {
        echo 'Ошибка: не соответствует формату!' . PHP_EOL;
    }

?>