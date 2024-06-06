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
                <td>{{ $contact->customer_name }}</td>
            </tr>
            <tr>
                <th>SĐT</th>
                <td>{{ $contact->customer_phone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $contact->Email }}</td>
            </tr>
            <tr>
                <th>Tiêu đề</th>
                <td>{{ $contact->contact_title }}</td>
            </tr>
            <tr>
                <th>Câu hỏi</th>
                <td>{{ $contact->contact_question }}</td>
            </tr>
        </table>
    </div>

    <div class="panel-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('send.email.to.customer') }}" method="POST">
            @csrf
            @if(session()->has('success-update-avatar'))
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                swal({
                    title: "Gửi thành công!",
                    icon: "mail_success",
                    // button: "Blinkiyyy!",
                });
                // Tự động tắt sau 3 giây
                setTimeout(function() {
                    swal.close();
                }, 2000);
            </script>
            @endif
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
