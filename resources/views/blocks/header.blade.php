
<header class="header">
    <div class="header__top">
        <div class="image_cont">
            <a href="{{ route('home')}}"><img class="header-image" src="{{ asset('storage/Images/logo-geo-scroll.png')}}"></a>
        
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="">მთავარი</a>
                <a href="">ჩვეენს შესახებ</a>
                <a href="">სიახლეები</a>
                <a href="">გამოცემები</a>
                <a href="">ვიდეო ლექციები</a>
                <a href="">კონტაქტი</a>
                <a href="">ფორუმი</a>
            </div>
            <span class="burger" style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>          
        </div>

        <div class="search_cont">
            <div class="links">
                <a class="links_a" href="#"> <i class="far fa-envelope"> info@law.org.ge </i> &nbsp; &nbsp; </a> <strong style="color: gray">|</strong> &nbsp;
                <a class="links_a" href="#"> <i class="fas fa-phone"> +99532200171 (116) </i> </a>  <strong style="color: gray">|</strong>&nbsp;
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
            <li class="nav_li"><a class="nav_li_a" href="{{ route('home')}}">მთავარი</a></li>
            <li class="nav_li"><a class="nav_li_a" href="{{ route('about')}}">ჩვეენს შესახებ</a></li>
            <li class="nav_li"><a class="nav_li_a" href="#">სიახლეები</a></li>
            <li class="nav_li"><a class="nav_li_a" href="#">გამოცემები</a></li>
            <li class="nav_li"><a class="nav_li_a" href="#">ვიდეო ლექციები</a></li>
            <li class="nav_li"><a class="nav_li_a" href="#">კონტაქტი</a></li>
            <li class="nav_li"><a class="nav_li_a" href="#">ფორუმი</a></li>
            
        </ul>
        
    </div>
    {{-- mobile nav --}}
  
</header><br> 