<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryPost;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\FileDisplayController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderManagerController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Middleware\CustomerMiddleware;


// Route::get('/test', function () {
//         return view('testin');
//     });

// FE
Route::get('/', [HomeController::class, 'index']); 
Route::get('/trang-chu', [HomeController::class, 'index']); 

// Send email route
Route::get('test-email', [SendEmailController::class, 'testEmail']);
Route::post('/send-email-to-customer', [SendEmailController::class, 'sendEmailToCustomer'])->name('send.email.to.customer');

// Contact reply route
Route::get('/contact_reply', [ContactController::class, 'contact_reply'])->name('contact_reply');
Route::get('/contact_replied', [ContactController::class, 'contact_replied'])->name('contact_replied');
Route::get('/phan-hoi/{id}', [ContactController::class, 'reply'])->name('phan_hoi');
Route::get('/lich-su-phan-hoi/{id}', [ContactController::class, 'history'])->name('lich_su_phan_hoi');
Route::get('/contact', [ContactController::class, 'input'])->name('lien_he');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// Admin routes
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin-login', [AdminController::class, 'dashboard_login'])->name('admin.login');
Route::get('/admin-dashboard', [AdminController::class, 'show_dashboard'])->name('admin.dashboard');
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/logout', [AdminController::class, 'dashboard_logout']);

// Sản phẩm FE
Route::get('/san-pham', [HomeController::class, 'sanpham']);
Route::get('/danh-muc-san-pham/{category_product_id}', [CategoryProduct::class, 'show_category_product_home']);
Route::get('/chi-tiet-san-pham/{product_id}', [ProductController::class, 'show_inside_product']);
Route::post('/filter-products', [ProductController::class, 'filterProducts']);
Route::post('/add-to-cart', [ProductController::class, 'add_to_cart']);
Route::get('/tim-kiem', [HomeController::class, 'search']);

// BE

// Danh mục Sản phẩm admin
Route::get('/add-category-product', [CategoryProduct::class, 'add_category_product']);
Route::get('/all-category-product', [CategoryProduct::class, 'all_category_product']);
Route::post('/save-category-product', [CategoryProduct::class, 'save_category_product']);
Route::get('/unactive-category-product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);
Route::get('/edit-category-product/{category_product_id}', [CategoryProduct::class, 'edit_category_product']);
Route::get('/delete-category-product/{category_product_id}', [CategoryProduct::class, 'delete_category_product']);
Route::post('/update-category-product/{category_product_id}', [CategoryProduct::class, 'update_category_product']);

// Sản phẩm
Route::get('/add-product', [ProductController::class, 'add_product']);
Route::get('/all-product', [ProductController::class, 'all_product']);
Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactive_product']);
Route::get('/active-product/{product_id}', [ProductController::class, 'active_product']);
Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);
Route::post('/update-product/{product_id}', [ProductController::class, 'update_product']);
Route::post('/save-product', [ProductController::class, 'save_product']);

// Chi tiết sản phẩm
Route::get('/show-product-details/{product_id}', [ProductController::class, 'show_product_details']);
Route::get('/edit-product-details/{product_id}', [ProductController::class, 'edit_product_details']);
Route::post('/update-product-details/{product_id}', [ProductController::class, 'update_product_details']);

// Gallery thư viện ảnh
Route::get('/add-gallery/{product_id}', [GalleryController::class, 'add_Gallery']);
Route::post('/insert-gallery/{product_id}', [GalleryController::class, 'insert_Gallery']);
Route::get('/delete-gallery/{gallery_id}', [GalleryController::class, 'delete_Gallery']);

// Danh mục bài viết 
Route::get('/add-category-post', [CategoryPost::class, 'add_category_post']);
Route::post('/save-category-post', [CategoryPost::class, 'save_category_post']);
Route::get('/all-category-post', [CategoryPost::class, 'all_category_post']);
Route::get('/danh-muc-bai-viet/{cate_post_slug}', [CategoryPost::class, 'danh_muc_bai_viet']);
Route::get('/edit-category-post/{category_post_id}', [CategoryPost::class, 'edit_category_post']);
Route::post('/update-category-post/{cate_id}', [CategoryPost::class, 'update_category_post']);
Route::get('/delete-category-post/{cate_id}', [CategoryPost::class, 'delete_category_post']);

// Bài viết
Route::get('/add-post', [PostController::class, 'add_post']);
Route::post('/save-post', [PostController::class, 'save_post']);
Route::get('/all-post', [PostController::class, 'all_post']);
Route::get('/delete-post/{post_id}', [PostController::class, 'delete_post']);
Route::get('/edit-post/{post_id}', [PostController::class, 'edit_post']);
Route::post('/update-post/{post_id}', [PostController::class, 'update_post']);

// Hiển thị danh mục bài viết
Route::get('/danh-muc-bai-viet/{cate_post_slug}', [CategoryPost::class, 'danh_muc_bai_viet']);
Route::get('/bai-viet/{post_slug}', [PostController::class, 'bai_viet']);

