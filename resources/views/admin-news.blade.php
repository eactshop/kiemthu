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
            <h1 class="mgb-30 mt-4 text-center">Danh sách tin tức</h1>
            <div class="container">
                <div class="row admin-list__row">
                    <div class="col-3">
                        <h5>ID</h5>
                    </div>
                    <div class="col-3">
                        <h5>Ảnh tin tức</h5>
                    </div>
                    <div class="col-3">
                        <h5>Ngày đăng</h5>
                    </div>
                    <div class="col-3">
                        <h5>Tiêu đề</h5>
                    </div>
                </div>

                @php
                $itemsPerPage = 5;
                $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                $startIndex = ($currentPage - 1) * $itemsPerPage;
                $endIndex = $startIndex + $itemsPerPage;
                $totalnews = count($news);
                @endphp

                @for ($i = $startIndex; $i < $endIndex && $i < $totalnews; $i++)
                    <div class="row admin-list__row">
                        <div class="col-3 admin-col">
                            <h5>{{ $news[$i]['id'] }}</h5>
                        </div>
                        <div class="col-3 admin-col">
                            <img src="{{ asset('uploads/' . $news[$i]['news_img']) }}" alt="" class="admin-img">
                        </div>
                        <div class="col-3 admin-col">
                            <h5>{{ $news[$i]['news_date'] }}</h5>
                        </div>
                        <div class="col-3 admin-col">
                            <h5>{{ $news[$i]['news_title'] }}</h5>
                        </div>
                    </div>
                @endfor
            </div>
            <nav aria-label="Page navigation" class="admin-nav">
                <ul class="pagination">
                    @php
                    $totalPages = ceil($totalnews / $itemsPerPage);
                    @endphp

                    @for ($i = 1; $i <= $totalPages; $i++)
                        <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                            <a class="page-link" href="{{ route('admin-news') }}?page={{ $i }}">{{ $i }}</a>
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
