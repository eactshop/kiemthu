<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
    <div style="display: flex">
        <div class="navbar">
            <div class="logo">Trang Admin</div>
            <div class="nav-list">
                <a class="nav-link" href="{{route('admin-products') }}">Danh sách sản phẩm</a>
                <a class="nav-link" href="{{ route('admin-products-add') }}">Thêm sản phẩm</a>
                <a class="nav-link" href="{{route('admin-news') }}">Danh sách tin tức</a>
                <a class="nav-link" href="{{ route('admin-news-add') }}">Thêm tin tức</a>
                <a class="nav-link" href="{{ route('admin-login') }}">Đăng xuất</a>
            </div>
        </div>
        <h1 style="margin: 50px 100px">Xin chào Admin!</h1>
    </div>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>