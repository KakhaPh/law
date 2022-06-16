@extends('layouts.app')

@section('content')
    <div style="background-image: url('{{ asset('storage/Images/page-title-background.jpg') }}')" class="news_post_banner_div">
        <h1 class="news_post_banner_title">{{$menu_info->name}}</h1>
        <h3 class="news_post_banner_title_under">{{$menu_info->body}}</h3>
    </div>
    @if(!empty($news_info))
    <div class="news_post__container">
        <div class="news_post__box">

        <div class="news_post__image">
            <img  src="{{ asset( $news_info->news_image) }}" alt="">
        </div>
        <div class="news_post__info">
            <h3>{{ $news_info->news_title }}</h3>
            <div class="news_post__subInfo">
                <p>
                     <i class="fas fa-clock"></i>
            {{ 
             date('j F Y', strtotime($news_info->news_created_at))
                }}</p>
                <p class="user_info"> <i class="fas fa-user"></i> {{ $news_info->name }} </p>
                
                <p class="user_info"><i class="fas fa-comment"></i> 0 </p>
            </div>

            <div class="news_post__content">
                <p>{{ $news_info->news_content }}</p>
            </div>

            <div class="news_post__gallery">
                @foreach($news_images as $news_image)
                <div class="news_post__gallery_item">
                    <img src="{{ asset( $news_image) }}" alt="">
                </div>
                @endforeach
               
            </div>
        </div>
        {{-- include blocks sidebar --}}
    </div>
    
    @else
            {{-- Error  --}}
            <div class="news_post__error">
                <h1>No News Found</h1>
            </div>

        </div>

        @endif
        @include('blocks.sidebar')



@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('css/newsPost.css') }}">
@endpush
{{-- @push('scripts')
<script src="{{ asset("js/slider.js") }}"></script>
@endpush --}}