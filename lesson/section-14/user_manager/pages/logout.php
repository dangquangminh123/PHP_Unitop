<?php 
    echo "Đăng xuất";
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);

    redirect('?page=login');
?>