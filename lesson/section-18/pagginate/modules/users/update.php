<?php 
    get_header();
    $id = (int) $_GET['id'];

    if(isset($_POST['btn_update'])) {
        $error = array();
        $alert = array();

        if(empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống fullname";
        } else {
            // $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
            // if(!preg_match($partten ,$_POST['fullname'])) {
            //     $error['fullname'] = 'Tên đăng nhập không đúng định dạng!';
            // } else {
                $fullname = $_POST['fullname'];
            // }
        }

        if(empty($_POST['gender'])) {
            $error['gender'] = "Bạn cần chọn giới tính!";
        } else {
            $gender = $_POST['gender'];
        }

        if(empty($error)) {
            // $sql = "UPDATE `tbl_users` SET fullname = '${fullname}', gender = '${gender}' WHERE user_id = {$id}";
            // if(mysqli_query($conn, $sql)) {
            //     $alert['success'] = "cập nhật liệu thành công";
            // } else {
            //     echo "Lỗi".mysqli_error($conn);
            // }
            $data = array(
                'fullname' => $fullname,
                'gender' => $gender,
            );

            db_update('tbl_users', $data, "`user_id` = {$id}");
        } else {
            // show_array($error);
        }
    }
    // Cách 1 lấy dữ liệu thông tin user cần sửa
    // $sql = "SELECT * FROM `tbl_users` WHERE `user_id` = {$id}";
    // $result = mysqli_query($conn, $sql);
    // $item = mysqli_fetch_array($result);

    // Cách 2 lấy dữ liệu thông tin user cần sửa
    $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id` = {$id}")
?>

<div id="content">
    <h1>Thêm mới</h1>

    <?php if(!empty($alert['success'])) { ?>
    <p class="success"><?php echo $alert['success']; ?></p>
    <?php } ?>

    <form id="form_reg" action="" method="POST">
        <label for="fullname">Họ và Tên</label>
        <input type="text" name="fullname" value="<?php if(!empty($item['fullname'])) echo $item['fullname']; ?>"
            id="fullname" placeholder="Fullname..." />
        <?php if(!empty($error['fullname'])) { ?>
        <p class="error"><?php echo $error['fullname']; ?></p>
        <?php } ?>

        <select name="gender">
            <option value="">--Chọn giới tính--</option>
            <option <?php if(isset($item['gender']) && $item['gender'] == 'male') echo "selected='selected'" ?>
                value="male">Nam
            </option>
            <option <?php if(isset($item['gender']) && $item['gender'] == 'female') echo "selected='selected'" ?>
                value="female">Nữ</option>
        </select>
        <?php if(!empty($error['gender'])) { ?>
        <p class="error"><?php echo $error['gender']; ?></p>
        <?php } ?>

        <input type="submit" id="btn-reg" name="btn_update" value="Cập nhập" />
        <?php if(!empty($error['account'])) { ?>
        <p class="error"><?php echo $error['account']; ?></p>
        <?php } ?>
    </form>
</div>

<?php 
   get_footer();
?>