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
    <div class="display-flex">
        <div class="navbar">
            <div class="logo">Trang Admin</div>
            <div class="nav-list">
                <a class="nav-link" href="{{ route('admin-products') }}">Danh sách sản phẩm</a>
                <a class="nav-link" href="{{ route('admin-products-add') }}">Thêm sản phẩm</a>
                <a class="nav-link" href="{{ route('admin-news') }}">Danh sách tin tức</a>
                <a class="nav-link" href="{{ route('admin-news-add') }}">Thêm tin tức</a>
                <a class="nav-link" href="{{ route('admin-login') }}">Đăng xuất</a>
            </div>
        </div>
        <div class="container display-flex-ta">
            <h1>Nhập thông tin</h1>
            <form action="test" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="test">Tên sản phẩm test:</label>
                <input type="text" id="test" name="test" required><br><br>
                <input style="margin-bottom: 30px" type="submit" value="Thêm sản phẩm">
            </form>
            @if (isset($successMessage))
                <div class="alert alert-success">
                    {{ $successMessage }}
                </div>
            @endif
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
