@extends('layouts.app')

@section('content')
    <div style="background-image: url('{{ asset('storage/Images/page-title-background.jpg') }}')" class="news_banner_div">
        <h1 class="news_banner_title">{{$menu_info->name}}</h1>
        <h5 class="news_banner_title_under">{{$menu_info->body}}</h5>
    </div>

    <div class="news__container">
        <div class="news_items">
            @foreach($news as $news_item)
            <div class="news_item">
                <div class="news_item_img">
                    <a href="{{ route('news.show',$news_item->news_id) }}"><img  src="{{ asset( $news_item->news_image) }}"></a>
                </div>
                <div class="news_item_info">
                    <h5>{{ $news_item->news_title }}</h5>
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
                <a href="{{ route('news.show',$news_item->news_id) }}" class="news_btn-link">Read More</a>
            </div>
            @endforeach
        </div>
        {{-- Sidebar --}}
        @include('blocks.sidebar')
    </div>
    
@endsection

@push('scripts')
{{-- <script src="{{ asset("js/slider.js") }}"></script> --}}
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endpush