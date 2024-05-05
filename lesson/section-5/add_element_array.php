<?php 
    
     // User
     $info = array(
         'id' => 1,
         'fullName' => 'Phan Văn Cương',
         'email' => 'phanvancuong.qt@gmail.com'
     );
    //  Thêm phần tử có key xác định, Lưu trữ thêm số điện thoại 
    // Số điện thoại => tel, phone
    $info['phone'] = '04892380241';
    echo "<pre>";
    print_r($info);
    echo "</pre>";
    
    // Thêm phần tử có key mặc định
    $list_prime = array(2, 3, 5, 7);
    $list_prime[] = 11;

    echo "<pre>";
    print_r($list_prime);
    echo "</pre>";
?>