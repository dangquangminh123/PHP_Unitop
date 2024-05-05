<?php 
    // Xóa phần tử mảng 1 chiều
    $info = array (
        'id' => 1,
        'fullName' => 'Phan Văn Cương',
        'email' => 'phancuong.qt@gmail.com',
        'website' => 'unitop.vn'
    );

    echo "<pre>";
    print_r($info);
    echo "</pre>";
    // Xóa phần tử một chiều
    unset($info['website']);

    echo "<pre>";
    print_r($info);
    echo "</pre>";

    // Xóa phần tử mảng đa chiều
    $list_users = array (
        1 => array(
            'id' => 1,
            'fullName' => 'Phan Văn Cương',
            'email' => 'phancuong.qt@gmail.com'
        ),
        2 => array(
            'id' => 2,
            'fullName' => 'Nguyễn Hoàng Anh',
            'email' => 'hoanganh@gmail.com',
            'website' => 'unitop.vn'
        ),
    );
    // Xóa hẳn 1 phần tử thứ 2
    // unset($list_users[2]);
    // Xóa 1 phần tử website của phần tử thứ 2
    unset($list_users[2]['website']);
    
    echo "<pre>";
    print_r($list_users);
    echo "</pre>";

    // Xóa hẳn 1 mảng đa chiều
    // unset($list_users);
?>