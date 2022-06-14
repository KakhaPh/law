@extends('layouts.app')

@section('content')
    <div style="background-image: url('{{ asset('storage/Images/page-title-background.jpg') }}')" class="news_banner_div">
        <h1 class="news_banner_title">{{$menu_info->name}}</h1>
        <h3 class="news_banner_title_under">{{$menu_info->body}}</h3>
    </div>

      <div class="news__container">
          <div class="news_items">
                @foreach($news as $news_item)
                <div class="news_item">
                    <div class="news_item_img">
                        <img  src="{{ asset( $news_item->news_image) }}" alt="">
                    </div>
                    <div class="news_item_info">
                        <h3>{{ $news_item->news_title }}</h3>
                        <div class="news_item_subInfo">
                            <p>
                                 <i class="fas fa-clock"></i>
                           {{ 
                            // date convertation to day month year
                            date('j F Y', strtotime($news_item->news_created_at))

                            }}</p>
                            <p class="user_info"> <i class="fas fa-user"></i> {{ $news_item->name }} </p>
                        </div>
                        <p>{{ $news_item->news_about }}</p>
                    </div>
                    <a href=" {{ route('news.show',$news_item->news_id) }}" class="news_btn-link">Read More</a>
                </div>
                @endforeach
          </div>
          <div class="news__sidebar">
              <div class="news__sidebar__input">
                    <input type="text" placeholder="Type keywords...">
              </div>
              <div class="news_sidebar__textWidget">
                  <h3>Text Widget</h3>
                    <p>Sed posuere consectetur est at lobortis. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
              </div>
              <div class="news__sidebar__practiceWidget">
                <h3>Practice Widget</h3>
                <div class="news__sidebar__practiceWidget__item">
                    <img src="{{asset('storage/Images/acc_img1.jpg')}}" width='65' height='65' alt="">
                    <div class="news__sidebar__practiceWidget__item-info">
                        <h3>5 წელი ერთად</h3>
                        <a href="#">Learn more</a>
                    </div>
                </div>

                <div class="news__sidebar__practiceWidget__item">
                    <img src="{{asset('storage/Images/acc_img1.jpg')}}" width='65' height='65' alt="">
                    <div class="news__sidebar__practiceWidget__item-info">
                        <h3>5 წელი ერთად</h3>
                        <a href="#">Learn more</a>
                    </div>
                </div>

                <div class="news__sidebar__practiceWidget__item">
                    <img src="{{asset('storage/Images/acc_img1.jpg')}}" width='65' height='65' alt="">
                    <div class="news__sidebar__practiceWidget__item-info">
                        <h3>5 წელი ერთად</h3>
                        <a href="#">Learn more</a>
                    </div>
                </div>

                 <div class="news__sidebar__practiceWidget__item">
                    <img src="{{asset('storage/Images/acc_img1.jpg')}}" width='65' height='65' alt="">
                    <div class="news__sidebar__practiceWidget__item-info">
                        <h3>5 წელი ერთად</h3>
                        <a href="#">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="news__sidebar__comments">
                <h3>ბოლო კომენტარები</h3>
                {{-- ... --}}
            </div>
            
            <div class="news__sidebar__tags">
                <h4>Tag Cloud</h4>
            <div class="news__sidebar__tags_main">
                @foreach($tags as $tag)
                <div class="news__sidebar__tags__item">
                    <a href="tags/{{ $tag->tags_id }}">{{ $tag->tags_name }}</a>
                 </div>
                @endforeach
            </div>
        </div>
          </div>
      </div>
    
@endsection

@push('scripts')
{{-- <script src="{{ asset("js/slider.js") }}"></script> --}}
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endpush