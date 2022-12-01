
  <?php

      $text = readline("Введите текст: ");
      
      $text = str_replace(" ","", $text);
      
      $arr = str_split($text);
      $arr1 = rsort($arr);
      echo ($arr == $arr1) ? 'Эта строка является палиндром' : 'Эта строка не является палиндромом';

  ?>