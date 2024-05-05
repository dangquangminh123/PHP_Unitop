<?php 
    $info = array(
        'id' => 1,
        'fullName' => 'Phan Văn',
        'email' => 'phanvancuong.qt@gmail.com'
    );

    echo "<pre>";
    print_r($info);
    echo "</pre>";

    $info['fullName'] = "Phan Văn Cương";

    echo "<pre>";
    print_r($info);
    echo "</pre>";
?>