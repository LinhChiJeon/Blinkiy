<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_gio_hang.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <script type="text/javascript" src="https://me.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=KoBLk8BuN7VA_SA-Lk5R7lCh38g6jZ120pfgNMHIIjU2PoBIEgmIP36e7fxACPgQkeqKo1WNYmpKIrOaufMSiUwlHj3TcdXUR5mBVPBhf-GlOIO657pjwkvu2dL3c25p0xveZzKHDtNgq4g8vpS5lxXnIcjfc0q90wQ-6XKMSM50lJUJ4gw6uY-oAVM-6cmSJVA3FIqOQrWvRXQy3C5OXvXfwcmsO1uYV362hf-GFDH6dpx13Koqg1GsLpuvdeVh8BpiEx1H2aL0FRgKcnHRz2K4GxePSgiYuyLZRPyqRzx4hosX6ZyUfsq7z7JGhIIrGWt9_bVMVi1KvdnYLeTaJKxjsl2gUwlzgnmbO00xqzOOberUBm78RlwoHcbzG09ssW2pmDDEnBf1cvoLS2pVm2SgRsV9Ys6TtU3uUezwvnBmHsdV-_ejoO_djpaGJ6tvAFx8-qWX5ogvehb3VtpLbSIgfzRiS5iZCtT4sw14z_Zz8RF-uH7Cu3KdmVWGYpIW" charset="UTF-8"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Shopping Cart | Blinkiy</title>
</head>

