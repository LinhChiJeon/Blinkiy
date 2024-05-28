<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\Models\CatePost;
class HomeController extends Controller
{
    // public function index(){
    //     return view('pages.home');
    // }
    public function index(Request $request){
        //category post
        $category_post = CatePost::orderBy('cate_post_id','DESC')->get(); // k có phân trang nên mình lấy hết bằng hàm get
        return view('copy_layout')->with('category_post',$category_post); // trả về copy_layout và mang theo dữ liệu $category_post để sử dụng
    }

}
