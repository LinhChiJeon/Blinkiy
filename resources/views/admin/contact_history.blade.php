@extends('admin_layout')
@section('admin_content')
<link rel="stylesheet" href="{{ asset('public/backend/css/contact.css') }}">
<section class="panel">
    <header class="panel-heading">
        Chi tiết liên hệ
    </header>
    <div class="panel-body">
        <table border='1' cellspacing='0'>
            <tr>
                <th>Tên khách hàng</th>
                <td>{{ $contact->TenKhachHang }}</td>
            </tr>
            <tr>
                <th>SĐT</th>
                <td>{{ $contact->SDT }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $contact->Email }}</td>
            </tr>
            <tr>
                <th>Tiêu đề</th>
                <td>{{ $contact->TieuDe }}</td>
            </tr>
            <tr>
                <th>Câu hỏi</th>
                <td>{{ $contact->CauHoi }}</td>
            </tr>
            <tr>
                <th>Phản hồi - Tiêu đề</th>
                <td>{{ $contact->PhanHoi_TieuDe }}</td>
            </tr>
            <tr>
                <th>Phản hồi - Nội dung</th>
                <td>{{ $contact->PhanHoi_NoiDung }}</td>
            </tr>
        </table>
    </div>
</section>
@endsection
