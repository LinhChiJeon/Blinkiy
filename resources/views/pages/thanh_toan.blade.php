@extends('layout.app')

@section('content')
<div class="process">
    <div class="current"> Vận chuyển&nbsp; </div> >
    <div class="current"> &nbsp;Thông tin bổ sung&nbsp; </div> >
    <div class="current"> &nbsp;Thanh toán&nbsp; </div>
</div>

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<form method="POST" action="{{ route('submit_thanh_toan') }}" class="check_out">
    @csrf
    <div class="confirm">
        <p class="confirm_header">Xác nhận đơn hàng</p>
        <div class="confirm_info">
            <p>Họ tên: <span id="hoten">{{ $hoten }}</span></p>
            <p>Email: <span id="email">{{ $email }}</span></p>
            <p>SĐT: <span id="dthoai">{{ $sdt }}</span></p>
            <p>Địa chỉ: 
                @if ($apartment) <span id="can_ho">{{ $apartment }}</span>, @endif
                <span id="dia_chi">{{ $address }}</span>,
                @if(isset($huyen)) <span id="huyen">{{ $huyen }}</span>, @endif
                <span id="tinh">{{ $tinh }}</span>
            </p>
            @if ($note)
                <p>Ghi chú: <span id="ghi_chu">{{ $note }}</span></p>
            @endif
            @if ($file)
                <p>File mô tả: <span id="file_name">{{ $file }}</span></p>
                <img src="{{ $file }}" alt="Uploaded File" style="max-width: 100%; height: auto;">
            @else
                <p>Không có ảnh nào được chọn</p>
            @endif
        </div>
        <hr>
        <p class="payment_opt_header">Phương thức thanh toán</p>
        <div class="payment_opt">
            <div class="opt">
                <input type="radio" id="momo" name="pttt" value="1">
                <label for="momo">Thanh toán bằng MoMo QR Code</label>
            </div>
            <div class="opt">
                <input type="radio" id="bank" name="pttt" value="2">
                <label for="bank">Thanh toán bằng MoMo ATM</label>
            </div>
            <div class="opt">
                <input type="radio" id="tien_mat" name="pttt" value="3">
                <label for="tien_mat">Thanh toán khi nhận hàng</label>
            </div>
        </div>
    </div>

    <div class="info_container">
        <div class="info">
            <p class="info_header">Thông tin đơn hàng</p>
                    <hr>
            <div class="items_list">
                @foreach ($cart as $item)
                <div class="item">
                    {{-- <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}"> --}}
                    <p class="item_name">{{ $item['product_name'] }}</p>
                    <p class="item_color">Màu: {{ $item['product_color'] }}</p>
                    <p class="item_size">Kích cỡ: {{ $item['product_size'] }}</p>
                    <p class="product_quantity">{{ $item['product_quantity'] }}</p>
                    <p class="item_total">{{ number_format($item['product_price'] * $item['product_quantity'], 0, ',', '.') }} ₫</p>
                    <p></p>
                </div>
                @endforeach
            </div>
            <div class="fees">
                <hr>
                <div class="items_total">
                    <span class="total_header">Thành tiền</span>       
                    <span class="total">{{ number_format($total, 0, ',', '.') }} ₫</span>
                </div>
                <div class="shipping_fee">
                    <span class="shipping_header">Phí giao hàng</span> 
                    <span class="shipping">30.000</span>
                </div>
                <hr>
            </div>
            <div class="sum_container">
                <span>Tổng tiền</span> 
                <span class="sum" name="sum">{{ number_format($total + 30000, 0, ',', '.') }} ₫</span>
            </div>
            <div class="discount_container">
                <input type="Input" name="discount" placeholder="Mã giảm giá...">
                <button class="apply_discount">
                    <img class="discount_icon" src="/xampp/htdocs/code/do_an/pics/discount_ticket.png" alt="discount">Áp dụng
                </button>
            </div>
            <div class="pay">
                <button type="submit" class="pay_button" name="submit_payment">Thanh toán</button>
            </div>
        </div>
    </div>
</form>
@endsection
