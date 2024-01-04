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
            <h1>Nhập thông tin sản phẩm</h1>
            <form action="{{ route('admin-products-add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="tenSanPham">Tên sản phẩm:</label>
                <input type="text" id="tenSanPham" name="tenSanPham" required><br><br>

                <label for="anhSanPham">Ảnh sản phẩm:</label>
                <input type="file" id="anhSanPham" name="anhSanPham" accept="image/*" required><br><br>
                <label for="danhMucSanPham">Danh mục sản phẩm:</label>
                <input type="text" id="danhMucSanPham" name="danhMucSanPham" required><br><br>

                <label for="dvSanPham">Đơn vị:</label>
                <input type="text" id="dvSanPham" name="dvSanPham" required><br><br>

                <label for="ktSanPham">Kích thước:</label>
                <input type="text" id="ktSanPham" name="ktSanPham" required><br><br>

                <label for="mauSanPham">Màu sắc:</label>
                <input type="text" id="mauSanPham" name="mauSanPham" required><br><br>

                <label for="giaSanPham">Giá sản phẩm:</label>
                <input type="text" id="giaSanPham" name="giaSanPham" required><br><br>

                <label for="ghichu">Ghi chu:</label>
                <input type="text" id="ghichu" name="ghichu" required><br><br>
                <input style="margin-bottom: 30px" type="submit" value="Thêm sản phẩm">
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
