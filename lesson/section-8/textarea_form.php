<?php 
    if(isset($_POST['btn_add'])) {
        if(empty($_POST['post_detail'])) {
            // Xử lý thông báo lỗi
            echo "Bạn cần nhập vào thông tin chi tiết bài viết";
        }else {
            $post_detail = $_POST['post_detail'];
            echo $post_detail;
        }
    }
?>
<html>

<head>
    <title>Lấy dữ liệu từ textarea</title>
</head>

<body>

    <h1>Thêm bài viết textarea</h1>
    <form action="" method="GET">
        <label>Chi tiết</label><br /><br />
        <textarea name="post_detail" cols="50" rows="50"></textarea> <br /><br />
        <input type="submit" name="btn_add" value="Thêm bài viết" />
    </form>
</body>

</html>