// Đăng nhập
Route::get('/login',[CheckoutController::class, 'login'])->middleware();
Route::post('/login-customer','App\Http\Controllers\CheckoutController@login_customer')->middleware(CustomerMiddleware::class);

// Đăng ký
Route::get('/register', 'App\Http\Controllers\CheckoutController@register');
Route::post('/add-customer', 'App\Http\Controllers\CheckoutController@add_customer');

Route::get('/personal_infor', [CheckoutController::class, 'personal_infor'])->middleware('customer');
// Group này xác định các route cần có customer_id thì mới truy cập được
Route::group(['middleware' => 'customer'], function () {
    // update-profle
    Route::post('/update-customer/{customer_id}', 'App\Http\Controllers\CheckoutController@update_customer');
    // Các route yêu cầu đăng nhập
    // Route::get('/personal_infor', 'App\Http\Controllers\CheckoutController@personal_infor');

    // logout
    Route::get('/logout', 'App\Http\Controllers\CheckoutController@logout');

    // Đổi mật khẩu
    Route::get('/change_pass', 'App\Http\Controllers\CheckoutController@Change_pass');
    Route::post('/change_pass', 'App\Http\Controllers\CheckoutController@check_change_pass');

    Route::get('/order_management', 'App\Http\Controllers\CheckoutController@Order_management');

    Route::post('/upload-avatar/{customer_id}', 'App\Http\Controllers\CheckoutController@upload_avatar');
});

// Hàm lấy quận từ thành phố
Route::post('/get-districts', 'App\Http\Controllers\CheckoutController@fetchDistrict')->name('fetch_d');

Route::get('/order-not-process-yet', [OrderManagerController::class, 'order_not_process_yet'])->name('order_not_process_yet');
Route::get('/order-not-delivered-yet', [OrderManagerController::class, 'order_not_delivered_yet'])->name('order_not_delivered_yet');
Route::get('/order-delivered', [OrderManagerController::class, 'order_delivered'])->name('order_delivered');
Route::get('/order-detail/{id}', [OrderManagerController::class, 'order_detail'])->name('order_detail');

// Quên mật khẩu
Route::get('/forgot-password', 'App\Http\Controllers\CheckoutController@forgot_password');
Route::post('/forgot-password', 'App\Http\Controllers\CheckoutController@check_forgot_password');

Route::get('/verify_otp', 'App\Http\Controllers\CheckoutController@verify_otp');
Route::post('/verify_otp', 'App\Http\Controllers\CheckoutController@check_verify_otp');

Route::get('/reset-password', 'App\Http\Controllers\CheckoutController@reset_password');
Route::post('/reset-password', 'App\Http\Controllers\CheckoutController@check_reset_password'); 

// Bổ sung thông tin sau vận chuyển
Route::get('/bo-sung', [AdditionalController::class, 'index'])->name('bo-sung.index');
Route::post('/bo-sung', [AdditionalController::class, 'store'])->name('bo-sung.store');
Route::get('/file-display', [FileDisplayController::class, 'index'])->name('fileDisplay');

// Vận chuyển
Route::get('/shipping', [ShippingController::class, 'index'])->name('shipping.index');
Route::post('/shipping/fetch-district', [ShippingController::class, 'fetchDistrict'])->name('shipping.fetch_district');
Route::post('/shipping/store', [ShippingController::class, 'store'])->name('shipping.store');

// Giỏ hàng
Route::get('/gio-hang', [CartController::class, 'shopping_cart']);
Route::post('/save-cart', [CartController::class, 'save_cart'])->name('cart.save');



// Gửi email
Route::get('/test-email', [EmailController::class, 'testEmail']);


//overnight
Route::get('/accept-order/{id}', [OrderManagerController::class, 'accept_order']);
Route::get('/order-delivered/{id}', [OrderManagerController::class, 'admin_order_delivered']);
Route::post('/add-to-cart', [ProductController::class, 'add_to_cart'])->name('add_to_cart');
// Thanh toán
Route::get('/hoa-don', [OrderController::class, 'hoaDon'])->name('hoa_don');
Route::get('/thanh-toan', [OrderController::class, 'thanhToan'])->name('thanh_toan');
Route::post('/thanh-toan', [OrderController::class, 'submitThanhToan'])->name('submit_thanh_toan');
Route::get('/momo-result', [OrderController::class, 'momoPaymentResult'])->name('momoPaymentResult');
Route::get('/gioi-thieu', [HomeController::class, 'gioithieu'])->name('gioithieu');


Route::post('/accept-order/{id}', [OrderManagerController::class, 'accept_order'])->name('accept_order');
Route::delete('/delete-order/{id}', [OrderManagerController::class, 'delete_order'])->name('delete_order');
Route::post('/done-order/{id}', [OrderManagerController::class, 'done_order'])->name('done_order');
Route::post('/see-ordered/{id}', [OrderManagerController::class, 'order_detail'])->name('order_detail');

?>
