<?php
   require './db/config.php';
   require './db/database.php';
   
   require './lib/data.php';
   require './lib/url.php';
   require './lib/users.php';
   require './lib/template.php';
    // get_header();
?>

<?php
db_connect($config);
    // $page = $_GET['page'];
    $mod = !empty($_GET['mod']) ? $_GET['mod'] : 'home';
    $act = !empty($_GET['act']) ? $_GET['act'] : 'main';
    $path = "modules/{$mod}/{$act}.php";

    if(file_exists($path)) {
        require $path;
    }else {
       require './inc/404.php';
    }
?>

<?php

// get_footer();
?>