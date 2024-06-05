@extends('layout.shipping_layout')

@section('content')
<div class="invoice">
    <h1>Hóa Đơn</h1>
    @if ($order)
        <div class="invoice_section">
            <h2>Thông tin khách hàng</h2>
            <p>Họ tên: {{ $order->customer_name ?? '' }}</p>
            <p>Email: {{ $order->customer_email ?? '' }}</p>
            <p>SĐT: {{ $order->customer_phone ?? '' }}</p>
            <p>Địa chỉ: {{ $order->customer_address ?? '' }}</p>
        </div>
        <div class="invoice_section">
            <h2>Thông tin đơn hàng</h2>
            <p>Mã đơn hàng: {{ $order->order_id ?? '' }}</p>
            <p>Ngày đặt hàng: {{ $order->order_date ?? '' }}</p>
            <p>Mô tả: {{ $order->order_note ?? '' }}</p>
            <p>Hình ảnh: <span id="img_des">{{ $order->order_files ?? '' }}</span></p>
        </div>
        <div class="invoice_section">
            <h2>Phương thức thanh toán</h2>
            @switch($order->payment_opt)
                @case(1)
                    <p>Thanh toán bằng MoMo QR Code</p>
                    @break
                @case(2)
                    <p>Thanh toán bằng MoMo ATM</p>
                    @break
                @case(3)
                    <p>Thanh toán khi nhận hàng</p>
                    @break
            @endswitch
        </div>
        <div class="invoice_section">
            <h2>Chi tiết sản phẩm</h2>
            @foreach ($orderDetails as $item)
                <div class="item">
                    <p class="item_name">{{ $item->product_name }}</p>
                    <p class="item_color">Màu: {{ $item->product_color }}</p>
                    <p class="item_size">Kích cỡ: {{ $item->product_size }}</p>
                    <p class="item_quantity">SL: {{ $item->product_quantity }}</p>
                    <p class="item_price">Đơn giá: {{ number_format($item->product_price, 0, ',', '.') }} ₫</p>
                    <p class="item_total">Thành tiền: {{ number_format($item->total_price, 0, ',', '.') }} ₫</p>
                </div>
            @endforeach
        </div>
        <div class="invoice_section">
            <p>Tổng tiền: {{ number_format($order->order_total_price, 0, ',', '.') }} ₫</p>
            <p>Phí giao hàng: 30,000 ₫</p>
            <p>Thành tiền: {{ number_format($order->order_total_price + 30000, 0, ',', '.') }} ₫</p>
        </div>
    @else
        <p>Không tìm thấy hóa đơn.</p>
    @endif
</div>
@endsection
