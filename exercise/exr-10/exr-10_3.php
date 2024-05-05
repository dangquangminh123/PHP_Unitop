<?php 
    // Lấy dữ liệu form đăng nhập bao gồm: tên đăng nhập, Mật khẩu
   $mod = $_GET['mod'];
   $act = $_GET['act'];
   $cat_id = $_GET['cat_id'];
   echo "Mod: {$mod} <br /> Action: {$act} <br /> Cat-id: {$cat_id}"; 
?>

<html>

<head>
    <title>Form đăng nhập</title>
</head>

<body>

    <h1>Lấy thông tin sản phẩm từ link url</h1>
    <a href="?mod=product&act=main&cat_id=1">Áo</a>
</body>

</html>