<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(){
        return view('pages.admin_login'); 
    }
    
    public function show_dashboard(){
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if(Session::has('admin_name')){
            return view('admin_layout');
        } else {
            // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
            return Redirect::to('/admin');
        }
    }

    public function dashboard_login(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;
        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
    
        if($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/admin-dashboard');
        } else {
            Session::put('message', 'Thông tin đăng nhập sai');
            return Redirect::to('/admin');
        }      
    }    

    public function dashboard_logout(Request $request){
        Session::forget('admin_name');
        Session::forget('admin_id');
        return Redirect::to('/admin');     
    }
}
