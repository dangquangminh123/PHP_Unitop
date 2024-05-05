<?php 
    // 1.Tạo biến lưu trữ danh sách người dùng
    $list_user = array();
    // $listUser = array();
    // 2.Tạo biến lưu trữ danh sách sản phẩm
    $list_product = array();
    // $listProduct = array();

    $lastName = "Cương";
    $birthday = "10/11/1988";
    $weight = "62,5kg";
?>
<html>

<head>
    <title>Bài tập php 4</title>
</head>

<body>
    <style>
    h1 {
        color: red;
    }
    </style>
    <h1>Thông tin cá nhân</h1>
    <p>Tôi là <strong><?php echo $lastName; ?></strong>, sinh năm <strong><?php echo $birthday; ?></strong>,cân nặng
        <strong><?php echo $weight; ?></strong>
    </p>
</body>

</html>