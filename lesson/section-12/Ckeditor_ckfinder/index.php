<?php 
    if(isset($_POST['btn_add'])) {
        echo $_POST['post_content'];
    }    
?>
<html>

<head>
    <title>Tích hợp trình soạn thảo văn bản vào website</title>
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <style>
    #content {
        width: 960px;
        margin: 0px auto;
    }
    </style>
    <div id="content">
        <h1>Tích hợp ckeditor vào website</h1>
        <form method="post">
            <textarea name="post_content" class="ckeditor" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Thêm dữ liệu" name="btn_add" />
        </form>
    </div>
</body>

</html>