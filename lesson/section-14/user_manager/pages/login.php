<?php 
    if(isset($_POST['btn_login'])) {
        $error = array();
        // Kiểm tra username
        if(empty($_POST['username'])) {
            $error['username'] = "Không được để trống username";
        } else {
            $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
            if(!preg_match($partten ,$_POST['username'])) {
                $error['username'] = 'Tên đăng nhập không đúng định dạng!';
            } else {
                $username = $_POST['username'];
            }
        }

        if(empty($_POST['password'])) {
            $error['password'] = "Không được để trống password";
        } else {
            $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
            if(!preg_match($partten ,$_POST['password'])) {
                $error['username'] = 'Mật khẩu không đúng định dạng!';
            } else {
                $password = $_POST['password'];
            }
        }

        if(empty($error)) {
           if(check_login($username, $password)){
                // Lưu trữ phiên đăng nhập
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
                // Bước 2 : nếu có rememberme thì nên lưu vào cookie
                if(isset($_POST['remember_me'])) {
                    setcookie('is_login', true, time() + 3600);
                    setcookie('user_login',  $username, time() + 3600);
                }
                // Chuyển hướng vào trong hệ thống
                redirect("?page=home");
           } else {
                $error['account'] = "Tên đăng nhập hoặc mật khẩu không tồn tại!";
           }
        }
    }
?>
<html>

<head>
    <title>Hệ thống điều hướng cơ bản</title>
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/login.css">
</head>

<body>
    <div id="wp-form-login">
        <h1 class="page-title">Đăng nhập</h1>
        <form id="form-login" action="" method="POST">
            <input type="text" name="username" value="" id="username" placeholder="Username" />
            <?php if(!empty($error['username'])) { ?>
            <p class="error"><?php echo $error['username']; ?></p>
            <?php } ?>
            <input type="password" name="password" value="" id="password" placeholder="Password" />
            <?php if(!empty($error['password'])) { ?>
            <p class="error"><?php echo $error['password']; ?></p>
            <?php } ?>
            <input type="checkbox" name="remember_me" id="" />Ghi nhớ đăng nhập <br />
            <input type="submit" id="btn-login" name="btn_login" value="Đăng nhập" />
            <?php if(!empty($error['account'])) { ?>
            <p class="error"><?php echo $error['account']; ?></p>
            <?php } ?>
        </form>
        <a href="#" id="lost-pass">Quên mật khẩu ?</a>
    </div>
</body>

</html>