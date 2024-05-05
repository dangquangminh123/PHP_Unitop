<?php 
    // Lấy dữ liệu form đăng nhập bao gồm: tên đăng nhập, Mật khẩu
    if(isset($_POST['btn_login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo $username . '-' . $password;
    }
?>

<html>

<head>
    <title>Form đăng nhập</title>
</head>

<body>
    <style>
    label {
        display: block;
        padding: 8px 0px;
    }

    input {
        display: block;
    }

    #btnlogin {
        margin-top: 20px;
    }
    </style>
    <h1>Bài 1 Đăng nhập</h1>
    <form action="" method="post">
        <label for="username">Tên Đăng Nhập</label>
        <input type="text" name="username" id="" /><br /><br />
        <label for="password">Password</label>
        <input type="password" name="password" id="" /><br /><br />
        <input type="submit" id="btnlogin" name="btn_login" value="Đăng nhập" />
    </form>
</body>

</html>