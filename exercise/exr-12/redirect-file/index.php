<?php 
   session_start();
   if(isset($_SESSION['is_login'])) {
        echo "Thành công";
   } else {
    echo "Chưa login";
   }
?>