
<?php 

    $a = readline("N= ");
    if ($a < 1){
    echo "неверный параметр";
    }
    else {
    $sum = 1;
    for($i = 2; $i <= $a; $i++) {
        $sum += $i * $i;
    }
    echo $sum;
    }
?>
