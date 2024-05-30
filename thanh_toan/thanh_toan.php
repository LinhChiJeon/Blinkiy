<?php
session_start();
    
    $hoten = isset($_SESSION['name']) ? $_SESSION['name'] : '';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
    $sdt = isset($_SESSION['phone_num']) ? $_SESSION['phone_num'] : '';
    $province = isset($_SESSION['province']) ? $_SESSION['province'] : '';
    $district = isset($_SESSION['district']) ? $_SESSION['district'] : '';
    $address = isset($_SESSION['address']) ? $_SESSION['address'] : '';
    $apartment = isset($_SESSION['apartment']) ? $_SESSION['apartment'] : '';
    $note = isset($_SESSION['note']) ? $_SESSION['note'] : '';
    $file = isset($_SESSION['file_input']) ? $_SESSION['file_input'] : '';

    include "conn.php";
    $tinh = "";
    if ($province) {
        $tinhQuery = $connect->query("SELECT TenTinh FROM TINH WHERE MaTinh = '$province'");
        if ($tinhQuery) {
            $tinhData = $tinhQuery->fetch_assoc();
            $tinh = isset($tinhData['TenTinh']) ? $tinhData['TenTinh'] : '';
        }
    }

    $huyen = "";
    if ($district) {
        $huyenQuery = $connect->query("SELECT TenHuyen FROM HUYEN WHERE MaHuyen = '$district'");
        if ($huyenQuery) {
            $huyenData = $huyenQuery->fetch_assoc();
            $huyen = isset($huyenData['TenHuyen']) ? $huyenData['TenHuyen'] : '';
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_payment'])) {
        include "conn.php";

        $hoten = isset($_SESSION['name']) ? $_SESSION['name'] : '';
        $email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
        $sdt = isset($_SESSION['phone_num']) ? $_SESSION['phone_num'] : '';
        $province = isset($_SESSION['province']) ? $_SESSION['province'] : '';
        $district = isset($_SESSION['district']) ? $_SESSION['district'] : '';
        $address = isset($_SESSION['address']) ? $_SESSION['address'] : '';
        $apartment = isset($_SESSION['apartment']) ? $_SESSION['apartment'] : '';
        $note = isset($_SESSION['note']) ? $_SESSION['note'] : '';
        $file = isset($_SESSION['file_input']) ? $_SESSION['file_input'] : '';
        $pttt = $_POST['pttt'];
        $triGia = 0;

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');

        // Generate random ID with format HDVLxxxxxx
        function generateRandomId($length = 6) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = 'HDVL';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $id = generateRandomId();

        $fullAddress = ($apartment ? $apartment . ', ' . $address : $address) . ', ' . $huyen . ', ' . $tinh;

        $sql = "INSERT INTO hoadon_vanglai(`MaHDVL`, `TenKH`, `Email`, `SDT`, `DiaChi`, `Note`, `File`, `TriGia`, `NgDH`, `PTTT`) VALUES ('$id', '$hoten', '$email', '$sdt', '$fullAddress', '$note', '$file','$triGia', '$date', '$pttt')";
        $result = $connect->query($sql);
        $connect->close();

        $_SESSION['id'] = $id;

        header("Location: hoa_don.php");
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_thanh_toan.css" />
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
            <li class="current">Thanh toán</li>
        </ul>
    </div>

    <form method="POST" action="" class="check_out">
        <div class="confirm">
            <p class="confirm_header">Xác nhận đơn hàng</p>
            <div class="confirm_info">
                <p>Họ tên: <span id="hoten"><?php echo htmlspecialchars($hoten); ?></span></p>
                <p>Email: <span id="email"><?php echo htmlspecialchars($email); ?></span></p>
                <p>SĐT: <span id="dthoai"><?php echo htmlspecialchars($sdt); ?></span></p>
                <p>Địa chỉ: 
                    <?php if ($apartment) echo '<span id="can_ho">' . htmlspecialchars($apartment) . ', </span>'; ?>
                    <span id="address"><?php echo htmlspecialchars($address); ?></span>, 
                    <span id="quan_huyen"><?php echo htmlspecialchars($huyen); ?></span>,
                    <span id="tinh"><?php echo htmlspecialchars($tinh); ?></span>
                </p>        
                <p>Mô tả: <span id="mota"><?php echo htmlspecialchars($note); ?></span></p>
                <p>Hình ảnh:</p> 
                <?php if (isset($_SESSION['file_input'])): ?>
                    <img src="<?php echo $_SESSION['file_input']; ?>" alt="Uploaded File" style="max-width: 100%; height: auto;">
                <?php else: ?>
                    <p>Không có ảnh nào được chọn</p>
                <?php endif; ?>
            </div>
            <hr>
            <p class="payment_opt_header">Phương thức thanh toán</p>
                <div class="payment_opt">
                    <div class="opt">
                        <input type="radio" id="momo" name="pttt" value="1">
                        <label for="momo">Thanh toán bằng MoMo</label>
                    </div>
                    <div class="opt">
                        <input type="radio" id="bank" name="pttt" value="2">
                        <label for="bank">Thanh toán bằng ngân hàng</label>
                    </div>
                    <div class="opt">
                        <input type="radio" id="tien_mat" name="pttt" value="3">
                        <label for="tien_mat">Thanh toán khi nhận hàng</label>
                    </div>
                </div>
        </div>

        <div class="info_container">
            <div class="info">
                <div class="items_list">
                    <div class="item">
                        <img src="/xampp/htdocs/code/do_an/pics/Rectangle 85.png" alt="Vòng tay hạt cườm xinh xắn (Mẫu 1)">
                        <p class="item_name">Vòng tay hạt cườm xinh xắn (Mẫu 1)</p>
                        <p class="item_color">Màu: Trắng</p>
                        <p class="item_size">Kích cỡ: 17</p>
                        <p class="item_quantity">1</p>
                        <p class="item_total">18,000 ₫</p>
                    </div>
                </div>
                <div class="fees">
                    <hr>
                    <div class="items_total">
                        <span class="total_header">Thành tiền</span>       
                        <span class="total">0</span>
                    </div>
                    <div class="shipping_fee">
                        <span class="shipping_header">Phí giao hàng</span> 
                        <span class="shipping">0</span>
                    </div>
                    <hr>
                </div>
                <div class="sum_container">
                    <span>Tổng tiền</span> 
                    <span class="sum" name="sum">0</span>
                </div>
                <div class="discount_container">
                    <input type="Input" name="discount" placeholder="Mã giảm giá...">
                        <button class="apply_discount">
                            <img class="discount_icon" src="/xampp/htdocs/code/do_an/pics/discount_ticket.png" alt="discount">Áp dụng
                        </button>
                </div>
                <div class="pay">
                    <button type="submit" class="pay_button" name="submit_payment">Thanh toán</button>
                </div>
            </div>
        </div>
    </form>

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
                    // Uncomment the line below if you want to automatically trigger the download
                    // a.click();
                }
            }
        });
    </script>
</body>
</html>
