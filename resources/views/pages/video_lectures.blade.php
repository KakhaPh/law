@extends('layouts.app')

@section('content')
    <div style="background-image: url('{{ asset('storage/Images/page-title-background.jpg') }}')" class="lectures_banner_div">
        <h1 class="lectures_banner_title">{{$menu_info->name}}</h1>
    </div>
    <div class="lectures__container">
        <div class="videos__container">
            @foreach($video_lectures as $video)
                <div class="video__box">
                    <div class="img__box">
                        <a href=""><img src="{{ asset($video->image) }}"></a>
                    </div>
                    <div class="header__text">
                        <h6>{{$video->name}}</h6>
                    </div>
                    <div class="inf__box">
                        <a href=""><i class="fas fa-clock"></i>{{$video->date}}</a>
                        <a href=""><i class="fas fa-user"></i>{{$video->uploader}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection


@push('styles')
<link rel="stylesheet" href="{{ asset('css/video_lectures.css') }}">
@endpush