<?php 
    // Lấy dữ liệu form đăng nhập bao gồm: tên đăng nhập, Mật khẩu
    if(isset($_POST['btn_reg'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        echo $username . '-' . $password . '-' . $fullname . '-' . $phone . '-' .$gender;
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

    select,
    #btnregister {
        margin-top: 20px;
    }
    </style>
    <h1>Bài 2 Đăng ký tài khoản</h1>
    <form action="" method="post">
        <label for="fullname">Họ và Tên</label>
        <input type="text" name="fullname" id="" /><br /><br />
        <label for="username">Tên đăng nhập</label>
        <input type="username" name="username" id="" /><br /><br />
        <label for="password">Password</label>
        <input type="password" name="password" id="" /><br /><br />
        <label for="phone">Số điện thoại</label>
        <input type="text" name="phone" id="" /><br /><br />
        <select name="gender"><br /><br />
            <option value="">Chọn giới tính</option>
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select>
        <input type="submit" id="btnregister" name="btn_reg" value="Đăng Ký" />
    </form>
</body>

</html>