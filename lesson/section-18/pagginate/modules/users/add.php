<?php 
    get_header();

    if(isset($_POST['btn_reg'])) {
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

        
        // Kiểm tra username
        if(empty($_POST['username'])) {
            $error['username'] = "Không được để trống username";
        } else {
            $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
            if(!preg_match($partten ,$_POST['username'])) {
                $error['username'] = 'Tên đăng nhập không đúng định dạng!';
            } else {
                $username = $_POST['username'];
            }
        }

        
        if(empty($_POST['email'])) {
            $error['email'] = "Không được để trống email";
        } else {
            $partten = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
            if(!preg_match($partten ,$_POST['email'])) {
                $error['email'] = 'Email không đúng định dạng!';
            } else {
                $email = $_POST['email'];
            }
        }

        if(empty($_POST['password'])) {
            $error['password'] = "Không được để trống password";
        } else {
            $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
            if(!preg_match($partten ,$_POST['password'])) {
                $error['password'] = 'Mật khẩu không đúng định dạng!';
            } else {
                $password = $_POST['password'];
            }
        }

        if(empty($_POST['gender'])) {
            $error['gender'] = "Bạn cần chọn giới tính!";
        } else {
            $gender = $_POST['gender'];
        }

        if(empty($error)) {
            // $sql = "INSERT INTO `tbl_users` (`fullname`, `email`, `password`, `username`, `gender`) VALUES
            //         ('{$fullname}', '{$email}', '{$password}', '{$username}', '{$gender}')";
            // if(mysqli_query($conn, $sql)) {
            //     $alert['success'] = "Thêm dữ liệu thành công";
            // } else {
            //     echo "Lỗi".mysqli_error($conn);
            // }

            $data = array(
                'fullname' => $fullname,
                'email' => $email,
                'password' => $password,
                'username' => $username,
                'gender' => $gender,
            );
            $insert_id = db_insert("tbl_users", $data);
            if(isset($insert_id)) {
                $alert['success'] = "Đã thêm mới user thành công!";
            }
        } else {
            // show_array($error);
        }
    }
?>

<div id="content">
    <h1>Thêm mới</h1>

    <?php if(!empty($alert['success'])) { ?>
    <p class="success"><?php echo $alert['success']; ?></p>
    <?php } ?>

    <form id="form_reg" action="" method="POST">
        <label for="fullname">Họ và Tên</label>
        <input type="text" name="fullname" value="" id="fullname" placeholder="Fullname..." />
        <?php if(!empty($error['fullname'])) { ?>
        <p class="error"><?php echo $error['fullname']; ?></p>
        <?php } ?>

        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" value="" id="username" placeholder="Username..." />
        <?php if(!empty($error['username'])) { ?>
        <p class="error"><?php echo $error['username']; ?></p>
        <?php } ?>

        <label for="email">Email:</label>
        <input type="email" name="email" value="" id="email" placeholder="Email..." />
        <?php if(!empty($error['email'])) { ?>
        <p class="error"><?php echo $error['email']; ?></p>
        <?php } ?>

        <label for="password">Password:</label>
        <input type="password" name="password" value="" id="password" placeholder="Password" />
        <?php if(!empty($error['password'])) { ?>
        <p class="error"><?php echo $error['password']; ?></p>
        <?php } ?>

        <select name="gender">
            <option value="">--Chọn giới tính--</option>
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select>
        <?php if(!empty($error['gender'])) { ?>
        <p class="error"><?php echo $error['gender']; ?></p>
        <?php } ?>

        <input type="submit" id="btn-reg" name="btn_reg" value="Đăng ký" />
        <?php if(!empty($error['account'])) { ?>
        <p class="error"><?php echo $error['account']; ?></p>
        <?php } ?>
    </form>
</div>

<?php 
   get_footer();
?>