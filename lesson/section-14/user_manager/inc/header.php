<html>

<head>
    <title>USER_MANAGER Phần 16</title>
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <a id="logo" href="">UNITOP</a>
            <div id="user-login">
                <p>Xin chào <strong><?php if(is_login()) echo info_user('fullname'); ?></strong>(<a
                        href="?page=logout">Thoát</a>)</p>
            </div>

            <ul id="main-menu">
                <li><a href="?page=home">Trang chủ</a></li>
                <li><a href="?page=about">Giới thiệu</a></li>
                <li><a href="?page=news">Tin Tức</a></li>
                <li><a href="?page=product">Sản phẩm</a></li>
                <li><a href="?page=course">Khóa học</a></li>
                <li><a href="?page=contact">Liên hệ</a></li>
            </ul>
        </div>