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
            <li class="current">Xem lại đơn hàng</li> >
            <li class="current">Vận chuyển</li> >
            <li class="current">Thông tin bổ sung</li> >
            <li class="current">Thanh toán</li>
        </ul>
    </div>

    <div class="check_out">

        <div class="confirm">
            <p class="confirm_header">Xác nhận đơn hàng</p>
            <div class="confirm_info">
                <p>Họ tên: <span id="hoten"></span></p>
                <p>Email: <span id="email"></span></p>
                <p>SĐT: <span id="dthoai"></span></p>
                <p>Địa chỉ: 
                    <span id="can_ho"></span>, 
                    <span id="duong_so"></span>, 
                    <span id="phuong_xa"></span>,
                    <span id="quan_huyen"></span>,
                    <span id="tinh_tp"></span></p>        
                <p>Mô tả: <span id="mota"></span></p>
                <p>Hình ảnh: <span id="img_des"></span></p>        
            </div>
            <hr>
        </div>

        <div class="payment_opt">
            <p class="payment_opt_header">Phương thức thanh toán</p>
            <form>
                <input type="radio" id="momo" name="pttt" value="momo">
                <label for="momo">Thanh toán bằng MoMo</label><br>
                <input type="radio" id="bank" name="pttt" value="bank">
                <label for="bank">Thanh toán bằng ngân hàng</label><br>
                <input type="radio" id="tien_mat" name="pttt" value="tien_mat">
                <label for="tien_mat">Thanh toán khi nhận hàng</label>
            </form>
        </div>    

        <div class="info_container">
            <div class="info">
                <ul class="items_list">
                    <div class="item">
                        <img src="/xampp/htdocs/code/do_an/pics/Rectangle 85.png" alt="Vòng tay hạt cườm xinh xắn (Mẫu 1)">
                        <p class="item_name">Vòng tay hạt cườm xinh xắn (Mẫu 1)</p>
                        <p class="item_color">Màu: Trắng</p>
                        <p class="item_size">Kích cỡ: 17</p>
                        <p class="item_quantity">1</p>
                        <p class="item_total">18,000 ₫</p>
                    </div>
                </ul>
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
                    <span class="sum">0</span>
                </div>
                <div class="discount_container">
                    <input type="Input" name="discount" placeholder="Mã giảm giá...">
                        <button class="apply_discount">
                            <img class="discount_icon" src="/xampp/htdocs/code/do_an/pics/discount_ticket.png" alt="discount">Áp dụng
                        </button>
                </div>
                <div class="pay">
                    <button class="pay_button">Thanh toán</button>
                </div>

            </div>
        </div>
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
      <script src="script_thanh_toan.js"></script>
</body>
</html>