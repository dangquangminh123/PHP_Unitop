<?php
    function show_array($data) {
       if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
       } 
    }
    // show_array($_SERVER);
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo "{$username}-{$password}";
    }
?>

<html>

<head>
    <title>truyền dữ liệu Form method POST</title>
</head>

<body>
    <form action="" method="post">
        Name: <input type="text" name="username" id="" /><br /><br />
        Password: <input type="password" name="password" id="" /><br />
        <input type="submit" name="btn_login" value="login" />
    </form>
</body>

</html>