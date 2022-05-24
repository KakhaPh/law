@extends('layouts.app')

@section('content')
    <div class="about_banner_div">
        <img src="{{ asset('storage/Images/page-title-background.jpg') }}" class="about_title">
        <h1 class="about_banner_title">ჩვენს შესახებ</h1>
        <h3 class="about_banner_title_under">ევროპის უნივერსიტეტის სამართლის ინსტიტუტი წესდება</h3>
    </div>
    <div class="about__slider__btns">
            <button  id="btnNext">Next</button>
            <button  id="btnPrev">Prev</button>
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