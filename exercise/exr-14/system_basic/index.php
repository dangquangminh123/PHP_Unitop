<?php
   
   require './lib/template.php';
   require './config/email.php';
   require './lib/data.php';
   require './lib/email.php';
   require './data/post.php';
    get_header();
?>

<?php
    // $page = $_GET['page'];
    $page = !empty($_GET['page']) ? $_GET['page'] : 'home';
    $path = "pages/{$page}.php";

    if(file_exists($path)) {
        require $path;
    }else {
       require './inc/404.php';
    }
?>

<?php
  
    get_footer();
?>