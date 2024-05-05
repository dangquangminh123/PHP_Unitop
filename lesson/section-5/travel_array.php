<?php 
    //Duyệt mảng 1 chiều 
    $list_prime = array(2, 3, 5, 7);
    
    foreach($list_prime as $item) {
        echo "{$key} => {$item}<br>";
        $t+=$item;
    }

    echo "Tổng: {$t}";

    // Duyệt mảng đa chiều
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

    foreach($list_users as $item) {
        echo "<pre>";
        print_r($item);
        echo "</pre>";

        // Xuất các phẩn từ của mảng ra 
        echo $item['id']."<br>";
        echo $item['fullName']."<br>";
        echo $item['email']."<br>";
        echo "<br>-----------<br>";
    }
?>