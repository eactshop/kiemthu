<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
</head>

<body>
    @include('blocks.header')
    @include('blocks.navbar')
    <div class="ta-full__product">
        <div class="full-product__description">
            <img src="{{ asset('uploads/' . $product->img) }}" alt="" class="full-product__img">
            <div class="full-product__text">
                <div class="full-product__name">{{ $product->name }}</div>
                <div class="full-product__price">{{ $product->price }}</div>
                <div class="full-product__info">
                    <div class="fp-info__title">Thông tin sản phẩm</div>
                    <div class="fp-info__db">
                        <div class="fp-info__description">Đơn vị:</div>
                        <span>{{ $product->don_vi }}</span>
                    </div>
                    <div class="fp-info__db">
                        <div class="fp-info__description">Kích thước:</div>
                        <span>{{ $product->kich_thuoc }}</span>
                    </div>
                    <div class="fp-info__db">
                        <div class="fp-info__description">Màu sắc:</div>
                        <span>{{ $product->mau_sac }}</span>
                    </div>
                    <div class="mgt-20 fp-info__title">Thông tin mua hàng</div>
                    <button class="fp-info__btn" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-bs-whatever="@mdo">Liên hệ đặt hàng</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nhập thông tin liên hệ</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Họ tên:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Số điện thoại:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Địa chỉ:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Ghi chú:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Đóng</button>
                                    <button type="button" class="fp-btn__form btn btn-primary">Gửi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ta-product">
        <div class="ta-product__top">
            <h1 class="ta-product__title">Danh Sách Sản Phẩm</h1>
            <div class="arrange shadow-sm">
                <div class="arrange-title">Sắp xếp</div>
                <a class="arrange-link acctive" href="">Mới nhất</a>
                {{-- <a class="arrange-link" href="">Cũ nhất</a>
                <a class="arrange-link" href="">Giá: Thấp - Cao</a>
                <a class="arrange-link" href="">Giá: Cao - Thấp</a> --}}
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($other_product as $item)
                  <a href="{{ route('full-product', ['id' => $item['id']]) }}" class="col-2 ta-product__col">
                    <img src="{{ asset('uploads/' . $item['img']) }}" alt="" class="ta-product__img">
                    <div class="ta-product__name">{{ $item['name'] }}</div>
                    <div class="ta-product__price">{{ $item['price'] }}</div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    @include('blocks.footer')
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
