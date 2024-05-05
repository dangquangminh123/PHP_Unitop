<?php 
    $x = 10;
    $y = 3;
    if($x > 5 || $y < 2) {
        echo "OK";
    }
    if($x > 5 && $y > 2) {
        echo "Đúng";
    }

    if(!($x < 5)) {
        echo "OK";
    }

    function check_even($x) {
        if($x % 2 == 0) {
            return TRUE;
        }
        return false;
    }

    if(!check_even(5)) {
        echo "Đây là số lẻ";
    }
?>