<?php
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryPost;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\ContactController;


// Default welcome page
Route::get('/', function () {
    return view('welcome');
});

// Send email route
Route::get('test-email', [SendEmailController::class, 'testEmail']);
Route::post('/send-email-to-customer', [SendEmailController::class, 'sendEmailToCustomer'])->name('send.email.to.customer');


// Admin routes
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin-login', [AdminController::class, 'dashboard_login'])->name('admin.login');
Route::get('/admin-dashboard', [AdminController::class, 'show_dashboard'])->name('admin.dashboard');



// Category product routes
Route::get('/add-category-product', [CategoryProduct::class, 'add_category_product']);
Route::get('/all-category-product', [CategoryProduct::class, 'all_category_product']);
Route::post('/save-category-product', [CategoryProduct::class, 'save_category_product']);
Route::get('/unactive-category-product/{category_pro_id}', [CategoryProduct::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_pro_id}', [CategoryProduct::class, 'active_category_product']);
Route::get('/edit-category-product/{category_pro_id}', [CategoryProduct::class, 'edit_category_product']);
Route::get('/delete-category-product/{category_pro_id}', [CategoryProduct::class, 'delete_category_product']);
Route::post('/update-category-product/{category_pro_id}', [CategoryProduct::class, 'update_category_product']);

// Product routes
Route::get('/add-product', [ProductController::class, 'add_product']);
Route::get('/all-product', [ProductController::class, 'all_product']);
Route::post('/save-product', [ProductController::class, 'save_product']);
Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactive_product']);
Route::get('/active-product/{product_id}', [ProductController::class, 'active_product']);
Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);
Route::post('/update-product/{product_id}', [ProductController::class, 'update_product']);

// Category post routes
Route::get('/add-category-post', [CategoryPost::class, 'add_category_post']);
Route::post('/save-category-post', [CategoryPost::class, 'save_category_post']);
Route::get('/all-category-post', [CategoryPost::class, 'all_category_post']);
Route::get('/edit-category-post/{category_post_id}', [CategoryPost::class, 'edit_category_post']);
Route::post('/update-category-post/{cate_id}', [CategoryPost::class, 'update_category_post']);
Route::get('/delete-category-post/{cate_id}', [CategoryPost::class, 'delete_category_post']);

// Post routes
Route::get('/add-post', [PostController::class, 'add_post']);
Route::post('/save-post', [PostController::class, 'save_post']);
Route::get('/all-post', [PostController::class, 'all_post']);
Route::get('/delete-post/{post_id}', [PostController::class, 'delete_post']);
Route::get('/edit-post/{post_id}', [PostController::class, 'edit_post']);
Route::post('/update-post/{post_id}', [PostController::class, 'update_post']);

// Display category posts
Route::get('/bai-viet/{post_slug}', [PostController::class, 'bai_viet']);
Route::get('/danh-muc-bai-viet/{cate_post_slug}', [PostController::class, 'danh_muc_bai_viet']);

// Contact reply route

Route::get('/contact_reply', [ContactController::class, 'contact_reply'])->name('contact_reply');
Route::get('/contact_replied', [ContactController::class, 'contact_replied'])->name('contact_replied');
// use App\Http\Controllers\ContactController;

Route::get('/phan-hoi/{id}', [ContactController::class, 'reply'])->name('phan_hoi');
Route::get('/lich-su-phan-hoi/{id}', [ContactController::class, 'history'])->name('lich_su_phan_hoi');

Route::get('/contact', [ContactController::class, 'input'])->name('lien_he');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');



