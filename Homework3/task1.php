
<?php 

    $arr = array();
    $n = readline('Введите значение: '); $i = 0;
 
    while($i < $n){
        $arr[$i] = $i * $i;
        echo "$arr[$i]<br>";
        $i++;
 
    }
    if($i > $n){
        echo "not found";
    }

?>
