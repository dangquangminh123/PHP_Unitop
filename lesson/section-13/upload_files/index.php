<?php 
    require "./lib/data.php";
    if(isset($_FILES['file'])) {
        show_array($_FILES);

        // Thư mục chứa file upload
        $upload_dir = 'uploads/';
        // Đường dẫn file sau khi upload
        $upload_file = $upload_dir.$_FILES['file']['name'];

        if(move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo "<a href='$upload_file'>Download: {$_FILES['file']['name']}</a>";
        }else {
            echo "Upload file thất bại";
        }
    }
?>

<html>

<head>
    <title>Upload file lên server với php</title>
</head>

<body>
    <h1>Upload files</h1>
    <form enctype="multipart/form-data" action="" method="POST">
        Chọn files<input type="file" name="file" /><br /> <br />
        <input type="submit" value="Upload File" />
    </form>
</body>

</html>