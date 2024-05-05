<?php 
session_start();
    unset($_SESSION['is_login']);
    unset($_SESSION['use_login']);
    header("Location: index.php");
?>