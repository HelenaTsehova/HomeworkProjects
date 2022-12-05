<?php 

    function sum($array){
        if(!empty($array)){
            $count = count($array);
            $a = '';
            for($i=0; $i<$count; $i++){
                $a = $a + $array[$i];
            }
        }
        return $a;
    }
    echo sum(array('3', '5', '6', '4', '2', '1', '7'));

?>