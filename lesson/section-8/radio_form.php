<?php 
    
    if(isset($_POST['btn_reg'])) {
        $show_gender = array(
          'male' => 'Nam',
          'female' => 'Nữ'  
        );
        if(empty($_POST['gender'])) {
            echo "Bạn chưa chọn giá trị";
        } else {
            $gender = $_POST['gender'];
            echo $show_gender[$gender];
        }
    }
?>


<html>

<head>
    <title>Lấy dữ liệu từ TextBox</title>
</head>

<body>

    <h1>Đăng ký</h1>
    <form action="" method="GET">
        <input type="radio" name="gender" value="male" id="male" checked="checked" />
        <label for="male">Nam</label> <br />
        <input type=" radio" name="gender" value="female" id="female" />
        <label for="female">Nữ</label> <br />
        <input type="submit" name="btn_reg" value="Register" />
    </form>
</body>

</html>