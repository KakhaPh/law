@extends('layouts.app')

@section('content')
    <div>
        <h2>this is about page</h2>
         {{-- get authors data --}}
        @foreach ($authors as $author)
            <h3>{{ $author->name }}</h3>
            <p>{{ $author->lastname }}</p>
            <p>{{ $author->email }}</p>
            <p>{{ $author->about }}</p>
        @endforeach

    </div>
    
@endsection