<?php 
    $my_str = "Phan Văn Cương";
    // lấy tổng số ký tự trong chuỗi
    echo strlen($my_str) . "<br>";

    // ucfirst ghi in hoa ký tự đầu tiên của chuỗi
    $My_str = "phan van cuong";
    echo ucfirst($My_str) . "<br>";
    
    // ucwords ghi in hoa mỗi chữ đầu tiên của mỗi từ
    echo ucwords($My_str) . "<br>";

    // trim loại bỏ những ký tự khoảng trắng dư thừa
    $fullname = "Phan văn       Cương";
    echo trim($fullname) . "<br>";

    // str_repeat lặp lại số lần của chuỗi đó
    echo str_repeat('--', 10). "<br>";

    // Hàm mã hóa md5
    echo md5('unitop'). "<br>";

    // Hàm join nối từng phẩn tử của 1 mảng với nhau qua 1 ký tự nào 
    $my_id = array(1, 3, 6, 9);
    echo join(',',$my_id). "<br>";

    // implode() gộp các phần tử mảng với nhau bằng 1 ký tự
    $list_id = array(1, 3, 4, 8);
    echo implode(',',$list_id). "<br>";

    // explode phân tách toàn bộ phần tử của 1 mảng bởi 1 ký tự nào đó
    $pizza = "piece1 piece2 piece3 piece4 piece5";
    $pieces = explode(" ", $pizza);
    echo $pieces[3]. "<br>";
    print_r($pieces);

    // htmlscpecialchart là hàm convert ký tự html, scripts thành dạng chuỗi string bình thường
    $new = htmlspecialchars("<a href='text'>Test</a>", ENT_QUOTES);
    echo $new. "<br>";
?>