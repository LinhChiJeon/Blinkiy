<?php
    session_start();

    $id = isset($_SESSION['id']) ? $_SESSION['id'] : null;
    include "conn.php";
    $sql = "SELECT * FROM hoadon_vanglai WHERE MaHDVL = '$id'";
    $result = $connect->query($sql);
    $order = $result->fetch_assoc();

    $hoten = isset($order['TenKH']) ? $order['TenKH'] : '';
    $email = isset($order['Email']) ? $order['Email'] : '';
    $sdt = isset($order['SDT']) ? $order['SDT'] : '';
    $fullAddr = isset($order['DiaChi']) ? $order['DiaChi'] : '';
    $note = isset($order['Note']) ? $order['Note'] : '';
    $file = isset($order['File']) ? $order['File'] : '';
    $pttt = isset($order['PTTT']) ? $order['PTTT'] : '';
    $triGia = isset($order['TriGia']) ? $order['TriGia'] : 0;
    $ngayDH = isset($order['NgDH']) ? $order['NgDH'] : 0;
    
    $connect->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_hoa_don.css" />
    <title>Hóa Đơn | Blinkiy</title>
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

    <div class="invoice">
        <h1>Hóa Đơn</h1>
        <div class="invoice_section">
            <h2>Thông tin khách hàng</h2>
            <p>Họ tên: <?php echo htmlspecialchars($hoten); ?></p>
            <p>Email: <?php echo htmlspecialchars($email); ?></p>
            <p>SĐT: <?php echo htmlspecialchars($sdt); ?></p>
            <p>Địa chỉ: <?php echo htmlspecialchars("$fullAddr"); ?></p>
        </div>
        <div class="invoice_section">
            <h2>Thông tin đơn hàng</h2>
            <p>Mã đơn hàng: <?php echo htmlspecialchars($id); ?></p>
            <p>Ngày đặt hàng: <?php echo htmlspecialchars($ngayDH); ?></p>
            <p>Mô tả: <?php echo htmlspecialchars($note); ?></p>
            <p>Hình ảnh: <span id="img_des"><?php echo htmlspecialchars($file); ?></span></p>
        </div>
        <div class="invoice_section">
            <h2>Phương thức thanh toán</h2>
            <?php
                switch ($pttt) {
                    case 1:
                        echo '<p>Thanh toán bằng MoMo</p>';
                        break;
                    case 2:
                        echo '<p>Thanh toán bằng ngân hàng</p>';
                        break;
                    case 3:
                        echo '<p>Thanh toán khi nhận hàng</p>';
                        break;
                }
            ?>
        </div>
        <div class="invoice_section">
            <h2>Chi tiết sản phẩm</h2>
            <!-- Add your product details here -->
            <div class="item">
                <img src="/xampp/htdocs/code/do_an/pics/Rectangle 85.png" alt="Vòng tay hạt cườm xinh xắn (Mẫu 1)">
                <p class="item_name">Vòng tay hạt cườm xinh xắn (Mẫu 1)</p>
                <p class="item_color">Màu: Trắng</p>
                <p class="item_size">Kích cỡ: 17</p>
                <p class="item_quantity">1</p>
                <p class="item_total">18,000 ₫</p>
            </div>
        </div>
        <div class="invoice_section">
            <p>Tổng tiền: <?php echo htmlspecialchars($triGia); ?><p>
            <p>Giảm giá: 0</p>
            <p>Phí giao hàng: 0</p>
            <p>Thành tiền: <?php echo htmlspecialchars($triGia); ?></p>
        </div>
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
        document.addEventListener("DOMContentLoaded", function() {
            var file = "<?php echo htmlspecialchars($file); ?>";
            if (file) {
                var imgDes = document.getElementById("img_des");
                var fileExtension = file.split('.').pop().toLowerCase();
                var imageExtensions = ["jpg", "jpeg", "png", "gif"];
                var nonImageExtensions = ["pdf", "doc", "docx"];

                if (imageExtensions.includes(fileExtension)) {
                    var img = document.createElement("img");
                    img.src = file;
                    img.style.maxWidth = "100%";
                    imgDes.innerHTML = "";
                    imgDes.appendChild(img);
                } else if (nonImageExtensions.includes(fileExtension)) {
                    var a = document.createElement("a");
                    a.href = file;
                    a.download = file;
                    a.innerText = "Download file";
                    imgDes.innerHTML = "";
                    imgDes.appendChild(a);
                }
            }
        });
    </script>
</body>
</html>
