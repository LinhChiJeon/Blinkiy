@extends('admin_layout')
@section('admin_content')
<link rel="stylesheet" href="{{ asset('public/backend/css/contact.css') }}">
<section class="panel">
    <header class="panel-heading">
        Các thắc mắc cần liên hệ đã được xử lý
    </header>
    <div class="panel-body">
        <table border='1' cellspacing='0'>
            <tr>
                <th class='contact_STT'>STT</th>
                <th class='contact_Ten'>Tên khách hàng</th>
                <th class='contact_SDT'>SĐT</th>
                <th class='contact_Email'>Email</th>
                <th class='contact_TieuDe'>Tiêu đề</th>
                <th class='contact_CauHoi'>Câu hỏi</th>
                <th class='contact_HoatDong'>Hoạt động</th>
            </tr>
            @foreach ($contacts as $index => $contact)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $contact->TenKhachHang }}</td>
                    <td>{{ $contact->SDT }}</td>
                    <td>{{ $contact->Email }}</td>
                    <td>{{ $contact->TieuDe }}</td>
                    <td>{{ $contact->CauHoi }}</td>
                    <td>
                        <a href="{{ url('/lich-su-phan-hoi/' . $contact->stt) }}">Lịch sử Phản hồi</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection
