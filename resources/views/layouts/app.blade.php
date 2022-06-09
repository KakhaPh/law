<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>სამართალი - {{$menu_info->title}}</title>
        <meta name="description" content="{{$menu_info->description}}">
        <meta name="keywords" content="{{$menu_info->keywords}}">
        {{-- css  --}}
        @stack('styles')

        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{asset('owlcarousel/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('owlcarousel/assets/owl.theme.default.min.css')}}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>


    <body>
        <div class="cont">
                @include('blocks.header')

                <main>
                    @yield('content')
                </main>
                
                
            </div>
            @include('blocks.footer')
        </body>

    @stack('scripts')

    <script src="{{ asset("js/topnav.js") }}"></script>
    <script src="{{asset('owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('owlcarousel/owl.carousel.min.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>
