@extends('layout.app')

@section('content')
<div class="invoice">
    <h1>Hóa Đơn</h1>
    @if ($order)
        <div class="invoice_section">
            <h2>Thông tin khách hàng</h2>
            <p>Họ tên: {{ $customer->customer_name ?? '' }}</p>
            <p>Email: {{ $customer->customer_email ?? '' }}</p>
            <p>SĐT: {{ $customer->customer_phone ?? '' }}</p>
            <p>Địa chỉ: {{ $customer->customer_address ?? '' }}</p>
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
                    <p>Thanh toán bằng MoMo</p>
                    @break
                @case(2)
                    <p>Thanh toán bằng ngân hàng</p>
                    @break
                @case(3)
                    <p>Thanh toán khi nhận hàng</p>
                    @break
            @endswitch
        </div>
        <div class="invoice_section">
            <h2>Chi tiết sản phẩm</h2>
            @foreach ($orderDetails as $detail)
                <div class="item">
                    <img src="{{ asset('pics/Rectangle 85.png') }}" alt="Sản phẩm">
                    <p class="item_name">{{ $detail->product_id }} (Mẫu 1)</p>
                    <p class="item_color">Màu: Trắng</p>
                    <p class="item_size">Kích cỡ: 17</p>
                    <p class="item_quantity">{{ $detail->product_quantity }}</p>
                    <p class="item_total">{{ number_format($detail->product_price * $detail->product_quantity, 0, ',', '.') }} ₫</p>
                </div>
            @endforeach
        </div>
        <div class="invoice_section">
            <p>Tổng tiền: {{ number_format($order->order_total_price, 0, ',', '.') }} ₫</p>
            <p>Giảm giá: 0</p>
            <p>Phí giao hàng: 30000</p>
            <p>Thành tiền: {{ number_format($order->order_total_price + 30000, 0, ',', '.') }} ₫</p>
        </div>
    @else
        <p>Không tìm thấy hóa đơn.</p>
    @endif
</div>
@endsection
