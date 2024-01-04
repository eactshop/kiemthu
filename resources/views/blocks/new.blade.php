<div class="news">
    <h1 class="new-title">Tin tức - Sự kiện</h1>
    <div class="container">
        <div class="row">
          @foreach($news as $item)
          <a href="{{ route('full-new', ['id' => $item['id']]) }}" class="col-3 col-st mgb-60">
            <div class="new-time">{{ $item['news_date'] }}</div>
            <div class="new-text">{{ $item['news_title'] }}</div>
            <img class="new-img" src="{{ asset('uploads/' . $item['news_img']) }}" alt="">
          </a>
          @endforeach
        </div>
      </div>
</div>