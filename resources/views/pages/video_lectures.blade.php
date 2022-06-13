@extends('layouts.app')

@section('content')
    <div style="background-image: url('{{ asset('storage/Images/page-title-background.jpg') }}')" class="lectures_banner_div">
        <h1 class="lectures_banner_title">{{$menu_info->name}}</h1>
    </div>
    <div class="lectures__container">
        
    </div>
    
@endsection


@push('styles')
<link rel="stylesheet" href="{{ asset('css/video_lectures.css') }}">
@endpush