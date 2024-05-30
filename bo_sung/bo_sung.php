<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_bo_sung.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Shopping Cart | Blinkiy</title>
    </head>
<body>
    <header>
        <div class="top-bar">
            <div class="logo">
                <img class="logo-img" src="/pics/Logo_ko_nen1.png">
                <p class="logo-blinkiy">BLINKIY</p>
                <p class="logo-phongthuy">PHONG THỦY</p>
            </div>
            <div class="search-bar">
                <div class="search-bar-cover">
                    <i class="fas fa-search"></i>
                    <input type="input" class="search-bar-input" id="search-bar-input" name="search-bar-input" placeholder="Tìm kiếm"/>
                </div>
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
                        <li><a href="">Vòng tay</a></li>
                        <li><a href="">Dây chuyền</a></li>
                        <li><a href="">Nhẫn</a></li>
                        <li><a href="">Charm</a></li>
                    </ul>
                </li>
                <li class="mainmenu-li">
                    <a class="menu-bar-title" href="">GIỚI THIỆU</a>
                </li>
                <li class="mainmenu-li">
                    <a class="menu-bar-title" href="">BLOG</a>
                    <ul class="product-submenu">
                        <li><a href="">Cung-Mệnh</a></li>
                        <li><a href="">Cẩm nang Blinkiy</a></li>
                    </ul>
                </li>
                <li class="mainmenu-li">
                    <a class="menu-bar-title" href="">LIÊN HỆ</a>
                </li>
            </ul> 
        </nav>
        <div class="bg-menu">
            <img class="bg-menu-img" src="/pics/menu.jpg.crdownload">
        </div>
    </header>
    <div class="process"> 
        <ul>
            <li class="current">Vận chuyển</li> >
            <li class="current">Thông tin bổ sung</li> >
            <li>Thanh toán</li>
        </ul>
    </div>
    <div class="addition">
        <p class="addition_header">Thông tin bổ sung</p>
        <form class="addition_form" method="POST" action="#" enctype="multipart/form-data">
                <span id="header_1">Hãy cho chúng tôi biết yêu cầu đặc biệt của bạn về chiếc vòng nhé!</span>
                <textarea id="mo_ta" name="mo_ta" rows="10" cols="100" placeholder="Chi tiết sản phẩm"></textarea><br>
                <span id="header_2">Hình ảnh chi tiết yêu cầu của bạn</span>
                <div class="img_input">
                    <label for="file_input" class="custom-file-upload">Chọn ảnh</label>
                    <input type="file" id="file_input" name="file_input">
                    <a href="#" id="file_link"><p id="file_name">Chưa có ảnh nào được chọn</p></a>
                </div>
                <div class="return_container">
                    <span><a href="van_chuyen.php" class="return">&lt; Quay lại</a></span>
                </div>
                <input type="Submit" class="submit" Value="Tiếp tục" name="Submit">
        </form>
    </div>
    <footer>
        <div class="section_container">
            <div class="footer_section">
                <h3>Về chúng tớ</h3>
                <a href="#">Trang chủ</a><br>
                <a href="#">Sản phẩm</a><br>
                <a href="#">Giới thiệu</a><br>
                <a href="#">Liên hệ</a><br>
              </div>
              <div class="footer_section">
                <h3>Theo dõi chúng tớ</h3>
                <a href="#"><i class="fa-brands fa-facebook-f"></i>Facebook</a><br>
                <a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a><br>
                <a href="#"><i class="fa-brands fa-tiktok"></i>Tiktok</a><br>
              </div>
              <div class="footer_section">
                <h3>Liên hệ</h3>
                <p><a href="mailto:Blinkiy.is334@gmail.com">Blinkiy.is334@gmail.com</a></p>
                <p>Hotline: 0814576804</p>
              </div>
              <div class="footer_section">
                  <h3>Cửa hàng</h3>
                  <p>Trường Đại học Công nghệ Thông tin, Đại học Quốc gia, TP Hồ Chí Minh</p>
              </div>
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $('#file_input').on('change', function() {
                const fileInput = this;
                const fileNameSpan = $('#file_name');
                const fileLink = $('#file_link');

                if (fileInput.files.length > 0) {
                    const file = fileInput.files[0];
                    fileNameSpan.text(file.name);
                    fileLink.off('click').on('click', function(e) {
                        e.preventDefault();
                        const fileURL = URL.createObjectURL(file);
                        const newWindow = window.open('fileDisplay.html');
                        newWindow.onload = function() {
                            newWindow.displayFile(fileURL, file.type, file.name);
                        };
                    });
                } else {
                    fileNameSpan.text('Chưa có ảnh nào được chọn');
                    fileLink.attr('href', '#');
                }
            });
        });
    </script>
    <?php
        if (isset($_POST['Submit']) && $_POST['Submit'] == "Tiếp tục") {
            $note = isset($_POST['mo_ta']) ? $_POST['mo_ta'] : '';
            $file = isset($_FILES['file_input']) ? $_FILES['file_input'] : null;
        
            // Handle file upload
            if ($file && $file['error'] == UPLOAD_ERR_OK) {
                $uploadDir = 'uploads/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                $uploadFile = $uploadDir . basename($file['name']);
                if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
                    $_SESSION['file_input'] = $uploadFile;
                } else {
                    echo "File upload failed!";
                }
            }
        
            $_SESSION['note'] = $note;
            echo "<script>window.location.href = 'http://localhost:81/code/do_an/thanh_toan/thanh_toan.php';</script>";
        }
    ?>
</body>
</html>