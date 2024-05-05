<?php
    require 'validation/validation.php';
    if(isset($_POST['btn_login'])) {
        $error = array();//Phất cờ
        if(empty($_POST['username'])) {
            //Hạ cờ 
            $error['username'] = "không được để trống trường username";
        } else {
            if(!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
                $error['username'] = "Số lượng ký tự yêu cầu từ 6 đến 32";
            }else {
                if(!is_username($_POST['username'])) {
                    $error['username'] = "Username chỉ được phép dùng số, ký tự chuỗi";
                } else {
                    $username = $_POST['username'];
                }
            }
           
        }

        if(empty($error)) {
            echo "Username: {$username} <br/>";
        } 
    }
?>
<html>

<head>
    <title>Validation Username</title>
</head>

<body>
    <style>
    p.error {
        color: red;
    }
    </style>
    <h1>Validation Username</h1>
    <form action="" method="POST">
        <label for="username">Username</label> <br />
        <input type="text" name="username" id="username" /><br />
        <?php echo form_error('username'); ?>
        <input type="submit" name="btn_login" value="Login" />
    </form>
</body>

</html>