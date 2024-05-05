<?php 
// Bài 1
    $list_odd = array();
    for($i = 3; $i <= 150; $i+=2) {
        $list_odd[] = $i;
    }

    echo "<pre>";
    print_r($list_odd);
    echo "</pre>";

    // Bài 2 Tạo mảng lưu trữ thông tin bài viết
    $list_post_cat = array(
        1 => array(
            'cat_id' => 1,
            'cat_title' => 'Xã hội'
        ),
        2 => array(
            'cat_id' => 2,
            'cat_title' => 'Thể thao'
        ),
    );

    $list_post = array(
        1 => array(
            'id' => 1,
            'post_title' => "Bài viết số 1",
            'post_content' => "Chi tiết bài viết 1",
            'post_desc' => "Mô tả ngắn bài viết 1",
            'cat_id' => 1
        ),
        2 => array(
            'id' => 2,
            'post_title' => "Bài viết số 2",
            'post_content' => "Chi tiết bài viết 2",
            'post_desc' => "Mô tả ngắn bài viết 2",
            'cat_id' => 2
        )
    );
    echo "<pre>";
    print_r($list_post);
    echo "</pre>";
?>

<html>

<head>
    <title>Bài viết</title>
</head>

<body>
    <h1>Danh sách bài viết</h1>
    <ul>
        <?php
            if(!empty($list_odd)) {
                foreach($list_post as $item) {
        ?>
        <li>
            <a href="#"><?php echo $item['post_title']; ?></a>
            <p><?php echo $item['post_desc']; ?></p>
        </li>
        <?php 
                }
            }
        ?>
    </ul>
</body>

</html>