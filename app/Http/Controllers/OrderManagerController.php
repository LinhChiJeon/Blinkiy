<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_customer_order;
use App\Models\tbl_order_details;
use Illuminate\Support\Facades\Session;
// order_id	customer_id	customer_name	customer_email	customer_phone	customer_address	order_total_price	order_date	order_status
class OrderManagerController extends Controller
{
    public function order_not_process_yet()
    {
        $orders = tbl_customer_order::where('order_status', 0)->get();
        return view('admin.Order_Manager_not_process', compact('orders'));
    }
    public function order_not_delivered_yet()
    {
        $orders = tbl_customer_order::where('order_status', 1)->get();
        return view('admin.Order_Manager_not_deliver', compact('orders'));
    }
    public function order_delivered()
    {
        $orders = tbl_customer_order::where('order_status', 2)->get();
        return view('admin.Order_Manager_Delivered', compact('orders'));
    }
    public function accept_order($id)
    {
        
        $orders = tbl_customer_order::findOrFail($id);
        return view('admin.contact_detail', compact('orders'));
    }

}