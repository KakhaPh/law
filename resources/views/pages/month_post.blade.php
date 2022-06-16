@extends('layouts.app')

@section('content')
    <div style="background-image: url('{{ asset('storage/Images/page-title-background.jpg') }}')" class="monthPost_banner_div">
        <h1 class="monthPost_banner_title">Month</h1>
        <h3 class="monthPost_banner_title_under"> {{ 
            // date convertation to day month year
            date('F Y ', strtotime($news[0]->news_created_at))

            }}</h3>
    </div>
    <div class="monthPost_container">

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
    <div class="news_archives">
        <h3>არქივები</h3>
        <ul>
        @foreach($allNews as $news_item)
        {{-- convert news_created_at string to array--}}
        @php
            // $date = explode('-', $news_item->news_created_at);
            // $ym = $date[0].'-'.$date[1];
            // $year = $date[0];
            // $month = $date[1];
            // $day = $date[2];
            // slice last -num
            // print_r($ym);
        @endphp
            <li>
                <a href="{{ route('news.month',date('Y-m', strtotime($news_item->news_created_at)) ) }}">
                    {{ date('F Y', strtotime($news_item->news_created_at)) }}
                </a>
            </li>

       
            @endforeach
        </ul>
    </div>
</div>

@endsection

 {{-- @push('scripts')
<script src="{{ asset("js/slider.js") }}"></script>
@endpush --}}

@push('styles')
<link rel="stylesheet" href="{{ asset('css/newsByMonth.css') }}">
@endpush 