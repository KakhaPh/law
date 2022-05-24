@extends('layouts.app')

@section('content')
    <div>
        <h2>this is about page</h2>
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

    </div>
    
@endsection