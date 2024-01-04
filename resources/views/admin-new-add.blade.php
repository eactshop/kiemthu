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
            <h1>Nhập thông tin tin tức</h1>
            <form action="{{ route('admin-news-add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="tieuDe">Tiêu đề:</label>
                <input type="text" id="tieuDe" name="tieuDe" required><br><br>
                <label for="anhTinTuc">Ảnh tin tức:</label>
                <input type="file" id="anhTinTuc" name="anhTinTuc" accept="image/*" required><br><br>
                <label for="noiDung">Nội dung:</label>
                <input type="text" id="noiDung" name="noiDung" required><br><br>
                <label for="ngayDang">Ngày đăng:</label>
                <input type="text" id="ngayDang" name="ngayDang" required><br><br>
                <input style="margin-bottom: 30px" type="submit" value="Thêm tin tức">
            </form>
            @if (isset($successMessage))
                <div class="alert alert-success">
                    {{ $successMessage }}
                </div>
            @endif

            @if (isset($erro))
                <div class="alert">
                    {{ $erro }}
                </div>
            @endif
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
