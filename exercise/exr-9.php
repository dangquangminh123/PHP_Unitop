<?php 
    // Tính số trang $num_page hiển thị khi có tổng số bài $total_rows và số bài cho từng trang $num_per_page
    $total_rows = 100;
    $num_per_page = 25;
    
    // Tính $num_page
    $num_page = ceil($total_rows / $num_per_page);
    echo $num_page."<br>";

    // 2 xuất 1 mảng số nguyên chẵn từ một mảng số nguyên cho trước
    $list_number = array(2, 3, 5, 4, 6, 1, 11, 21);
    $list_even = array();
    if(!empty($list_number) && is_array($list_number)) {
        foreach($list_number as $num) {
            if($num % 2 == 0) {
                $list_even[] = $num;
            }
        }
        print_r($list_even)."<br>";
    }

    // 3 hiển thị danh mục theo đa cấp
    // Giáo dục
    // -- khuyên học
    // -- du học
    // Thể thao
    // -- châu Âu
    // -- châu Á
    $list_post_cat = array(
        1 => array(
            'catId' => 1,
            'cat_title' => 'Giáo dục',
            'level' => 0
        ),
        2 => array(
            'catId' => 2,
            'cat_title' => 'Khuyến học',
            'level' => 1
        ),
        3 => array(
            'catId' => 3,
            'cat_title' => 'Du học',
            'level' => 1
        ),

        4 => array(
            'catId' => 4,
            'cat_title' => 'Thể thao',
            'level' => 0
        ),
        5 => array(
            'catId' => 5,
            'cat_title' => 'châu Âu',
            'level' => 1
        ),
        6 => array(
            'catId' => 6,
            'cat_title' => 'ngoại hạng anh',
            'level' => 2
        ),
        7 => array(
            'catId' => 7,
            'cat_title' => 'Châu Á',
            'level' => 1
        )
    )
?>

<html>

<head>
    <title>Thư viện hàm</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <td>STT</td>
                <td>Tên</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                if(!empty($list_post_cat)) {
                    foreach($list_post_cat as $item) {
            ?>
            <tr>
                <td><?php echo $item['catId']; ?></td>
                <td><?php echo str_repeat('----', $item['level']).' '.$item['cat_title']; ?></td>
            </tr>
            <?php 
                    }
                }
            ?>
        </tbody>
    </table>
</body>

</html>