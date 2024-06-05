<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; // sử dụng database
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
// use Session; // thu vien sdung session
use Illuminate\Support\Facades\Redirect; 
session_start();

class CartController extends Controller
{
    //
    public function shopping_cart()
    {
        $customer_id = Session::get('customer_id');
      
        if($customer_id)
        {
            $cart=DB::table('tbl_cart')
                ->where('customer_id', $customer_id)
                ->join('tbl_product','tbl_product.product_id','=','tbl_cart.product_id')
                ->join('tbl_size','tbl_size.size_id','=','tbl_cart.size_id')
                ->join('tbl_product_details', function ($join) {
                    $join->on('tbl_cart.product_id', '=', 'tbl_product_details.product_id')
                         ->on('tbl_cart.size_id', '=', 'tbl_product_details.size_id');})
                ->orderBy('tbl_cart.created_at', 'desc')
                ->get();

            return view('ShoppingCart')->with('login',$customer_id)->with('ShoppingCart',$cart);
        }
        else return view('ShoppingCart')->with('login',$customer_id);
    }

    public function save_cart(Request $request)
    {
        $cart = $request->input('cart');
        // Nếu người dùng đã đăng nhập, lưu giỏ hàng vào cơ sở dữ liệu
        if (Auth::check()) {
            $customer_id = Auth::id();
            $this->updateDatabaseCart($cart, $customer_id);
            Session::put('cart', $cart);
        } else {
            // Ngược lại, lưu giỏ hàng vào session
            Session::put('cart', $cart);
        }
        
        return response()->json(['success' => true, 'redirect' => route('shipping.index')]);
    }

    private function updateDatabaseCart($cart, $customer_id)
    {
        // Lưu giỏ hàng mới vào cơ sở dữ liệu
        foreach ($cart as $item) {
            DB::table('tbl_cart')->insert([
                'product_id' => $item['product_id'],
                'customer_id' => $customer_id,
                'size_id' => $item['size_id'],
                'cart_quantity' => $item['product_quantity'],
                'created_at' => now(),
            ]);
        }
    }
}
