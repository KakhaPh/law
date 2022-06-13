@extends('layouts.app')

@section('content')
    <div style="background-image: url('{{ asset('storage/Images/page-title-background.jpg') }}')" class="about_banner_div">
        <h1 class="about_banner_title">{{$menu_info->name}}</h1>
        <h3 class="about_banner_title_under">{{$menu_info->body}}</h3>
    </div>

        <div class="about__main__slider">
            <div id="slider" class="about__slider">
                @foreach($authors as $author)
                <div class="about__slider__item">
                    <img width="160px" src="{{ asset( $author->image) }}" alt="">
                    <div class="about__main__slider-info">
                        <h3>{{ $author->name }} {{$author->lastname}}</h3>
                        <p >{{ $author->position }}</p>
                        <p>{{ $author->about }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    
@endsection

@push('scripts')
<script src="{{ asset("js/slider.js") }}"></script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush