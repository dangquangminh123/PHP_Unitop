<?php 
    // Tạo mảng rỗng
    $error = array();
    $error['username'] = "Bạn không được để trống Tên đăng nhập";

    // Tạo mảng với key mặc định
    $list_odd = array(1, 3, 5);
    echo "<pre>";
    print_r($list_odd);
    echo "</pre>";
    // Tạo mảng với key xác định
    
    // User
    $info = array(
        'id' => 1,
        'fullName' => 'Phan Văn Cương',
        'email' => 'phanvancuong.qt@gmail.com'
    );
    
  
    echo "<pre>";
    print_r($info);
    echo "</pre>";
?>