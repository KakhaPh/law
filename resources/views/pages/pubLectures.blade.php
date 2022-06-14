@extends('layouts.app')

@section('content')
    <div style="background-image: url('{{ asset('storage/Images/page-title-background.jpg') }}')" class="publications_banner_div">
        <h1 class="publications_banner_title">{{$menu_info->name}}</h1>
    </div>
    <div class="publications__container">
        <div class="books__container">
            @foreach($books as $book)
                <div class="books__box">
                    <img class="book__image" src="{{ asset($book->image) }}">
                    <h2>{{ $book->name }}</h2><br>

                    <div class="books__buttons">
                        <button class="buy">შეძენა</button>
                        <button class="view">ნახვა</button>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
@endsection


@push('styles')
<link rel="stylesheet" href="{{ asset('css/pubLectures.css') }}">
@endpush