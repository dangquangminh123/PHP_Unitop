<?php 
    if(isset($_POST['btn_reg'])) {
        if(isset($_POST['rules'])) {
            $rules = $_POST['rules'];
        }else {
            echo "Bạn cần đồng ý đọc và xác nhận điều khoản";
        }
    }
?>
<html>

<head>
    <title>Lấy dữ liệu từ Checkbox</title>
</head>

<body>

    <h1>Đăng ký</h1>
    <form action="" method="POST">
        <p style="width: 400px; height: 100px; overflow-y: scroll">Lorem ipsum dolor sit amet consectetur adipisicing
            elit.
            Non,
            maiores?
        </p>
        <input type="checkbox" name="rules" value="yes" id="rules" />
        <label for="rules">Đồng ý</label> <br /> <br /> <br />
        <input type=" submit" name="btn_reg" value="Register" />
    </form>
</body>

</html>