<body>
    <header>
        <div class="top-bar">
            <div class="logo">
                <img class="logo-img" src="Logo.jpg">
                <p class="logo-blinkiy">BLINKIY</p>
                <p class="logo-phongthuy">PHONG THỦY</p>
            </div>
            <div class="search-bar">
                <div class="search-bar-cover">
                    <i class="fas fa-search"></i>
                    <input type="input" class="search-bar-input" id="search-bar-input" name="search-bar-input"
                        placeholder="Tìm kiếm" />
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
            <img class="bg-menu-img" src="menu.jpg">
        </div>

    </header>
    <!-- <div class="process"> 
        <ul>
            <li><a href="gio_hang.html">Giỏ hàng</a></li> >
            <li><a href="van_chuyen.html">Vận chuyển</a></li> >
            <li><a href="thanh_toan.html">Thanh toán</a></li>
        </ul>
    </div> -->
    <!------------------ cart ------------------------->
    <div class="basket">
        <div class="basket_container">
            <div class="cart">
                <div class="cart_container">
                    <div class="header">Giỏ hàng của bạn</div>
                    <div class="list">
                        <ul class="cart_items">
                            <li>
                                <div class="item">
                                    <input type="checkbox" class="checkbox">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL7c_TlesvpekTbbaWmkLruEx6-3CB3ErrYQ&s"
                                        alt="sp">
                                    <div class="item-info">
                                        <div class="product-name">Vòng tay đá phong thủy hoa sen trắng phù hợp mệnh xinh
                                            xắn thời trang</div>
                                        <div class="product-decribe">(Màu: <input type="hidden" class="color">Trắng, Kích cỡ:<input type="hidden" class="size" value="17"> 17 )</div>
                                        <div class="product-price">
                                            <input type="hidden" class="price" value="300000">300.000đ</p>
                                            <p class="number-input">
                                                <input type="button" value="-" class="decrease_button">
                                                <input type="number" id="item_quantity" class="quantity_values" name="quantity" value="1" aria-label="Product quantity" size="4" min="1" step="1" inputmode="numeric" autocomplete="off">
                                                <input type="button" value="+" class="increase_button">
                                            </p>
                                            <span class="total">300.000đ</span>
                                        </div>
                                        <p class="remove"><i class="fa-solid fa-trash"></i> Xóa</p>
                                    </div>
                                </div>
                            </li>
                            
                            <li>
                                <div class="item">
                                    <input type="checkbox" class="checkbox">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL7c_TlesvpekTbbaWmkLruEx6-3CB3ErrYQ&s"
                                        alt="sp">
                                    <div class="item-info">
                                        <div class="product-name">Vòng tay đá phong thủy hoa sen trắng phù hợp mệnh xinh
                                            xắn thời trang</div>
                                        <div class="product-decribe">(Màu: trắng, Kích cỡ: 17 )</div>
                                        <div class="product-price">
                                            <input type="hidden" class="price" value="300000">300.000đ</p>
                                            <p class="number-input">
                                                <input type="button" value="-" class="decrease_button">
                                                <input type="number" id="item_quantity" class="quantity_values" name="quantity" value="1" aria-label="Product quantity" size="4" min="1" step="1" inputmode="numeric" autocomplete="off">
                                                <input type="button" value="+" class="increase_button">
                                            </p>
                                            <span class="total">300.000đ</span>
                                        </div>
                                        <p class="remove"><i class="fa-solid fa-trash"></i> Xóa</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <input type="checkbox" class="checkbox">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL7c_TlesvpekTbbaWmkLruEx6-3CB3ErrYQ&s"
                                        alt="sp">
                                    <div class="item-info">
                                        <div class="product-name">Vòng tay đá phong thủy hoa sen trắng phù hợp mệnh xinh
                                            xắn thời trang</div>
                                        <div class="product-decribe">(Màu: trắng, Kích cỡ: 17 )</div>
                                        <div class="product-price">
                                            <input type="hidden" class="price" value="300000">300.000đ</p>
                                            <p class="number-input">
                                                <input type="button" value="-" class="decrease_button">
                                                <input type="number" id="item_quantity" class="quantity_values" name="quantity" value="1" aria-label="Product quantity" size="4" min="1" step="1" inputmode="numeric" autocomplete="off">
                                                <input type="button" value="+" class="increase_button">
                                            </p>
                                            <span class="total">300.000đ</span>
                                        </div>
                                        <p class="remove"><i class="fa-solid fa-trash"></i> Xóa</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <input type="checkbox" class="checkbox">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL7c_TlesvpekTbbaWmkLruEx6-3CB3ErrYQ&s"
                                        alt="sp">
                                    <div class="item-info">
                                        <div class="product-name">Vòng tay đá phong thủy hoa sen trắng phù hợp mệnh xinh
                                            xắn thời trang</div>
                                        <div class="product-decribe">(Màu: trắng, Kích cỡ: 17 )</div>
                                        <div class="product-price">
                                            <input type="hidden" class="price" value="300000">300.000đ</p>
                                            <p class="number-input">
                                                <input type="button" value="-" class="decrease_button">
                                                <input type="number" id="item_quantity" class="quantity_values" name="quantity" value="1" aria-label="Product quantity" size="4" min="1" step="1" inputmode="numeric" autocomplete="off">
                                                <input type="button" value="+" class="increase_button">
                                            </p>
                                            <span class="total">300.000đ</span>
                                        </div>
                                        <p class="remove"><i class="fa-solid fa-trash"></i> Xóa</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <input type="checkbox" class="checkbox">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL7c_TlesvpekTbbaWmkLruEx6-3CB3ErrYQ&s"
                                        alt="sp">
                                    <div class="item-info">
                                        <div class="product-name">Vòng tay đá phong thủy hoa sen trắng phù hợp mệnh xinh
                                            xắn thời trang</div>
                                        <div class="product-decribe">(Màu: trắng, Kích cỡ: 17 )</div>
                                        <div class="product-price">
                                            <input type="hidden" class="price" value="300000">300.000đ</p>
                                            <p class="number-input">
                                                <input type="button" value="-" class="decrease_button">
                                                <input type="number" id="item_quantity" class="quantity_values" name="quantity" value="1" aria-label="Product quantity" size="4" min="1" step="1" inputmode="numeric" autocomplete="off">
                                                <input type="button" value="+" class="increase_button">
                                            </p>
                                            <span class="total">300.000đ</span>
                                        </div>
                                        <p class="remove"><i class="fa-solid fa-trash"></i> Xóa</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <input type="checkbox" class="checkbox">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL7c_TlesvpekTbbaWmkLruEx6-3CB3ErrYQ&s"
                                        alt="sp">
                                    <div class="item-info">
                                        <div class="product-name">Vòng tay đá phong thủy hoa sen trắng phù hợp mệnh xinh
                                            xắn thời trang</div>
                                        <div class="product-decribe">(Màu: trắng, Kích cỡ: 17 )</div>
                                        <div class="product-price">
                                            <input type="hidden" class="price" value="300000">300.000đ</p>
                                            <p class="number-input">
                                                <input type="button" value="-" class="decrease_button">
                                                <input type="number" id="item_quantity" class="quantity_values" name="quantity" value="1" aria-label="Product quantity" size="4" min="1" step="1" inputmode="numeric" autocomplete="off">
                                                <input type="button" value="+" class="increase_button">
                                            </p>
                                            <span class="total">300.000đ</span>
                                        </div>
                                        <p class="remove"><i class="fa-solid fa-trash"></i> Xóa</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="info_container">
                <div class="info">
                    <p class="info_header">Thông tin đơn hàng</p>
                    <hr>
                    <div class="order_items">
                    </div>
                    <hr>
                    <div class="total_container">
                        <span>Tổng tiền</span>
                        <span class="all_total">0đ</span>
                    </div>
                    <div class="discount_container">
                        <input type="Input" name="discount" placeholder="Mã giảm giá...">
                        <button class="apply_discount">
                            <span class="discount_icon"><span class="streamline--discount-percent-coupon"></span></span>
                            <b>Áp dụng</b>
                        </button>
                    </div>
                    <div class="pay">
                        <button class="pay_button">Thanh toán</button>
                    </div>
                    <div class="continue">
                        <a href="#"><i class="fas fa-angle-double-left"></i> Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
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
    </footer>
    <script></script>
</body>
</html>