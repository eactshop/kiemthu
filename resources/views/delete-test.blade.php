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
            <h1>Nhập thông tin xóa</h1>
            <form action="{{ route('delete.test') }}" method="POST">
                @csrf
                @method('DELETE')
                <label for="testdelete">ID sản phẩm cần xóa:</label>
                <input type="text" id="testdelete" name="testdelete" required><br><br>
                <input style="margin-bottom: 30px" type="submit" value="Xóa sản phẩm">
            </form>
            @if (isset($successMessagedelete))
                <div class="alert alert-success">
                    {{ $successMessagedelete }}
                </div>
            @endif
        </div>
        
    </div>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
