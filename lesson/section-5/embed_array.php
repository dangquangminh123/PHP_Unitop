<?php 
    $list_prime = array(2, 3, 5, 7);
    /*
    *B1: Chuẩn bị mảng đã xử lý
    *B2: Tạo cấu trúc HTML mẫu
    *B3:Duyệt mảng
    *B4: Đổ dữ liệu
    */
    $list_users = array (
        1000 => array(
            'id' => 1000,
            'fullName' => 'Phan Văn Cương',
            'email' => 'phancuong.qt@gmail.com'
        ),
        1268 => array(
            'id' => 1268,
            'fullName' => 'Nguyễn Hoàng Anh',
            'email' => 'hoanganh@gmail.com'
        ),
    );

    function show_array($data) {
        if(is_array($data)) {
            echo "<pre>";
            print_r($data);
            echo "</pre>";
        }
    }
?>

<html>

<head>
    <title>Nhúng dữ liệu mảng lên HTML </title>
</head>

<body>
    <h1>Danh sách số nguyên tố</h1>
    <table border="1">
        <thead>
            <tr>
                <td align="center" width="50">STT</td>
                <td align="center" width="200">Số Nguyên Tố</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            $tamp = 0;
            foreach($list_prime as $item) {
                $tamp++;
            ?>
            <tr>
                <td align="center"><?php echo $tamp; ?></td>
                <td align="center"><?php echo $item; ?></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>

    <h1>Danh sách thành viên</h1>
    <?php  if(!empty($list_prime)) {?>
    <table border="1">
        <thead>
            <tr>
                <td align="center" width="50">STT</td>
                <td align="center" width="50">Id</td>
                <td width="200">Họ và Tên</td>
                <td width="200">Email</td>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            $temp = 0;
            foreach($list_users as $user) {
                $temp++;
            ?>
            <tr>
                <td align="center"><?php echo $temp; ?></td>
                <td align="center"><?php echo $user['id']; ?></td>
                <td><?php echo $user['fullName']; ?></td>
                <td><?php echo $user['email']; ?></td>
            </tr>
            <?php 
                }
            ?>
        </tbody>
    </table>
    <?php  }else { ?>
    <p>Không tồn tại dữ liệu</p>
    <?php } ?>
</body>

</html>