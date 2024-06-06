<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_customer_order;
use App\Models\tbl_order_details;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderAcceptedMail;

class OrderManagerController extends Controller
{
    public function order_detail($id)
    {
        // Fetch the order by ID
        $order = tbl_customer_order::findOrFail($id);
        // Fetch the order details for the specified order ID
        $orderDetails = tbl_order_details::where('order_id', $id)->get();

        // Pass both the order and its details to the view
        return view('admin.admin_order_detail', compact('order', 'orderDetails'));
    }

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
        $order = tbl_customer_order::findOrFail($id);
        $order->order_status = 1;  // Update the order status to 'accepted'
        $order->save();

        // Send email to the customer
        Mail::to($order->customer_email)->send(new OrderAcceptedMail($order));

        return redirect()->route('order_not_process_yet')->with('success', 'Order has been accepted and email sent.');
    }

    public function admin_order_delivered($id)
    {
        $order = tbl_customer_order::findOrFail($id);
        $order->order_status = 2;  // Update the order status to 'accepted'
        $order->save();

        // Send email to the customer
        Mail::to($order->customer_email)->send(new OrderAcceptedMail($order));

        return redirect()->route('order_not_process_yet')->with('success', 'Order has been accepted and email sent.');
    }
}
