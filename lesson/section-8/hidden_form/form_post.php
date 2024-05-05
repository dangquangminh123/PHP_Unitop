<?php
    // function show_array($data) {
    //    if(is_array($data)){
    //     echo "<pre>";
    //     print_r($data);
    //     echo "</pre>";
    //    } 
    // }
    // show_array($_SERVER);
    
    if(isset($_POST['btn_login'])) {
        $info_user = array(
            'username' => 'admin',
            'password' => 'admin!@#',
        );

        $error = array();
        if(empty($_POST['username'])) {
            $error['username'] = "Không được để trống username";
        } else{
            $username = $_POST['username'];
            echo $username;    
        }

        if(empty($_POST['password'])) {
            $error['password'] = "Không được để trống Mật khẩu";
        } else{
            $password = $_POST['password'];
            echo $password;    
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($error)) {
            if(($username == $info_user['username']) && $password == $info_user['password']) {
                $redirect_to = $_POST['redirect_to'];
                header("location:{$redirect_to}");
            } else {
                $error['login'] = "Tên đăng nhập hoặc mật khẩu không chính xác!";
            }
        }
        if(!empty($error)) {
            show_array($error);
        }
    }
?>

<html>

<head>
    <title>truyền dữ liệu Form method POST</title>
</head>

<body>
    <form action="" method="post">
        Name: <input type="text" name="username" id="" /><br /><br />
        Password: <input type="password" name="password" id="" /><br />
        <input type="hidden" name="redirect_to" value="cart.php" />
        <input type="submit" name="btn_login" value="login" />
    </form>
</body>

</html>