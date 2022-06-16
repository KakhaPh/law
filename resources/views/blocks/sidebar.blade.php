<div class="news__sidebar">
    <form method="GET" class="searchform">
        <div class="inp__box">
            <input class="search_type" autocomplete="off" placeholder="Type keywords...">
            <button class="search_submit" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <div class="news_sidebar__textWidget">
        <h4>Text Widget</h4>
        <p>Sed posuere consectetur est at lobortis. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    </div>

    <div class="news__sidebar__practiceWidget">
        <h4>Practice Widget</h4>
        <div class="news__sidebar__practiceWidget__item">
            <img src="{{asset('storage/Images/acc_img1.jpg')}}" width='65' height='65' alt="">
            <div class="news__sidebar__practiceWidget__item-info">
                <h5>5 წელი ერთად</h5>
                <a href="#">Learn more <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="news__sidebar__practiceWidget__item">
            <img src="{{asset('storage/Images/acc_img2.jpg')}}" width='65' height='65' alt="">
            <div class="news__sidebar__practiceWidget__item-info">
                <h5>2019 წლის ანგარიში</h5>
                <a href="#">Learn more <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="news__sidebar__practiceWidget__item">
            <img src="{{asset('storage/Images/acc_img3.jpg')}}" width='65' height='65' alt="">
            <div class="news__sidebar__practiceWidget__item-info">
                <h5>2018 წლის ანგარიში</h5>
                <a href="#">Learn more <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="news__sidebar__practiceWidget__item">
            <img src="{{asset('storage/Images/acc_img4.jpg')}}" width='65' height='65' alt="">
            <div class="news__sidebar__practiceWidget__item-info">
                <h5>2015-2017 წლების ანგარიში</h5>
                <a href="#">Learn more <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>

        <br>
        <div class="news__sidebar__comments">
            <h4>ბოლო კომენტარები</h4><br><br>
        </div>

        <div class="news__sidebar__tags">
            <h4>Tag Cloud</h4>
            <div class="news__sidebar__tags_main">
                @foreach($tags as $tag)
                <div class="news__sidebar__tags__item">
                    <a href="{{ route('news.tag', $tag->tags_id )}}">{{ $tag->tags_name }}</a>
                </div>
                @endforeach
            </div>
        </div>
</div>
@push('styles')
<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
@endpush