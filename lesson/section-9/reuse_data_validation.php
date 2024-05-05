<?php
 require 'validation/validation.php';
    if(isset($_POST['btn_reg'])) {
        $error = array();//Phất cờ
        if(empty($_POST['username'])) {
            //Hạ cờ 
            $error['username'] = "không được để trống trường username";
        } else {
            $username = $_POST['username'];
        }
        if(empty($_POST['gender'])) {
            //Hạ cờ 
            $error['gender'] = "Bạn cần chọn giới tính";
        } else {
            $gender = $_POST['gender'];
        }

        if(empty($error)) {
            echo "Gender: {$gender} <br />";
        } 
    }
?>
<html>

<head>
    <title>Tái sử dụng lại value cho form</title>
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
        <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" /><br />
        <?php echo form_error('username'); ?>
        <label>Giới tính</label>
        <select name="gender">
            <option value="">---Chọn----</option>
            <option <?php if(!empty($gender) && $gender == 'male') echo "selected='selected'"; ?> value="male">Nam
            </option>
            <option <?php if(!empty($gender) && $gender == 'female') echo "selected='selected'"; ?> value="female">Nữ
            </option>
        </select>
        <?php echo form_error('gender'); ?> <br /><br />
        <input type="submit" name="btn_reg" value="Register" />
    </form>
</body>

</html>