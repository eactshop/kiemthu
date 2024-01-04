<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    @include('blocks.header')
    @include('blocks.navbar')
    @include('blocks.slide')
    <div class="list-product">
        <h1 class="lp-title">Bạn Cần Tìm?</h1>
        <div class="container text-center">
            <div class="row mgb-20">
                <a href="#" class="lp-col shadow-sm col">
                    <img src="{{ asset('assets/images/sp1.jpg') }}" alt="" class="lp-img">
                    <div class="lp-name">Sản phẩm gia đình</div>
                </a>
                <a href="#" class="lp-col shadow-sm col">
                    <img src="{{ asset('assets/images/sp2.jpg') }}" alt="" class="lp-img">
                    <div class="lp-name">Sản phẩm PET</div>
                </a>
                <a href="#" class="lp-col shadow-sm col">
                    <img src="{{ asset('assets/images/sp3.jpg') }}" alt="" class="lp-img">
                    <div class="lp-name">Sản phẩm plaxury</div>
                </a>
                <a href="#" class="lp-col shadow-sm col">
                    <img src="{{ asset('assets/images/sp4.jpg') }}" alt="" class="lp-img">
                    <div class="lp-name">Sản phẩm Matsu</div>
                </a>
                <a href="#" class="lp-col shadow-sm col">
                    <img src="{{ asset('assets/images/sp5.jpg') }}" alt="" class="lp-img">
                    <div class="lp-name">Sản phẩm gia đình</div>
                </a>
                <a href="#" class="lp-col shadow-sm col">
                    <img src="{{ asset('assets/images/sp6.jpg') }}" alt="" class="lp-img">
                    <div class="lp-name">Sản phẩm nội thất</div>
                </a>
            </div>
            <div class="row">
                <a href="#" class="lp-col shadow-sm col">
                    <img src="{{ asset('assets/images/sp7.jpg') }}" alt="" class="lp-img">
                    <div class="lp-name">Sản phẩm gia đình</div>
                </a>
                <a href="#" class="lp-col shadow-sm col">
                    <img src="{{ asset('assets/images/sp8.jpg') }}" alt="" class="lp-img">
                    <div class="lp-name">Sản phẩm gia đình</div>
                </a>
                <a href="#" class="lp-col shadow-sm col">
                    <img src="{{ asset('assets/images/sp9.jpg') }}" alt="" class="lp-img">
                    <div class="lp-name">Sản phẩm gia đình</div>
                </a>
                <a href="#" class="lp-col shadow-sm col">
                    <img src="{{ asset('assets/images/sp10.jpg') }}" alt="" class="lp-img">
                    <div class="lp-name">Sản phẩm gia đình</div>
                </a>
                <a href="#" class="lp-col shadow-sm col">
                    <img src="{{ asset('assets/images/sp11.jpg') }}" alt="" class="lp-img">
                    <div class="lp-name">Sản phẩm gia đình</div>
                </a>
                <a href="#" class="lp-col shadow-sm col">
                    <img src="{{ asset('assets/images/sp12.jpg') }}" alt="" class="lp-img">
                    <div class="lp-name">Sản phẩm gia đình</div>
                </a>
            </div>
        </div>
    </div>
    <div class="quality">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="quality-title">Chất lượng chuẩn quốc tế</h3>
                    <div class="quality-text">Được kiểm định nghiêm ngặt từ khâu thiết kế, sản xuất đến khâu hoàn thiện
                        và giao hàng. Sản phẩm của Duy Tân còn được xuất khẩu đi nhiều thị trường khó tính như Hoa Kỳ,
                        Nhật Bản, Châu Âu…</div>
                </div>
                <div class="col col-quality">
                    <img src="{{ asset('assets/images/quality1.png') }}" alt="" class="quality-img">
                    <h3 class="quality-title">Thiết kế</h3>
                    <div class="quality-text">Sản phẩm thân thiện với môi trường</div>
                </div>
                <div class="col col-quality col-quality__bg1">
                  <img src="{{ asset('assets/images/quality2.png') }}" alt="" class="quality-img">
                    <h3 class="quality-title">Sản xuất</h3>
                    <div class="quality-text">Quy trình sản xuất đạt chuẩn quốc tế</div>
                </div>
                <div class="col col-quality col-quality__bg2">
                  <img src="{{ asset('assets/images/quality3.png') }}" alt="" class="quality-img">
                  <h3 class="quality-title">Phân phối</h3>
                  <div class="quality-text">Cam kết Giao hàng nhanh chóng mọi lúc mọi nơi</div>

                </div>
            </div>
        </div>
    </div>

    @include('blocks.new')
    @include('blocks.footer')
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>

