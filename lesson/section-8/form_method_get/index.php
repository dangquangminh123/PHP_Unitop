<?php
    // Get dữ liệu từ URL
    $mod = $_GET['mod'];
    $act = $_GET['act'];
    $id = $_GET['id'];
    
    echo "{$mod} - {$act} - {$id}";
    
    function show_array($data) {
       if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
       } 
    }
    // show_array($_SERVER);
    
    if(isset($_GET['btn_Search'])) {
        show_array($_GET);
        $q = $_GET['q'];
        echo $q;
    }
?>
<html>

<head>
    <title>truyền dữ liệu Form method GET</title>
</head>

<body>
    <a href="?mod=product&act=detail&id=1268">Sản Phẩm</a>

    <h1>Tìm Kiếm</h1>
    <form action="" method="GET">
        Tìm kiếm: <input type="text" name="q" id="" />
        <input type="submit" name="btn_Search" value="Search" />
    </form>
</body>

</html>