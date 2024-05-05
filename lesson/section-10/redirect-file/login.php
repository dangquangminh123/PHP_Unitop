<?php 
 if(isset($_POST['btn_login'])) {
    $error = array();//Phất cờ
    if(empty($_POST['username'])) {
        //Hạ cờ 
        $error['username'] = "không được để trống trường username";
    } else {
        $username = $_POST['username'];
    }
    if(empty($_POST['password'])) {
        // Hạ cờ
        $error['password'] = "không được để trống trường password";
    } else {
        $password = $_POST['password'];
    }

    if(empty($error)) {
        $data = array(
            'username' => 'unitop123',
            'password' => 'Phancuong'
        );
        if(($username == $data['username']) && ($password == $data['password'])) {
            header("Location: index.php");
        } else {
            echo "Thông tin username và password không đúng";
        }
    } 
}
   
?>
<html>

<head>
    <title>Chuẩn hóa dữ liệu từ form đăng nhập</title>
</head>

<body>
    <style>
    p.error {
        color: red;
    }
    </style>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        <label for="username">Username</label> <br />
        <input type="text" name="username" id="username" /><br />
        <p class="error"><?php if(!empty($error['username'])) echo $error['username']; ?></p>
        <label for="password">Password</label> <br />
        <input type="text" name="password" id="password" /><br />
        <p class="error"><?php if(!empty($error['password'])) echo $error['password']; ?></p><br />
        <input type="submit" name="btn_login" value="Login" />
    </form>
</body>

</html>