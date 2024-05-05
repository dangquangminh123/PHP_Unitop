<?php 
    // Xóa file ảnh
    $file_url = 'uploads/avatar.jpg';
    if(@unlink($file_url)) {
        echo "Xóa file: {$file_url} thành công";
    } else {
        echo "File {$file_url} không còn tồn tại";
    }
?>