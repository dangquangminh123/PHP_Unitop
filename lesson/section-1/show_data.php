<?php 
    // Xuất dữ liệu trong php
    
    // Xuất dữ liệu echo
    $a = 100;
    // Dấu ' thì sẽ không convert giá trị của a thành giá trị number;
    echo "Giá trị của a: $a";
    
    // Xuất dữ liệu print_r
    $my_array = array('A', 'B', 'C');

    echo "<pre>";
    print_r($my_array);
    echo "</pre>";
?>
<html>

<head>
    <title>Cú pháp viết php</title>
</head>


<body>
    <style>
    h1 {
        color: red;
    }
    </style>
    <h1>Xin chào tôi là <?php echo "biến thể php";?></h1>
</body>

</html>