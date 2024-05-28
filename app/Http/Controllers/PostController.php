<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use App\Slider;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;
use App\Models\CatePost;
session_start();

class PostController extends Controller
{
    public function AuthLogin(){ // hàm ktra xem người dùng đã đăng nhập và có quyền truy cập vào dashboard hay không
        $admin_id = Session::get('admin_id'); // lấy 'admin_id' từ session
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send(); // nếu k là admin -> điều hướng ngay lập tức về trang đăng nhập và dừng mọi script khác
        }
    }
    public function add_post(){
        $this->AuthLogin();// ktra xác thực người dùng
        $cate_post = CatePost::orderBy('cate_post_id','DESC')->get(); // lấy từ bài viết có id lớn nhất -> bài viết mới nhất
    	return view('admin.post.add_post')->with(compact('cate_post'));
    }
    public function save_post(Request $request){
        $this->AuthLogin();
        $data = $request->all();
        $post=new Post();
        
        $post->post_title = $data['post_title']; // cột post_title trong dtb lấy từ dữ liệu của trường có name'post_tiltle' đc gửi từ forrm
        $post->post_slug= $data['post_slug'];
        $post->post_desc= $data['post_desc'];
        $post->post_content = $data['post_content'];
        $post->post_meta_desc = $data['post_meta_desc'];
        $post->post_meta_keywords= $data['post_meta_keywords'];
        $post->cate_post_id = $data['cate_post_id'];
        $post->post_status= $data['post_status'];

        $get_image = $request->file('post_image');
     
        if($get_image){
           $get_name_image = $get_image->getClientOriginalName(); // lấy tên của hình ảnh
           $name_image = current(explode('.',$get_name_image));
           $new_image =  $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();// random để ảnh k trùng , vd : anh1.jpg ; anh99.jpg
           // hàm lấy đuôi mở rộng chính thức 

           $get_image->move('public/uploads/post',$new_image); // di chuyển đến đường dẫn chứa ảnh đó với tên mới là $neww_name
           
           $post->post_image = $new_image; //luu ten moi vao csdl
           $post->save();
           Session::put('message','Thêm bài viết thành công');
           return Redirect()->back(); // trả về trang trc đó
       }
        else{
           Session::put('message','Bài viết thiếu hình ảnh. Vui lòng thêm ít nhất 1 ảnh !!!');
           return Redirect()->back(); // trả về trang trc đó
       }
    }
    public function all_post(){
        $this->AuthLogin();
        $all_post = Post::with('cate_post')->orderBy('post_id')->paginate(10); // lenh join 2 bang để lấy danh mục bài viết, mỗi bài viết sẽ thuộc về 1 danh mục bài viết
// trả về cate_post() trong Post với id đc đem theo để so sánh
        return view('admin.post.list_post', compact('all_post'));
    }
    public function delete_post($post_id){
        $this->AuthLogin();
        $post = Post::find($post_id); // tìm id cần xóa
        $post_image = $post->post_image; // khai báo biến post_image, biến này chỉ điến biến post_image trong dtb    
        if($post_image){ // khi xóa bài viết, đồng thời xóa ảnh trong thư mục post
            $links ='public/uploads/post/'.$post_image;
            unlink($links);
        }       
        $post->delete();       
        Session::put('message','Xóa bài viết thành công');
        return redirect()->back();
    }
    public function edit_post($post_id){
        $cate_post = CatePost::orderBy('cate_post_id')->get();
        $post = Post::find($post_id);
        return view('admin.post.edit_post')->with(compact('post','cate_post'));

    }
    public function update_post(Request $request,$post_id){
        $this->AuthLogin();
        $data = $request->all();
        $post= Post::find($post_id);
        
        $post->post_title = $data['post_title']; // cột post_title trong dtb lấy từ dữ liệu của trường có name'post_tiltle' đc gửi từ forrm
        $post->post_slug= $data['post_slug'];
        $post->post_desc= $data['post_desc'];
        $post->post_content = $data['post_content'];
        $post->post_meta_desc = $data['post_meta_desc'];
        $post->post_meta_keywords= $data['post_meta_keywords'];
        $post->cate_post_id = $data['cate_post_id'];
        $post->post_status= $data['post_status'];

        $get_image = $request->file('post_image');
     
        if($get_image){ // neu co cap nhat hinh anh
            // xoa anh cu
            $post_image_old = $post->post_image;
            $links ='public/uploads/post/'.$post_image_old;
            if(file_exists($links)) {
                unlink($links);
            }
            //update anh moi
            $get_name_image = $get_image->getClientOriginalName(); // lấy tên của hình ảnh
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,999).'.'.$get_image->getClientOriginalExtension();// random để ảnh k trùng , vd : anh1.jpg ; anh99.jpg
            // hàm lấy đuôi mở rộng chính thức 

            $get_image->move('public/uploads/post',$new_image); // di chuyển đến đường dẫn chứa ảnh đó với tên mới là $neww_name          
            $post->post_image = $new_image; //luu ten moi vao csdl
            
        }
        
        $post->save();
        Session::put('message','Cập nhật bài viết thành công');
        return Redirect()->back(); // trả về trang trc đó
    }
    // HÀM HIỂN THỊ BÀI VIẾT Ở DANH MỤC BÀI VIẾT
    public function danh_muc_bai_viet(Request $request,$post_slug){
        $category_post = CatePost::orderBy('cate_post_id','DESC')->get();

        $catego_post = CatePost::where('cate_post_slug', $post_slug)->first();// điều kiện where để lấy $post_slug khớp với cate_post_slug ở URL và lấy dòng đầu tiên khớp

        $catepost = CatePost::where('cate_post_slug',$post_slug)->take(1)->get();
        foreach($catepost as $key =>$cate){
        //seo 
            $meta_desc = $cate->cate_post_desc; 
            $meta_keywords = $cate->cate_post_slug;
            $meta_title = $cate->cate_post_name;
            $cate_id = $cate->cate_post_id;
            $url_canonical = $request->url();
            //--seo
        }
        $post = Post::with('cate_post')->where('post_status',0)->where('cate_post_id',$cate_id)->paginate(10);

        return view('pages.baiviet.danhmucbaiviet')->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical)->
        with('post',$post)->with('category_post',$category_post)->with('catego_post',$catego_post); 
    }


    public function bai_viet(Request $request, $post_slug){
        $category_post = CatePost::orderBy('cate_post_id','DESC')->get();

        $post = Post::with('cate_post')->where('post_status',0)->where('post_slug',$post_slug)->take(1)->get();
        // chỉ lấy mỗi lần 1 bài viết đc hiển thị, có slug trùng với slug tham số
        //dòng code $lienquan = Post::with('cate_post') đang yêu cầu Laravel chuẩn bị một truy vấn để lấy tất cả các Post cùng với thông tin CatePost 
        foreach($post as $key =>$p){
            $meta_desc = $p->post_meta_desc; 
            $meta_keywords = $p->post_meta_keywords;
            $meta_title = $p->post_title;
            $cate_id = $p->cate_post_id;
            $category_id = $p->cate_post_id;
        }
        $lienquan = Post::with('cate_post')->where('post_status',0)->where('cate_post_id',$category_id)
        ->take(10)->get(); // lấy tất cả bài viết liên quan trừ bài viết hiện tại đang xem ra

        return view('pages.baiviet.baiviet')->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->
        with('post',$post)->with('category_post',$category_post)->with('lienquan',$lienquan);
    }
    
}
