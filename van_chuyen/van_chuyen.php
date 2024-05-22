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
            <li class="current">Xem lại đơn hàng</li> >
            <li class="current">Vận chuyển</li> >
            <li>Thông tin bổ sung</li> >
            <li>Thanh toán</li>
        </ul>
    </div>
    <div class="details">
        <p class="header_details">VẬN CHUYỂN</p>
        <p class="instruction">Hãy điền địa chỉ của bạn hoặc <a href="#log_in">Đăng nhập</a></p>
        <form id="input_form" method="get" action="#">
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
                        <select id="city" name="city" required> 
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
                            <option value="">Chọn quận huyện</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="street">Số nhà, đường:</label>
                        <input type="text" id="street" name="street" required>
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
                        <button class="submit">Tiếp tục</button>
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
    <script src="script_van_chuyen.js">
        const phoneInputField = document.querySelector("#phone_num");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
        $(document).ready(function(){
            $('#city').change(function(){
        var city = $(this).val();
        if(city){
            $.ajax({
                type: 'GET',
                url: '',
                data: {city: city, action: 'fetch_district'},
                success: function(response){
                    $('#district').html(response);
                }
            });
        }else{
            $('#district').html('<option value="">Chọn quận huyện</option>');
        }   
        });
    });
    </script>
    <?php
        if(isset($_GET['action']) && $_GET['action'] == 'fetch_district'){
            include "conn.php"; 
            $maTinh = $_GET['city'];
            $danhsachHuyen = $connect->query("SELECT * FROM HUYEN WHERE MaTinh = '$maTinh'");
            echo '<option value="">Chọn phòng ban</option>';
            while ($h = $danhsachHuyen->assoc()){
                echo '<option value="'.$h['MaHuyen'].'">'.$h['TenHuyen'].'</option>';
            }
            $connect->close();
            exit;
        }
    ?>
</body>
</html>