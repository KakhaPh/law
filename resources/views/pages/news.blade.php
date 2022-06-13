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
                        <img width="300px" src="{{ asset( $news_item->news_image) }}" alt="">
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
                    <a href="news/{{$news_item->news_id}}" class="news_btn-link">Read More</a>
                </div>
                @endforeach
          </div>
      </div>
    
@endsection

@push('scripts')
{{-- <script src="{{ asset("js/slider.js") }}"></script> --}}
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endpush