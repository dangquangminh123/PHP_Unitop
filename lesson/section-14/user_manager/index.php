<?php
    session_start();
    ob_start();
    require './data/users.php';
    require './lib/data.php';
    require './lib/users.php';
    require './lib/url.php';
   require './lib/template.php';
  
?>

<?php
    $page = !empty($_GET['page']) ? $_GET['page'] : 'home';
    $path = "pages/{$page}.php";
    // Trường hợp nếu có remember_me
    if(!empty($_COOKIE['is_login'])) {
        $_SESSION['is_login'] = $_COOKIE['is_login'];
        $_SESSION['user_login'] = $_COOKIE['user_login'];
    }

    // $page = $_GET['page'];
    if(!is_login() && $page != 'login') {
        redirect('?page=homelogin');
    }
    

    if(file_exists($path)) {
        require $path;
    }else {
       require './inc/404.php';
    }
?>