<?php 
    // Hàm trả dữ liệu trong nội bộ hàm

    // Kiểu trả về 1
    // function sum($a, $b) {
    //     $t = $a + $b; //Code xử lý
    //     echo $t; //Giá trị trả về
    // }

    // Kiểu trả về 2
    // function show_array($data) {
    //     if(is_array($data)) {
    //         echo "<pre>";
    //         print_r($data);
    //         echo "</pre>";
    //     }
    // }

    // Kiểu trả về 3 (kiểu trả về return)
    function sum($a, $b) {
        $t = $a + $b;
        return $t;//Giá trị trả về
    }
    
    $t = sum(3, 5); //kiểu trả về return có thể tái sử dụng lại giá trị khác cho lần dùng tiếp theo
    echo $t;
?>