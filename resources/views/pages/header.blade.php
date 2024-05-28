<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('public/frontend/css/header.css') }}">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Lưu trạng thái hover vào sessionStorage khi hover vào một liên kết
    document.querySelectorAll('.title_func a').forEach(link => {
        link.addEventListener('mouseenter', () => {
            sessionStorage.setItem('activeLink', link.getAttribute('href'));
        });
    });

    // Lấy trạng thái hover từ sessionStorage khi tải lại trang
    const activeLink = sessionStorage.getItem('activeLink');
    if (activeLink) {
        document.querySelectorAll('.title_func a').forEach(link => {
            if (link.getAttribute('href') === activeLink) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    }

    // Kiểm tra URL hiện tại và thêm lớp active cho nút tương ứng khi quay lại trang giới thiệu
    window.addEventListener('popstate', () => {
        const currentURL = window.location.href;
        document.querySelectorAll('.title_func a').forEach(link => {
            if (link.getAttribute('href') === currentURL) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    });
});

    </script>
</head>
<body>
<header>
    <script src = "header.js"></script>
    <div class="top-bar">
        <div class="logo">
            <img class="logo-img" src="{{('public/frontend/images/logo.png')}}">
            <div class = "logo-child-2">
                <p class="logo-blinkiy">BLINKIY</p>
                <p class="logo-phongthuy">PHONG THỦY</p>
            </div>
        </div>
        <div class = "search_bar">
            <button class = "search_button">
                <img class = "search_icon" src="{{('public/frontend/images/icons8-search.svg')}}">
            </button>
            <input class= "search_box" type = "text" placeholder = "Tìm kiếm...">
        </div>
        <div class="top-bar-options">
            <div class="top-bar-options-object">
                <i class="fa-solid fa-user"></i>
                <a class="top-bar-options-object-title" href="">Tài khoản</a>
            </div>
            <div class="top-bar-options-object">
                <i class="fa-solid fa-heart"></i>
                <a class="top-bar-options-object-title" href="">Yêu thích</a>
            </div>
            <div class="top-bar-options-object">
                <i class="fa-solid fa-cart-shopping"></i>
                <a class="top-bar-options-object-title" href="">Giỏ hàng</a>
            </div>
        </div>
    </div>

    <nav class="menu-bar">
        <ul class="mainmenu">
            <li class="mainmenu-li">
                <a class="menu-bar-title" href="">TRANG CHỦ</a>
            </li>
            <li class="mainmenu-li">
                <a class="menu-bar-title" href="">SẢN PHẨM</a>
                <ul class="product-submenu">
                    <li><a href="">Vòng</a></li>
                    <li><a href="">Dây treo</a></li>
                </ul>
            </li>
            <li class="mainmenu-li">
                <a class="menu-bar-title" href="Gioithieu.php">GIỚI THIỆU</a>
            </li>
            <li class="mainmenu-li">
                <a class="menu-bar-title" href="">BLOG</a>
            </li>
            <li class="mainmenu-li">
                <a class="menu-bar-title" href="Lienhe.php">LIÊN HỆ</a>
            </li>
        </ul> 
    </nav></header>
</body>
</html>