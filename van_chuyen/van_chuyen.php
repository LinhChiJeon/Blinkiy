<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style_van_chuyen.css" />
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
            <li>Thông tin bổ sung</li> >
            <li>Thanh toán</li>
        </ul>
    </div>
    <div class="details">
        <p class="header_details">VẬN CHUYỂN</p>
        <p class="instruction">Hãy điền địa chỉ của bạn hoặc <a href="#log_in">Đăng nhập</a></p>
        <form id="input_form" method="POST" action="#">
            <table class="input_container">
                <tr>
                    <td colspan="2">
                        <label for="name">Họ tên:</label>
                        <input type="text" id="name" name="name" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" required>
                    </td>
                    <td>
                        <label for="phone_num">Điện thoại:</label>
                        <input type="tel" id="phone_num" name="phone_num" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select id="province" name="province" required> 
                            <option value="">Chọn tỉnh thành</option>
                            <?php
                                include "conn.php"; 
                                $danhsachTinh = $connect->query("SELECT * FROM TINH");
                                while ($t = $danhsachTinh->fetch_assoc())
                                {
                                    echo "<option value='".$t['MaTinh']."'>".$t['TenTinh']."</option>";
                                }
                                $connect->close();
                            ?>
                        </select>
                    </td>
                    <td>
                        <select id="district" name="district" required>
                            <option value="">Chọn quận, huyện</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="address">Số nhà, đường, phường, xã:</label>
                        <input type="text" id="address" name="address" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="apartment">Số phòng, tòa:</label>
                        <input type="text" id="apartment" name="apartment">
                    </td>
                </tr>
                <tr>
                    <td class="submit_button" align="center" colspan="2">
                        <input type="Submit" class="submit" Value="Tiếp tục" name="Submit">
                    </td>
                </tr>
            </table>
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
            $('#province').change(function() {
                var province = $(this).val();
                if (province) {
                    $.ajax({
                        type: 'POST',
                        url: '',
                        data: { province: province, action: 'fetch_district'},
                        success: function(response) {
                            $('#district').html(response);
                        }
                    });
                } else {
                    $('#district').html('<option value="">Chọn quận, huyện</option>');
                }
            });
        });
    </script>

    <?php
        if (isset($_POST['action']) && $_POST['action'] == 'fetch_district') {
            include "conn.php";
            $maTinh = $_POST['province'];
            $danhsachHuyen = $connect->query("SELECT * FROM HUYEN WHERE MaTinh = '$maTinh'");
            
            echo '<option value="">Chọn quận, huyện</option>';
            while ($h = $danhsachHuyen->fetch_assoc()) {
                echo '<option value="'.$h['MaHuyen'].'">'.$h['TenHuyen'].'</option>';
            }
            
            $connect->close();
        }

        if (isset($_POST['Submit']) && $_POST['Submit']=="Tiếp tục")
        {
            $hoten = $_POST['name'];
            $email = $_POST['email'];
            $sdt = $_POST['phone_num'];
            $province = $_POST['province'];
            $district = $_POST['district'];
            $address = $_POST['address'];
            $apartment = $_POST['apartment'];

            $_SESSION['name'] = $hoten;
            $_SESSION['email'] = $email;
            $_SESSION['phone_num'] = $sdt;
            $_SESSION['province'] = $province;
            $_SESSION['district'] = $district;
            $_SESSION['address'] = $address;
            $_SESSION['apartment'] = $apartment;
            echo "<script>window.open('http://localhost:81/code/do_an/bo_sung/bo_sung.php', '_self');</script>";
        }
    ?>
</body>
</html>