<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giới Thiệu</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    @include('blocks.header')
    @include('blocks.navbar')
    <div class="info">
        <div class="row">
            <div class="col col-info__st">
                <h2 class="info-title">Về Duy Tân</h2>
            </div>
            <div class="col">
                <h2 class="info-title1 mg70">Tổng quan về Công ty</h2>
                <h3 class="info-description mgt20 mg70">Được thành lập vào năm 1987, Duy Tân là thương hiệu nhựa uy tín
                    hàng đầu
                    Việt Nam với các sản phẩm nhựa gia dụng, nhựa bao bì, nhựa công nghiệp chất lượng cao. Năm 2021, Duy
                    Tân chính thức trở thành thành viên của SCG Packaging (SCGP) và hướng đến mục tiêu trở thành nhà sản
                    xuất nhựa hàng đầu ASEAN.</h3>
            </div>
        </div>
    </div>
    <div class="achievements">
        <h1 class="achievements-title">
            Thành tựu nổi bật
        </h1>
        <h3 class="achievements-description">Duy Tân vinh dự đón nhận nhiều giải thưởng, danh hiệu, chứng nhận từ các tổ
            chức uy tín:</h3>
        <div class="container container-ta">
            <div class="row">
                <div class="col col-ta col-ta__1">
                    <h1 class="col-info__title">26 Năm</h1>
                    <h3 class="col-info__description">Hàng Việt Nam chất lượng cao (từ 1997 - nay)</h3>
                </div>
                <div class="col col-ta col-ta__1">
                    <h1 class="col-info__title">12 Năm</h1>
                    <h3 class="col-info__description">Top 500 Doanh nghiệp lớn nhất Việt Nam (VNR500)</h3>
                </div>
                <div class="col col-ta col-ta__1">
                    <h1 class="col-info__title">10 Năm</h1>
                    <h3 class="col-info__description">Top 500 Doanh nghiệp tăng trưởng nhanh nhất Việt Nam (FAST500)
                    </h3>
                </div>
                <div class="col col-ta col-ta__1">
                    <h1 class="col-info__title">4 Năm</h1>
                    <h3 class="col-info__description">Thương hiệu Quốc Gia (2014 - 2016 - 2018 - 2020)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col col-ta__1">
                    <h1 class="col-info__title">Doanh nghiệp Xuất khẩu uy tín nhất Việt Nam</h1>
                    <h3 class="col-info__description">Thương hiệu Quốc Gia (2014 - 2016 - 2018 - 2020)</h3>
                </div>
                <div class="col col-ta__1">
                    <h1 class="col-info__title">Doanh nghiệp Xuất sắc và Bền vững châu Á 2020</h1>
                    <h3 class="col-info__description">Thương hiệu Quốc Gia (2014 - 2016 - 2018 - 2020)</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="about-1 mgb-60">
            <div class="container text-center">
                <div class="shadow-ta row row-about">
                    <div class="about-title">Chứng nhận</div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/chung-nhan-1.jpg') }}" alt="">
                    </div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/chung-nhan-2.jpg') }}" alt="">
                    </div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/chung-nhan-3.jpg') }}" alt="">
                    </div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/chung-nhan-4.jpg') }}" alt="">
                    </div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/chung-nhan-5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="about-1 mgb-60">
            <div class="container text-center">
                <div class="shadow-ta row row-about">
                    <div class="about-title">Giải thưởng</div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/giai-thuong-1.jpg') }}" alt="">
                    </div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/giai-thuong-2.jpg') }}" alt="">
                    </div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/giai-thuong-3.jpg') }}" alt="">
                    </div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/giai-thuong-4.jpg') }}" alt="">
                    </div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/giai-thuong-5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="about-1">
            <div class="container text-center">
                <div class="shadow-ta row row-about">
                    <div class="about-title">Khách hàng tiêu biểu</div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/khach-hang-1.jpg') }}" alt="">
                    </div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/khach-hang-2.jpg') }}" alt="">
                    </div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/khach-hang-3.jpg') }}" alt="">
                    </div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/khach-hang-4.jpg') }}" alt="">
                    </div>
                    <div class="col-about col">
                        <img class="col-about__img" src="{{ asset('assets/images/khach-hang-5.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="quality">
        <div class="container">
            <div class="row">
                <div class="col col-quality col-info col-quality__bg4">
                    <img src="{{ asset('assets/images/about1.png') }}" alt="" class="quality-img">
                    <h3 class="quality-title">Chất Lượng Hàng Đầu</h3>
                    <div class="quality-text">Duy Tân là thương hiệu nhựa hàng đầu Việt Nam và mục tiêu trở thành nhà
                        sản xuất nhựa hàng đầu ASEAN.</div>
                </div>
                <div class="col col-quality col-info">
                    <img src="{{ asset('assets/images/about2.png') }}" alt="" class="quality-img">
                    <h3 class="quality-title">Chứng Nhận An Toàn</h3>
                    <div class="quality-text">Nhựa Duy Tân cam kết không sử dụng hoá chất độc hại trong sản phẩm của
                        mình</div>
                </div>
                <div class="col col-quality col-info col-quality__bg1">
                    <img src="{{ asset('assets/images/about3.png') }}" alt="" class="quality-img">
                    <h3 class="quality-title">Giao Hàng Nhanh Chóng</h3>
                    <div class="quality-text">Chúng tôi cam kết Giao hàng nhanh chóng mọi lúc mọi nơi</div>
                </div>
                <div class="col col-quality col-info col-quality__bg2">
                    <img src="{{ asset('assets/images/about4.png') }}" alt="" class="quality-img">
                    <h3 class="quality-title">Tại Sao Chọn Nhựa Duy Tân</h3>
                    <div class="quality-text">Sản phẩm của Duy Tân đều trải qua quy trình kiểm định nghiêm ngặt từ khâu
                        thiết kế, sản xuất đến khâu hoàn thiện và giao hàng.</div>

                </div>
            </div>
        </div>
    </div>
    @include('blocks.footer')
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
