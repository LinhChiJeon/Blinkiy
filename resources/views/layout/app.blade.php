<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style_hoa_don.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style_thanh_toan.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/style_bo_sung.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/StyleHeaderOnly.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontend/css/StyleFooterOnly.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('public/frontend/js/file_upload_handling.js') }}"></script>
</head>
<body>
    <header>
        @include('includes.navbar')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('includes.footer')
    </footer>

    <!-- Add scripts -->
    @yield('scripts')
</body>
</html>
