<?php 
    require 'validation/data.php';
    require 'validation/validation.php';

    if(isset($_POST['btn_regis'])) {
        $error = array();
        
        // Chuẩn hóa fullname
        if(empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống Họ và Tên";
        } else {
            $fullname = $_POST['fullname'];
        }

        // Chuẩn hóa username
        if(empty($_POST['username'])) {
            $error['username'] = "Không được để trống tên đăng nhập";
        }else {
           if(!is_username($_POST['username'])) {
            $error['username'] = "Không đúng định dạng tên đăng nhập";
           } else {
            $username = $_POST['username'];
           }
        }

        // Chuẩn hóa mật khẩu
        if(empty($_POST['password'])) {
            $error['password'] = "Không được để trống mật khẩu";
        }else {
           if(!is_password($_POST['password'])) {
            $error['password'] = "Không đúng định dạng mật khẩu";
           } else {
            $password = md5($_POST['password']);
           }
        }

        // Chuẩn hóa số điện thoại
        if(empty($_POST['phone'])) {
            $error['phone'] = "Không được để trống số điện thoại";
        }else {
           if(!is_phone_number($_POST['phone'])) {
            $error['phone'] = "Không đúng định dạng số điện thoại";
           } else {
            $phone = $_POST['phone'];
           }
        }

        // Kết luan
        if(empty($error)) {
            $info = array(
                'fullname' => $fullname,
                'username' => $username,
                'password' => $password,
                'phone' => $phone,
            );

            show_array($info);
        }
    }
?>

<html>

<head>
    <title>Bài tập exercise 11</title>
</head>

<body>
    <style>
    label {
        display: block;
        margin-top: 15px;
    }

    input[type='text'],
    input[type='password'] {
        /* margin-bottom: 15px; */
        padding: 5px 10px;
        border: 1px solid #f5f5f5;
    }

    p.error {
        color: red;
        font-style: italic;
    }

    #btn_regis {
        margin-top: 20px;
        padding: 5px 20px;
        border: none;
        background: #0000;
        color: #fff;
        display: block;
        cursor: pointer;
    }
    </style>
    <h1>Bài tập exercise 11</h1>
    <form action="" method="POST">
        <label for="fullname">Họ và Tên</label> <br />
        <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname'); ?>" /><br />
        <?php echo form_error('fullname'); ?>
        <label for="username">Tên đăng nhập</label> <br />
        <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" /><br />
        <?php echo form_error('username'); ?>
        <label for="password">Mật khẩu</label> <br />
        <input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>" /><br />
        <?php echo form_error('password'); ?>
        <label for="phone">Số điện thoại</label> <br />
        <input type="phone" name="phone" id="phone" value="<?php echo set_value('phone'); ?>" /><br />
        <?php echo form_error('phone'); ?>

        <input type="submit" name="btn_regis" id="btn_regis" value="Đăng ký" />
    </form>
</body>

</html>