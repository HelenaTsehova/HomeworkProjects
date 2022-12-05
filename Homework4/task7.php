<?php
   function test() {
        static $calls = 0;
        $calls++;
        echo "Эта функция была вызвана $calls раз";
     }
     
     test();
?>