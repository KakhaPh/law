@extends('layouts.app')

@section('content')
    <div style="background-image: url('{{ asset('storage/Images/page-title-background.jpg') }}')" class="news_post_banner_div">
        <h1 class="news_post_banner_title">{{$menu_info->name}}</h1>
        <h3 class="news_post_banner_title_under">{{$menu_info->body}}</h3>
    </div>
@endsection
@push('styles')
<link rel="stylesheet" href="{{ asset('css/newsPost.css') }}">
@endpush
{{-- @push('scripts')
<script src="{{ asset("js/slider.js") }}"></script>
@endpush --}}