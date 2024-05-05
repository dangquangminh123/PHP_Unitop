<?php 
    if(isset($_POST['btn_login'])) {
        if(empty($_POST['username'])) {
            echo "Không được để trống username";
        } else{
            $username = $_POST['username'];
            echo $username;    
        }
    }
?>

<html>

<head>
    <title>Lấy dữ liệu từ TextBox</title>
</head>

<body>

    <h1>Đăng nhập</h1>
    <form action="" method="GET">
        Username: <input type="text" name="username" id="" /><br /><br />
        Password: <input type="password" name="password" id="" /><br /><br />
        <input type="submit" name="btn_login" value="login" />
    </form>
</body>

</html>