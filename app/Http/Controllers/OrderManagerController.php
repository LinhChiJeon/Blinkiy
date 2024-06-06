<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_customer_order;
use App\Models\tbl_order_details;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderAcceptedMail;
use App\Mail\OrderDeletedMail; // Create this Mailable for order deletion
use App\Mail\OrderDoneMail;

class OrderManagerController extends Controller
{
    public function order_detail($id)
    {
        $order = tbl_customer_order::findOrFail($id);
        $orderDetails = tbl_order_details::where('order_id', $id)->get();
        return view('admin.admin_order_detail', compact('order', 'orderDetails'));
    }

    public function order_not_process_yet()
    {
        $orders = tbl_customer_order::where('order_status', 'Pending')->get();
        return view('admin.Order_Manager_not_process', compact('orders'));
    }

    public function order_not_delivered_yet()
    {
        $orders = tbl_customer_order::where('order_status', 'Shipping')->get();
        return view('admin.Order_Manager_not_deliver', compact('orders'));
    }

    public function order_delivered()
    {
        $orders = tbl_customer_order::where('order_status', 'Done')->get();
        return view('admin.Order_Manager_Delivered', compact('orders'));
    }

    public function accept_order(Request $request, $id)
    {
        $order = tbl_customer_order::findOrFail($id);
        $order->order_status = 'Shipping';  // Update the order status to 'shipping'
        $order->save();

        // Send email to the customer
        Mail::to($order->customer_email)->send(new OrderAcceptedMail($order));

        return redirect()->route('order_not_process_yet', ['id' => $id])->with('success', 'Order has been accepted and email sent.');
    }
    public function done_order(Request $request, $id)
    {
        $order = tbl_customer_order::findOrFail($id);
        $order->order_status = 'Done';  // Mark the order as done (or whatever status you want to set)
        $order->save();

        // Send email to the customer
        Mail::to($order->customer_email)->send(new OrderDoneMail($order));

        return redirect()->route('order_not_delivered_yet', ['id' => $id])->with('success', 'Order has been marked as done and email sent.');
    }

    public function delete_order(Request $request, $id)
{
    // Fetch the order by ID
    $order = tbl_customer_order::findOrFail($id);
    // Extract the necessary details for email
    $orderDate = $order->order_date;
    $orderEmail = $order->customer_email;

    // Delete order details associated with this order
    tbl_order_details::where('order_id', $id)->delete();
    // Delete the order
    $order->delete();

    // Send email to the customer
    Mail::to($orderEmail)->send(new OrderDeletedMail($orderDate));

    return redirect()->route('order_not_process_yet')->with('success', 'Order has been deleted and email sent.');
}

}
