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
use App\Http\Controllers\OrderManagerController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\FileDisplayController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\CartController;

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

// Giỏ hàng
Route::get('/gio-hang', [CartController::class, 'shopping_cart']);

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
Route::get('/login', [CheckoutController::class, 'login']);
Route::post('/login-customer', [CheckoutController::class, 'login_customer']);

// Đăng ký
Route::get('/register', [CheckoutController::class, 'register']);
Route::post('/add-customer', [CheckoutController::class, 'add_customer']);

// Group này xác định các route cần có customer_id thì mới truy cập được
Route::group(['middleware' => 'customer'], function () {
    // Update-profile
    Route::post('/update-customer/{customer_id}', [CheckoutController::class, 'update_customer']);
    // Các route yêu cầu đăng nhập
    Route::get('/personal_infor', [CheckoutController::class, 'personal_infor']);
    // Đăng xuất
    Route::get('/logout', [CheckoutController::class, 'logout']);
    // Đổi mật khẩu
    Route::get('/change_pass', [CheckoutController::class, 'Change_pass']);
    Route::post('/change_pass', [CheckoutController::class, 'check_change_pass']);
    Route::get('/order_management', [CheckoutController::class, 'Order_management']);
    Route::post('/upload-avatar/{customer_id}', [CheckoutController::class, 'upload_avatar']);
});

// Hàm lấy quận từ thành phố
Route::post('/get-districts', [CheckoutController::class, 'fetchDistrict'])->name('fetch_d');

// Quên mật khẩu
Route::get('/forgot-password', [CheckoutController::class, 'forgot_password']);
Route::post('/forgot-password', [CheckoutController::class, 'check_forgot_password']);
Route::get('/verify_otp', [CheckoutController::class, 'verify_otp']);
Route::post('/verify_otp', [CheckoutController::class, 'check_verify_otp']);
Route::get('/reset-password', [CheckoutController::class, 'reset_password']);
Route::post('/reset-password', [CheckoutController::class, 'check_reset_password']);

// Thanh toán
Route::get('/hoa-don', [OrderController::class, 'hoaDon'])->name('hoa_don');
Route::get('/thanh-toan', [OrderController::class, 'thanhToan'])->name('thanh_toan');
Route::post('/thanh-toan', [OrderController::class, 'submitThanhToan'])->name('submit_thanh_toan');

// Bổ sung thông tin sau vận chuyển
Route::get('/bo-sung', [AdditionalController::class, 'index'])->name('bo-sung.index');
Route::post('/bo-sung', [AdditionalController::class, 'store'])->name('bo-sung.store');
Route::get('/file-display', [FileDisplayController::class, 'index'])->name('fileDisplay');

// Vận chuyển
Route::get('/shipping', [ShippingController::class, 'index'])->name('shipping.index');
Route::post('/shipping/fetch-district', [ShippingController::class, 'fetchDistrict'])->name('shipping.fetch_district');
Route::post('/shipping/store', [ShippingController::class, 'store'])->name('shipping.store');

// Gửi email
Route::get('/test-email', [EmailController::class, 'testEmail']);

?>
