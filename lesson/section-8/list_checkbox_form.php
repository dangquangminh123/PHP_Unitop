<?php 
    if(isset($_POST['btn_add'])) {
        
        if(isset($_POST['cat'])) {
            // Cách xử lý 1
            foreach($_POST['cat'] as $item) {
                // Xử lý phần tử được chọn
                echo $item."<br>";
            }   

            // Cách xử lý 2
            // $list_check = implode(',',$_POST['cat']);
            // echo $list_check;
        }
    }
   
  
    
?>
<html>

<head>
    <title>Lấy dữ liệu từ List Checkbox</title>
</head>

<body>

    <h1>Đăng ký</h1>
    <form action="" method="POST">
        <input type="checkbox" name="cat[]" value="1" id="cat_1" />
        <label for="cat_1">thể thao</label> <br /> <br /> <br />
        <input type="checkbox" name="cat[]" value="2" id="cat_2" />
        <label for="cat_2">Xã hội</label> <br /> <br /> <br />

        <input type=" submit" name="btn_add" value="Thêm bài viết" />
    </form>
</body>

</html>