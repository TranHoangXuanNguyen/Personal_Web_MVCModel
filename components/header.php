<?php
    include '../assets/css/header.css.php';
    include '../assets/css/root.css.php';
?>

<div class="app">
        <header class="header">
            <div class="logo">
                <img srcset="../img/img/Logo.png 2x" alt="LOGO">
            </div>
            <div class="header-menu">
                <ul>
                    <li>
                        <a href="/Home">Trang chủ</a>
                    </li>
                    <li>
                        <a href="/AboutUs">Về chúng tôi</a>
                    </li>
                    <li>
                        <a href="/Order">Đặt món</a>
                    </li>
                    <li>
                        <a href="/Blog">Blog</a>
                    </li>
                </ul>
            </div>
            <div class="header-acc">
                <div class="acc" onclick="window.location.href='http://127.0.0.1:5500/src/html/cart.html'"><img srcset="../img/cart1.png 2x" alt="" /></div>
                
                <div class="acc1" onclick="goToLoginPage()"><img srcset="../img/userH2.png 2x" alt="" /></div>
            </div>
            <div class="user--option">
                <ul class="user--option--menu">
                  <li class="user--option--menu--item" onclick="userInformation()">Thông tin tài khoản</li>
                  <li class="user--option--menu--item" onclick="logOut()">Đăng xuất</li>
                </ul>
            </div>
        </header>