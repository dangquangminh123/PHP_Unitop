<?php 
    $a = 10;
    $b = 5;
    // Cách 1
    // function sum() {
    //     global $a, $b;
    //     return $a + $b;
    // }

    // Cách 2
    function sum() {
        return $GLOBALS['a'] + $GLOBALS['b'];
    }
    echo sum();
?>