<?php 
 $info = array(
    'id' => 1,
    'fullName' => 'Phan Văn Cương',
    'email' => 'phanvancuong.qt@gmail.com'
);

// Lấy dữ liệu fullname
$fullname = $info['fullName'];
$email = $info['email'];
$id = $info['id'];

// Lấy các số nguyên tố
$list_prime = array(2, 3, 5, 7);
echo $list_prime[0];
?>

<html>

<head>
    <title>Lấy dữ liệu</title>
</head>

<body>
    <p>id: <strong><?php echo $id;?></strong></p>
    <p>Họ và tên: <strong><?php echo $fullname;?></strong></p>
    <p>Email: <strong><?php echo $email;?></strong></p>

    <!-- Cách 2 -->
    <p>id: <strong><?php echo $info['id'];?></strong></p>
    <p>Họ và tên: <strong><?php echo $info['fullName'];?></strong></p>
    <p>Email: <strong><?php echo $info['email'];?></strong></p>
</body>

</html>