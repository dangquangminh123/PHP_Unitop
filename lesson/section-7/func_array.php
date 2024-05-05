<?php 
    $search_array = array('a' => 1, 'b' =>  4);
    if(array_key_exists('first', $search_array)) {
        echo "The 'a' element is in the array";
    }

    // array merge
    // $array_1 = array(1, 2);
    // $array_2 = array(4, 5);
    // $result = array_merge($array_1, $array_2);
    // print_r($result);

    // count
    $array_1 = array(1, 2, 4, 7);
    echo count($array_1);
    
    // in_array kiểm tra phần tử đó có trong mảng không ?
    $my_array = array(1, 2, 4, 9, 12);
    echo in_array(1, $my_array);

    // is_array hàm kiểm tra mảng này có phải là 1 mảng không ? 
    echo is_array($my_array);
    
?>