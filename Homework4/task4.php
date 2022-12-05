<?php

    function check_palindrome($string) {
    if ($string == strrev($string))
        return "Да";
    else
        return "Нет";
    }
    echo check_palindrome('5115');

?>