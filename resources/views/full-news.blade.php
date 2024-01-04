<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tin tức - Sự kiện</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    @include('blocks.header')
    @include('blocks.navbar')
    <div class="full-news">
        <div class="row ">
            <div class="col-8 full-news__col1">
                <h1 class="full-new__title">{{ $news->news_title }}</h1>
                <div class="time-line">
                    <div class="full-new__time">{{ $news->news_date }}</div>
                    <div class="line"></div>
                </div>
                <div class="full-new__description">
                    <span class="fn-des__text">{{ $news->news_content }}</span>
                    <img src="{{ asset('uploads/' . $news->news_img) }}" alt="" class="fn-des__img">
                </div>
            </div>
            <div class="col-4 full-news__col2">
                <div class="other-news">
                    <h1 class="other-new__title">Tin tức khác</h1>
                    @foreach($other_news as $item)
                    <a href="{{ route('full-new', ['id' => $item['id']]) }}" class="other-new">
                        <img src="{{ asset('uploads/' . $item['news_img']) }}" alt="" class="other-new__img">
                        <div class="other-new__des">
                            <div class="other-new__time">{{ $item['news_date'] }}</div>
                            <h1 class="other-new__text">{{ $item['news_title'] }}</h1>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('blocks.footer')
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
