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
        <div class="container admin-container">
            <h1 class="mgb-30 mt-4 text-center">Danh sách sản phẩm</h1>
            <div class="container">
                <div class="row admin-list__row">
                    <div class="col-3">
                        <h5>id</h5>
                    </div>
                    <div class="col-3">
                        <h5>Tên sản phẩm</h5>
                    </div>
                    <div class="col-3">
                        <h5>Ảnh sản phẩm</h5>
                    </div>
                    <div class="col-3">
                        <h5>Ghi chú</h5>
                    </div>
                </div>

                @php
                $itemsPerPage = 5;
                $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                $startIndex = ($currentPage - 1) * $itemsPerPage;
                $endIndex = $startIndex + $itemsPerPage;
                $totalProducts = count($products);
                @endphp

                @for ($i = $startIndex; $i < $endIndex && $i < $totalProducts; $i++)
                    <div class="row admin-list__row">
                        <div class="col-3 admin-col">
                            <h5>{{ $products[$i]['id'] }}</h5>
                        </div>
                        <div class="col-3 admin-col">
                            <h5>{{ $products[$i]['name'] }}</h5>
                        </div>
                        <div class="col-3 admin-col">
                            <img src="{{ asset('uploads/' . $products[$i]['img']) }}" alt="" class="admin-img">
                        </div>
                        <div class="col-3 admin-col">
                            <h5>{{ $products[$i]['ghichu'] }}</h5>
                        </div>
                    </div>
                @endfor
            </div>
            <nav aria-label="Page navigation" class="admin-nav">
                <ul class="pagination">
                    @php
                    $totalPages = ceil($totalProducts / $itemsPerPage);
                    @endphp

                    @for ($i = 1; $i <= $totalPages; $i++)
                        <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                            <a class="page-link" href="{{ route('admin-products') }}?page={{ $i }}">{{ $i }}</a>
                        </li>
                    @endfor
                </ul>
            </nav>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
