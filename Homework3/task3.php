
<?php 

    $arr1 = array(1,3,5);
    $arr2 = array(2,4,6);
     
    $res_arr = array_merge($arr1, $arr2);
    arsort($res_arr);
    print_r($res_arr);
    

?>
