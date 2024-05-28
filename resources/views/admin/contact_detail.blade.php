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
            <!-- Add other fields as necessary -->
        </table>
    </div>

    <div class="panel-body">
        <form action="{{ route('send.email.to.customer') }}" method="POST">
            @csrf
            <input type="hidden" name="stt" value="{{ $contact->stt }}">
            <input type="hidden" name="customer_email" value="{{ $contact->Email }}">
            <div class="form-group">
                <label for="email_subject">Tiêu đề email:</label>
                <input type="text" name="email_subject" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email_body">Nội dung email:</label>
                <textarea name="email_body" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Gửi email</button>
        </form>
    </div>
</section>
@endsection
