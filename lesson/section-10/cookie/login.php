<?php session_start();
ob_start();
 if(isset($_POST['btn_login'])) {
    $error = array();//Phất cờ
    if(empty($_POST['username'])) {
        //Hạ cờ 
        $error['username'] = "không được để trống trường username";
    }  else {
        if(!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
            $error['username'] = "Số lượng ký tự yêu cầu từ 6 đến 32";
        }else {
            $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
            if(!preg_match($partten, $_POST['username'], $matchs))  {
                $error['username'] = "password sử dụng chữ cái, chữ số, có 1 ký tự đầu tiên ghi hoa, và có từ 6 đến 32 ký tự";
            } else {
                $username = $_POST['username'];
            }
        }
    }
    if(empty($_POST['password'])) {
        // Hạ cờ
        $error['password'] = "không được để trống trường password";
    } else {
        if(!(strlen($_POST['password']) >= 6 && strlen($_POST['password']) <= 32)) {
            $error['password'] = "Số lượng ký tự yêu cầu từ 6 đến 32";
        }else {
            $parren = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
            if(!preg_match($parren, $_POST['password'], $matchs))  {
                $error['password'] = "password sử dụng chữ cái, chữ số, có 1 ký tự đầu tiên ghi hoa, và có từ 6 đến 32 ký tự";
            } else {
                $password = $_POST['password'];
            }
        }
    }

    if(empty($error)) {
        $data = array(
            'username' => 'unitop123',
            'password' => 'Phancuong'
        );
        if(($username == $data['username']) && ($password == $data['password'])) {
            if(isset($_POST['remember_me'])) {
                setcookie('is_login', true, time() + 3600);
                setcookie('user_login', 'unitop', time() + 3600);
            }
            $_SESSION['is_login']=true;
            $_SESSION['user_login'] = 'unitop';
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
        <input type="password" name="password" id="password" /><br />
        <p class="error"><?php if(!empty($error['password'])) echo $error['password']; ?></p><br />


        <input type="checkbox" name="remember_me" id="remember_me" value="1" /> <label id="remember_me">Ghi nhớ đăng
            nhập</label>
        <br />
        <input type="submit" name="btn_login" value="Login" />
    </form>
</body>

</html>