@extends('layouts.app')

@section('content')
    <div style="background-image: url('{{ asset('storage/Images/page-title-background.jpg') }}')" class="publications_banner_div">
        <h1 class="publications_banner_title">{{$menu_info->name}}</h1>
    </div>
    <div class="publications__container">
        
    </div>
    
@endsection


@push('styles')
<link rel="stylesheet" href="{{ asset('css/pubLectures.css') }}">
@endpush