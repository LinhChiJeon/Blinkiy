<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderDetailsMail;

class OrderController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function hoaDon()
    {
        $id = Session::get('id');
        $order = DB::table('tbl_customer_order')->where('order_id', $id)->first();
        $orderDetails = DB::table('tbl_order_details')
            ->join('tbl_product', 'tbl_order_details.product_id', '=', 'tbl_product.product_id')
            ->select('tbl_order_details.*', 'tbl_product.product_name', 'tbl_product.product_color', 'tbl_product.product_size')
            ->where('order_id', $id)
            ->get();
        $customer = DB::table('tbl_customers')->where('customer_id', $order->customer_id)->first();

        if (!$order) {
            return redirect()->route('thanh_toan')->with('error', 'Không tìm thấy hóa đơn.');
        }

        return view('pages.hoa_don', [
            'order' => $order,
            'orderDetails' => $orderDetails,
            'customer' => $customer
        ]);
    }

    public function thanhToan()
    {
        $hoten = Session::get('name', '');
        $email = Session::get('email', '');
        $sdt = Session::get('phone_num', '');
        $province = Session::get('province', '');
        $district = Session::get('district', '');
        $address = Session::get('address', '');
        $apartment = Session::get('apartment', '');
        $note = Session::get('note', '');
        $file = Session::get('file_input', '');

        $tinh = DB::table('province')->where('province_id', $province)->value('province_name');
        $huyen = DB::table('district')->where('district_id', $district)->value('district_name');

        $cart = Session::get('cart', []); // Lấy giỏ hàng từ session, mặc định là một mảng rỗng nếu không có gì trong session

        // Tính tổng tiền
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['product_price'] * $item['product_quantity'];
        }

        return view('pages.thanh_toan', compact('hoten', 'email', 'sdt', 'province', 'district', 'address', 'apartment', 'note', 'file', 'tinh', 'huyen', 'cart', 'total'));
    }

    function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    public function momo_payment(Request $request)
    {
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua ATM MoMo";
        $amount = $request->input('amount');
        $orderId = time() ."";
        $redirectUrl = route('momoPaymentResult');
        $ipnUrl = route('momoPaymentResult');
        $extraData = "";

        $requestId = time() . "";
        $requestType = "payWithATM";
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "BLINKIY",
            "storeId" => "BLINKIY",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);

        return redirect()->to($jsonResult['payUrl']);
    }

    public function momoqr_payment(Request $request)
    {
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';

        $orderInfo = "Thanh toán qua mã QR MoMo";
        $amount = $request->input('amount');
        $orderId = time() ."";
        $redirectUrl = route('momoPaymentResult');
        $ipnUrl = route('momoPaymentResult');
        $extraData = "";
        $requestId = time() . "";
        $requestType = "captureWallet";
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );
        $result = $this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);

        return redirect()->to($jsonResult['payUrl']);
    }

    public function submitThanhToan(Request $request)
{
    // Lấy thông tin từ session và request
    $customerId = Session::get('customer_id', ''); // Lấy customer_id từ session
    $hoten = Session::get('name', '');
    $email = Session::get('email', '');
    $sdt = Session::get('phone_num', '');
    $province = Session::get('province', '');
    $district = Session::get('district', '');
    $address = Session::get('address', '');
    $apartment = Session::get('apartment', '');
    $note = Session::get('note', '') ?? '';
    $file = Session::get('file_input', '');
    $pttt = $request->input('pttt');

    // Lấy tên tỉnh và huyện từ DB
    $tinh = DB::table('province')->where('province_id', $province)->value('province_name');
    $huyen = DB::table('district')->where('district_id', $district)->value('district_name');

    $cart = Session::get('cart', []); // Lấy giỏ hàng từ session

    // Tính tổng tiền
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['product_price'] * $item['product_quantity'];
    }

    // Tạo dữ liệu địa chỉ đầy đủ
    $fullAddress = ($apartment ? $apartment . ', ' . $address : $address) . ', ' . $huyen . ', ' . $tinh;

    if ($pttt == 3) {
        // Nếu thanh toán khi nhận hàng, lưu đơn hàng vào DB và session
        $orderId = DB::table('tbl_customer_order')->insertGetId([
            'customer_id' => $customerId, // Đảm bảo rằng trường này được thiết lập đúng
            'customer_name' => $hoten,
            'customer_email' => $email,
            'customer_phone' => $sdt,
            'customer_address' => $fullAddress,
            'order_note' => $note,
            'order_files' => $file,
            'order_total_price' => $total,
            'order_date' => now(),
            'payment_opt' => $pttt,
            'order_status' => 'Pending',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Lưu chi tiết đơn hàng vào bảng tbl_order_details
        foreach ($cart as $item) {
            DB::table('tbl_order_details')->insert([
                'order_id' => $orderId,
                'product_id' => $item['product_id'],
                'product_quantity' => $item['product_quantity'],
                'product_price' => $item['product_price'],
                'total_price' => $item['product_price'] * $item['product_quantity'],
                'created_at' => now(),
                'updated_at' => now(),
                'size_id' => $item['product_size']
            ]);
        }

        // Lưu orderId vào session để dùng ở trang hóa đơn
        Session::put('id', $orderId);

        // Cập nhật số lượng hàng còn trong kho
        foreach ($cart as $item) {
            DB::table('tbl_product')
                ->where('product_id', $item['product_id'])
                ->decrement('product_number', $item['product_quantity']);
        }

        // Gửi email chi tiết đơn hàng
        $order = DB::table('tbl_customer_order')->where('order_id', $orderId)->first();
        Mail::to($email)->send(new OrderDetailsMail($order));

        // Xóa session
        Session::forget(['cart', 'customer_id', 'name', 'email', 'phone_num', 'province', 'district', 'address', 'apartment', 'note', 'file_input']);

        return redirect()->route('hoa_don');
    } else {
        // Nếu thanh toán qua MoMo, chỉ lưu vào session và điều hướng đến MoMo
        Session::put('order_data', [
            'customer_id' => $customerId, // Đảm bảo rằng trường này được thiết lập đúng
            'customer_name' => $hoten,
            'customer_email' => $email,
            'customer_phone' => $sdt,
            'customer_address' => $fullAddress,
            'order_note' => $note,
            'order_files' => $file,
            'order_total_price' => $total,
            'order_date' => now(),
            'payment_opt' => $pttt,
            'order_status' => 'Pending',
            'cart' => $cart // Lưu giỏ hàng vào session để sử dụng sau
        ]);

        $amount = $total + 30000; // Thêm phí giao hàng

        if ($pttt == 1) {
            return $this->momoqr_payment($request->merge(['amount' => $amount]));
        } else if ($pttt == 2) {
            return $this->momo_payment($request->merge(['amount' => $amount]));
        }
    }

    return redirect()->route('thanh_toan')->with('error', 'Phương thức thanh toán không hợp lệ.');
}


    public function momoPaymentResult(Request $request)
    {
        $resultCode = $request->get('resultCode');

        if ($resultCode == 0) {
            // Lấy dữ liệu order từ session và lưu vào DB
            $orderData = Session::get('order_data');
            $orderId = DB::table('tbl_customer_order')->insertGetId($orderData);

            // Lưu chi tiết đơn hàng vào bảng tbl_order_details
            foreach ($orderData['cart'] as $item) {
                DB::table('tbl_order_details')->insert([
                    'order_id' => $orderId,
                    'product_id' => $item['product_id'],
                    'product_quantity' => $item['product_quantity'],
                    'product_price' => $item['product_price'],
                    'total_price' => $item['product_price'] * $item['product_quantity'],
                    'created_at' => now(),
                    'updated_at' => now(),
                    'size_id' => $item['product_size']
                ]);
            }

            // Lưu orderId vào session để dùng ở trang hóa đơn
            Session::put('id', $orderId);

            // Cập nhật số lượng hàng còn trong kho
            foreach ($orderData['cart'] as $item) {
                DB::table('tbl_product')
                    ->where('product_id', $item['product_id'])
                    ->decrement('product_number', $item['product_quantity']);
            }

            // Gửi email chi tiết đơn hàng
            $order = DB::table('tbl_customer_order')->where('order_id', $orderId)->first();
            Mail::to($orderData['customer_email'])->send(new OrderDetailsMail($order));

            // Xóa session
            Session::forget(['order_data', 'cart', 'customer_id', 'name', 'email', 'phone_num', 'province', 'district', 'address', 'apartment', 'note', 'file_input']);

            return redirect()->route('hoa_don');
        } else {
            return redirect()->route('thanh_toan')->with('error', 'Thanh toán thất bại. Bạn hãy thử chọn phương thức thanh toán khác.');
        }
    }
}
