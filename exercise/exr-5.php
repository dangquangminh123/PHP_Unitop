<?php 
    /*
    Tạo biến số nguyên $a, nếu $a là số nguyên dương chẵn thì
    tiến hành cộng thêm một đơn vị và xuất kết quả ra người dùng
    1. Tạo biến $a
    2. Tạo biểu thức điều kiện
    3. Kiểm tra và xử lý
    4. Xuất dữ liệu
    */
    $a = 4;
    if(($a >= 0) && ($a % 2 == 0)) {
        $a = $a + 1;
    }
    echo "a:={$a}";
?>