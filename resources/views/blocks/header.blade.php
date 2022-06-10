
<header class="header">
    <div class="header__top">
        <div class="image_cont">
            <a href="{{ route('home')}}"><img class="header-image" src="{{ asset('storage/Images/logo-geo-scroll.png')}}"></a>
        
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                @foreach($menus as $menu)
               <a class="nav_li_a" href="{{ $menu->address }}">{{ $menu->name }}</a>
                @endforeach
            </div>
            <span class="burger" style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>          
        </div>

        <div class="search_cont">
            <div class="links">
                <div class="link__item">
                    <div class="link__item__icon">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="link__item__text">
                        <p>info@law.org.ge</p>
                     </div>
                </div>
                <strong style="color: gray">|</strong>
                <div class="link__item">
                    <div class="link__item__icon">
                        <i class="fas fa-phone"> </i>
                    </div>
                    <div class="link__item__text">
                        <p>+99532200171 (116)</p>
                     </div>
                </div>
                <strong style="color: gray">|</strong>
                {{-- <a class="links_a" href="#"> <i class="far fa-envelope">  </i>info@law.org.ge &nbsp; &nbsp; </a> <strong style="color: gray">|</strong> &nbsp;
                <a class="links_a" href="#"> <i class="fas fa-phone"> </i> +99532200171 (116) </a>  <strong style="color: gray">|</strong>&nbsp; --}}
                <a class="links_a" href="#"><i class="fab fa-facebook"></i></a>
                <a class="links_a" href="#"><i class="fab fa-linkedin"></i></a>
                <a class="links_a" href="#"><i class="fab fa-pinterest"></i></a>
                <a class="links_a" href="#"><i class="fab fa-twitter-square"></i></a>
                <a class="links_a" href="#"><i class="fab fa-flickr"></i></a>
            </div>
            <form  method="post" class="search_form">
                <input type="text" class="header__inp" name="search" placeholder="ძებნა">
                <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
            </form>
        </div>

    </div>

    <div class="nav_cont">
        <ul class="nav_ul">
            @foreach($menus as $menu)
            <li class="nav_li"><a class="nav_li_a" href="{{ $menu->address }}">{{ $menu->name }}</a></li>
            @endforeach
            
        </ul>
        
    </div>
    {{-- mobile nav --}}
  
</header><br> 