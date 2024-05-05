<?php
    if(isset($_POST['pay'])){
        // echo "<pre>";
        // print_r($_POST['pay']);
        // echo "</pre>";
       if(empty($_POST['pay'])) {
        echo "Cần chọn hình thức than toán";
       } else {
        $pay = $_POST['pay'];
        echo $pay;
       }
    }
?>
<html>

<head>
    <title>Lấy dữ liệu từ radio button</title>
</head>

<body>

    <h1>Thanh toán</h1>
    <form action="" method="GET">
        <label>Hình thức thanh toán</label>
        <select name="pay">
            <option value="">--Chọn--</option>
            <option value="Cod" selected="selected">Thanh toán tại nhà</option>
            <option value="banking">Thanh toán qua thẻ tín dụng</option>
        </select>
        <input type="submit" name="btn_order" value="Đặt hàng" />
    </form>
</body>

</html>