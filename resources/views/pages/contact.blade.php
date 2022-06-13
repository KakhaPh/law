@extends('layouts.app')

@section('content')

<div class="contact__container">
    <div style="background-image: url('{{ asset('storage/Images/page-title-background.jpg') }}')" class="contact_banner_div">
        <h1 class="contact_banner_title">{{$menu_info->name}}</h1>
        <h3 class="contact_banner_title_under">{{$menu_info->body}}</h3>
    </div>

    <div class="contact_body__container">
        <div class="contact_body__left">
            <div class="contact_body__left__text">
                <h3>Before Contacting Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Non equidem invideo, miror magis posuere velit aliquet.</p>
            </div>
            <div class="contact_body__left__info">
                <h3>საკონტაქტო ინფორმაცია</h3>


                   
                <p> <i class="fas fa-map-marker-alt"></i>გურამიშვილის გამზირი 76, თბილისი 0141 </p>
                <p><i class="fas fa-phone-alt"></i> +995 32 200171 (116)</p>
                <p> <i class="fas fa-envelope"></i>info@law.org.ge</p>
                {{-- clock icon --}}
                <p><i class="fas fa-clock"></i> შაბათ-კვირის გარდა 10:00-18:00</p>
                <div class="contact_body__left__info__socialNet">
                  <a href='https://www.facebook.com/ScientificResearchInstituteofLaw'><i class="fab fa-facebook-square"></i></a>
                  <a href='#'> <i class="fab fa-twitter-square"></i></a>
                    <a href='#'><i class="fab fa-instagram"></i></a>
                        <a href='https://www.youtube.com/channel/UCL4qnjZwUgGLdI6lsIodA0A/'> <i class="fab fa-youtube"></i></a>

                </div>
             </div>
     </div>
        <div class="contact_body__right">
            <div class="contact_body__right__title">
                <h3>Please fulfil the form below
                </h3>
            </div>
            <form action="">
                <div class="contact_body__right__form">
                    <div class="contact_body__right__form__item">
                        <input type="text" placeholder="სახელი*" name="name" id="">
                    </div>
                    <div class="contact_body__right__form__item">
                        <input type="text" placeholder="ელფოსტა*" name="email" id="">
                    </div>
                    <div class="contact_body__right__form__item">
                        <textarea rows="10" type="text" placeholder="შეტყობინება*" name="message" id=""></textarea>
                </div>
                <button type="submit">გაგზავნა</button>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush