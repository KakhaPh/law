@extends('layouts.app')

@section('content')
    <div style="background-image: url('{{ asset('storage/Images/page-title-background.jpg') }}')" class="about_banner_div">
        <h1 class="about_banner_title">ჩვენს შესახებ</h1>
        <h3 class="about_banner_title_under">ევროპის უნივერსიტეტის სამართლის ინსტიტუტი წესდება</h3>
    </div>

    <div class="text__box">
        <h5>ინსტიტუტის შესახებ</h5>
        <p>ევროპის უნივერსიტეტის სამართლის ინსტიტუტი 2015 წელს დაარსდა. იგი წარმოადგენს ევროპის უნივერსიტეტის მიერ დაფუძნებულ კერძო სამართლის არასამეწარმეო (არაკომერციულ) იურიდიულ პირს (ააიპ).</p>
        <p>ინსტიტუტი წარმოადგენს სამართლის მეცნიერების სამეცნიერო-აკადემიურ პლატფორმას, რომელიც თანამშრომლობს სამეცნიერო აკადემიურ ცენტრებთან მსოფლო მაშტაბით. აწყობს სამეცნიერო კონფერენციებს, ფორუმებს, დისკუსია დებატებს და ახორციელებს სხვადასხვა სამეცნიერო საგრანტო პროექტებს სამართლის მიმართულებით.</p>
        <p>ინსტიტუტი გამოსცემს საერთაშორისო სამეცნიერო ჟურნალს „სამართალი და მსოფლიო“. ჟურნალს აქვს საერთაშორისო აღიარება ისეთ მსხვილ საერთაშორისო ბაზებში, როგორიცაა: DOAJ (Directory of Open Access Journals), Research4Life, ResearchBib, Dimensions, Index Copernicus, ERIH PLUS, HeinOnline, J-Gate, Google Scholar,  KEEPERS, ROAD. ჟურნალის ელექტრონული ვერსიები დაცულია საერთაშორისო ციფრულ საცავში Internet Archive და CLOCKSS.</p>
        <p>ინსტიტუტი სამართლის სფეროში ახალი ცოდნის გენერირების მიზნით, ყოველ წელს ატარებს კვალიფიკაციის ასამაღლებელ კურსებს საერთაშორისო სამართალში. კურსებს უძღვებიან ევროპიდან და ამერიკიდან მოწვეული ექსპერტები, მოქმედი მოსამართლეები, პროკურორები, ადვოკატები, პროფესორები, პირები, რომლებიც სამართლის სფეროში მაღალი ავტორიტეტით სარგებლობენ. აღნიშნული კურსები 2016 წლიდან ყოველ გაზაფხულსა და შემოდგომაზე ტარდება და ეს უკვე ინსტიტუტის ტრადიციაა.</p>
        <p>საკვალიფიკაციო კურსებში მონაწილეობას იღებენ როგორც ქართველი, ასევე უცხოელი სტუდენტები, აკადემიური წრეების წარმომადგენლები, საჯარო მოხელეები და პრაქტიკოსი იურისტები. ინსტიტუტი ყოველწლიურად ასეულობით მსმენელს მასპინძლობს. თემატიკა განისაზღვრება მსოფლიოში მიმდინარე აქტუალური პროცესებია და მსმენელთა ინტერესების გათვალისწინებით. შესაბამისი გამოცდის საფუძველზე, გაიცემა საერთაშორისო სერტიფიკატი.</p>
    </div>
    <br><br>

    <div class="about__line"></div>

    <div class="about_inf_container">
        <div class="inf__boxes">
            <div class="inf__logo"><i class="fa fa-book"></i></div>
            <h5>Tortor Tellus Cras</h5>
            <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condi mentum nibh. Porta Aenean Adipiscing.</p>
        </div>
        <div class="inf__boxes">
            <div class="inf__logo"><i class="fas fa-home"></i></div>
            <h5>Dolor Fusce Ligula</h5>
            <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condi mentum nibh. Porta Aenean Adipiscing.</p>
        </div>
        <div class="inf__boxes">
            <div class="inf__logo"><i class="fa fa-car"></i></div>
            <h5>Inceptos Dolor Mollis</h5>
            <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condi mentum nibh. Porta Aenean Adipiscing.</p>
        </div>
    </div>

    <div class="about__main__slider">
        <div id="slider" class="about__slider">
            @foreach($authors as $author)
            <div class="about__slider__item">
                <img width="190px" src="{{ asset( $author->image) }}" alt="">
                <div class="about__main__slider-info">
                    <h5>{{ $author->name }} {{$author->lastname}}</h5>
                    <p >{{ $author->position }}</p>
                    <p>{{ $author->about }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="history__box" style="background-image: url('{{ asset('storage/Images/bg-contact-2.jpg') }}')">
        <div class="history__inf1">
            <div class="history__text">
                <h6>ინსტიტუტის ისტორია</h6>
                <p>ევროპის უნივერსიტეტის სამართლის ინსტიტუტი სამართლის სფეროში ახალი ცოდნის გენერირების მიზნით, ყოველ წელს ატარებს კვალიფიკაციის ასამაღლებელ კურსებს საერთაშორისო სამართალში. აღნიშნული კურსები 2016 წლიდან ყოველ გაზაფხულსა და შემოდგომაზე ტარდება და ეს უკვე ინსტიტუტის ტრადიციაა. კურსებს უძღვებიან ევროპიდან და ამერიკიდან მოწვეული ექსპერტები, მოქმედი მოსამართლეები, პროკურორები, ადვოკატები, პროფესორები, პირები, რომლებიც სამართლის სფეროში მაღალი ავტორიტეტით სარგებლობენ…</p>
                <button class="history__button">სრულად</button>
            </div>
        </div>

        <div class="history__inf">
            <div class="wrapper">
                <br><br><br>
                    <div class="skills">
                        <div class="details">
                            <span>საერთაშორისო სამართალი</span>
                        </div>
                        <div class="bar">
                            <div id="bar-1"></div>
                        </div>
                    </div>
                    <div class="skills">
                        <div class="details">
                            <span>სისხლის სამართალი</span>
                        </div>
                        <div class="bar">
                            <div id="bar-2"></div>
                        </div>
                    </div>
                    <div class="skills">
                        <div class="details">
                            <span>სამოქალაქო სამართალი</span>
                        </div>
                        <div class="bar">
                            <div id="bar-3"></div>
                        </div>
                    </div>
                    <div class="skills">
                        <div class="details">
                            <span>ადმინისტრაციული სამართალი</span>
                        </div>
                        <div class="bar">
                            <div id="bar-4"></div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="cite__box">
        <div class="cite__text">
            <h2>მინდია უგრეხელიძე</h2>
            <p>უდიდესი ძალა და მადლი ახლავს ყველაფერს, რაც სამების სახით არის წარმოდგენილი. დიდმა ილიამ ბრძანა: „მამული, ენა, სარწმუნოება”. შემდგომ პატრიარქმა, ილია მეორემ მომდევნო ტრიადა წარმოადგინა: „ღმერთი, სამშობლო, ადამიანი”. ჩვენ გვმართებს ვიხელმძღვანელოთ კიდევ ერთი ტრიადით. ეს გახლავთ: „სიმართლე, სამართალი და სამართლიანობა”. დაე მიგვეღწიოს სამართლიანობისათვის სამართლის მეშვეობით, სიმართლეზე დაყრდნობით! <br><br> <i class="fa fas fa-quote-left"></i></p>
        </div>
    </div>



@endsection

@push('scripts')
<script src="{{ asset("js/slider.js") }}"></script>
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush