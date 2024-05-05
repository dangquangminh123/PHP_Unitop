<?php 
    $list_users = array (
        1 => array(
            'id' => 1,
            'fullName' => 'Phan Văn Cương',
            'email' => 'phancuong.qt@gmail.com'
        ),
        2 => array(
            'id' => 2,
            'fullName' => 'Nguyễn Hoàng Anh',
            'email' => 'hoanganh@gmail.com'
        ),
    );

    echo "<pre>";
    print_r($list_users);
    echo "</pre>";

    /* 
    *Thêm phần tử
    * id :3
    *fullName: Lam Trường
    *email: lamtruong.qt@gmail.com 
    */
    $list_users[3] = array(
        'id' => 3,
        'fullName' => 'Lam Trường',
        'email' => 'lamtruong.qt@gmail.com '
    );

    // Cách 2 thêm phần tử mới vào trong mảng
    // $list_users[3]['id'] = 3;
    // $list_users[3]['fullName'] = 'Lam Trường';
    // $list_users[3]['email'] = 'lamtruong.qt@gmail.com';
    
    // Lấy phần tử của mảng đa chiều
    $info = $list_users[3];
    echo "<pre>";
    print_r($info);
    echo "</pre>";

    echo $list_users[3]['email'];
?>