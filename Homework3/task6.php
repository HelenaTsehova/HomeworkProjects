
  <?php
      $array = array(1, 2, 3, 4, 5);
      var_dump($array);
      unset($array[4]);
      $array = array_values($array);
      echo ' ';
      var_dump($array);
  ?>