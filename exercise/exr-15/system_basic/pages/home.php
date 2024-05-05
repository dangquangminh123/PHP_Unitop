<?php 
    $send_to_email = "phanvancuong.qt@gmail.com";
    $send_to_fullname = "Phan Văn Cương";
    $subject = "Test hàm Send_mail()";
    $content = "Nội dung email gửi từ hàm <b>send_mail()</b>";
    
    send_mail($send_to_email, $send_to_fullname, $subject, $content);
?>
<div id="content">
    <h1>Trang chủ</h1>
</div>