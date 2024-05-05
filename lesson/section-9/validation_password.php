<?php
 require 'validation/validation.php';
    if(isset($_POST['btn_login'])) {
        $error = array();//Phất cờ
        if(empty($_POST['password'])) {
            // Hạ cờ
            $error['password'] = "không được để trống trường password";
        } else {
            if(!(strlen($_POST['password']) >= 6 && strlen($_POST['username']) <= 32)) {
                $error['password'] = "Số lượng ký tự yêu cầu từ 6 đến 32";
            }else {
                $parren = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
                if(!is_password($_POST['password'])) {
                    $error['password'] = "password sử dụng chữ cái, chữ số, có 1 ký tự đầu tiên ghi hoa, và có từ 6 đến 32 ký tự";
                } else {
                    $password = $_POST['password'];
                }
            }
        }

        if(empty($error)) {
            echo "password: {$password}";
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
    <h1>Validation Password</h1>
    <form action="" method="POST">
        <label for="password">Password</label> <br />
        <input type="password" name="password" id="password" /><br />
        <?php echo form_error('password'); ?>
        <input type="submit" name="btn_login" value="Login" />
    </form>
</body>

</html>