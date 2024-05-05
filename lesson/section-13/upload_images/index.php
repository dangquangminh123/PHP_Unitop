<?php 
    require "./lib/data.php";
    if(isset($_FILES['file'])) {
        show_array($_FILES);
        $error = array();
            $upload_dir = 'uploads/';
        // Đường dẫn file sau khi upload
        $upload_file = $upload_dir.$_FILES['file']['name'];
        // Xử lý upload đúng file ảnh
        $type_allow = array('png', 'jpg', 'gift', 'jpeg');
        // pathinfo lấy đuôi file ảnh và có tham số PATHINFO_EXTENSION phía sau để lấy đuôi file
        $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        if(!in_array(strtolower($type), $type_allow)) {
            $error['type'] = "Chỉ được upload file có đuôi png, jpg, gif, jpeg";
        }else {
            // Upload file có kích thước cho phép (<20MB ~ 29.000.000 Byte)
            $file_size = $_FILES['file']['size'];
            if($file_size > 29000000) {
                $error['file_size'] = "chỉ được upload file bé hơn 20 MB";
            } 
            //Kiểm tra xem file đó trùng 1 file đã tồn tại trên hệ thống hay không
            if(file_exists($upload_file)) {
                
                $file_name = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
                $new_file_name = $file_name . ' - Copy.';
                $new_upload_file = $upload_dir . $new_file_name . $type;
                $k = 1;
                while(file_exists($new_upload_file)) {
                    $new_file_name = $file_name . " - Copy({$k}).";
                    $k++;
                    $new_upload_file = $upload_dir . $new_file_name . $type; 
                }
                
                $upload_file = $new_upload_file;   
            }
        }
        // Sau khi kiểm tra thông tin về file xong tới lượt việc thực thi thành công việc hiển thị file
        if(empty($error)){
            echo "File đạt chuẩn";
            if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
                echo "<a href='$upload_file'>Download: {$_FILES['file']['name']}</a><br/>";
                echo "<img src='{$upload_file}'/>";
            }else {
                echo "Upload file thất bại";
            }
        }else {
            show_array($error);
        }
    }
?>

<html>

<head>
    <title>Upload Images lên server với php</title>
</head>

<body>
    <h1>Upload images</h1>
    <form enctype="multipart/form-data" action="" method="POST">
        Chọn images<input type="file" name="file" /><br /> <br />
        <input type="submit" value="Upload File" />
    </form>
</body>

</html>