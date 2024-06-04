
<header>
    <div class="top-bar">
        <div class="logo">
            <img class="logo-img" src="{{asset('public/frontend/images/BLINKIY.jpg') }}">
            <p class="logo-blinkiy">BLINKIY</p>
            <p class="logo-phongthuy">PHONG THỦY</p>
        </div>
        <div class="search-bar">
            <div class="search-bar-cover">
                <i class="fas fa-search"></i>
                <input type="input" class="search-bar-input" id="search-bar-input" name="search-bar-input" placeholder="Tìm kiếm" />
            </div>
        </div>
        <div class="top-bar-options">
            <div class="top-bar-options-object">
                <i class="fa-solid fa-user"></i>
                <?php
                $customer_id = Session::get('customer_id');
                if ($customer_id!= NULL){
                ?>
                <a class="top-bar-options-object-title" href="{{URL::to('personal_infor')}}">Tài khoản</a>
                <?php
                }else { 
                ?>
                <a class="top-bar-options-object-title" href="{{URL::to('login')}}">Tài khoản</a>
                <?php 
                }
                ?>      
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
    <!-- Include file blade.php của menu-bar -->
    @include('layout.menubar')
    <div class="bg-menu">
        <img class="bg-menu-img" src="{{asset('public/frontend/images/menu.jpg')}}">
    </div>

</header>