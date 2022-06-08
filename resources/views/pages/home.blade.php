@extends('layouts.app')

@section('content')
    <div class="home_content">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 6"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 7"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 8"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset( 'storage/Images/slider-1-full.jpg') }}" class="d-block w-100 h-50" alt="">
              </div>
              <div class="carousel-item">
                <img src="{{asset( 'storage/Images/slide-1.jpg') }}" class="d-block w-100 h-50" alt="">
              </div>
              <div class="carousel-item">
                <img src="{{asset( 'storage/Images/slide-2-1.jpg') }}" class="d-block w-100 h-50" alt="">
              </div>
            
              <div class="carousel-item">
                <img src="{{asset( 'storage/Images/slide-3.jpg') }}" class="d-block w-100 h-50" alt="">
              </div>
              <div class="carousel-item">
                <img src="{{asset( 'storage/Images/slide-5.jpg') }}" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="{{asset( 'storage/Images/slide-6-scaled.jpg') }}" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="{{asset( 'storage/Images/slide-7-scaled.jpg') }}" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="{{asset( 'storage/Images/slide-8.jpg') }}" class="d-block w-100" alt="">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div class="main__body__head">
              <div class="main__body__headbox__left">
                  <div class="d-flex align-items-center ">
                      <i style="color:white;font-size:35px" class="fas fa-book"></i>
                      <h2>საერთაშორისო სამეცნიერო გამოცემა სამართალი და მსოფლიო</h2>

                  </div>
                    <p >სამართალი და მსოფლიო არის ღია წვდომის ჟურნალი. მკითხველს შეუძლია გაეცნოს, ჩამოტვირთოს, ასლი გადაიღოს, გაავრცელოს, ამობეჭდოს, იკვლიოს და გამოიყენოს სტატიის სრული ტექსტი.</p>
                </div>

                <div class="main__body__headbox__right d-flex flex-column justify-content-center align-items-center">
                    <h2>ინსტიტუტის მისია</h2>
                    <p>სამართლის მეცნიერების განვითარების ხელშეწყობა, როგორც ადგილობრივ, ისე საერთაშორისო დონეზე.</p>
                </div>
          </div>

          <div class="main__body__body  " style="background-image: url('{{ asset('storage/Images/bg-homepage-service.jpg')}}');">
            <div class="main__body__cont">

            <div class="main_body__item">
                <div class="main_body__item__title">
                  <i class="fas fa-graduation-cap"></i>
                  <h2>პროფესიული საკვალიფიკაციო კურსები</h2>
                </div> 
                <p>ინსტიტუტი სამართლის სფეროში ახალი ცოდნის გენერირების მიზნით, საერთაშორისო სამართლის დარგებში, უცხოელი ექსპერტების მონაწილეობით, ყოველ წელს ატარებს კვალიფიკაციის ასამაღლებელ ტრენინგ კურსებს.</p>             
             </div>
             <div class="main_body__item">
              <div class="main_body__item__title">
                <i class="fas fa-book"></i>
                <h2>სამართლის სახელმძღვანელოები</h2>
              </div> 
              <p>ინსტიტუტის მეცნიერ თანამშრომელთა გუნდი მუშაობს სამართლის სფეროში აქტუალურ საკთხებზე და გამოსცემს სამართლის 
                პრობლემატიკაზე მონოგრაფიებს, სახელმძღვანელოებს, კრებულებს..</p>             
           </div>

           <div class="main_body__item">
            <div class="main_body__item__title">
              <i class="fas fa-newspaper"></i>
              <h2>სამართლის სამეცნიერო სტატიები</h2>
            </div> 
            <p>ინსტიტუტი გამოსცემს საერთაშორისო რეფერირებად და რეცენზირებად ჟურნალს სამართალი და მსოფლიო, რომელიც აღიარებულია საერთაშორისო რეიტინგული სამეცნიერო ბაზების მიერ.
            </p>             
         </div>

         <div class="main_body__item">
          <div class="main_body__item__title">
            <i class="fa fa-globe"></i>
            <h2>იურისტების ბლოგი</h2>
          </div> 
          <p>ქართველ და უცხოელ იურისტებს, სტუდენტებს, ლექტორებსა და პრაქტიკოს მუშაკებს, შესაძლებლობა აქვთ აწარმოონ დისკუსია, გაცვალონ იდეები სამართლის სფეროში მიმდინარე აქტუალურ საკითხებზე.
          </p>             
       </div>

       <div class="main_body__item">
        <div class="main_body__item__title">
          <i class="fas fa-university"></i>
          <h2>ადვოკატის მომსახურება</h2>
        </div> 
        <p>ინსტიტუტი ახორციელებს იურიდიულ საკონსულტაციო მომსახურებას, გამოდის სასამართლოში ფიზიკური და იურიდიული პირების ინტერესების დასაცავად.
        </p>             
     </div>

     <div class="main_body__item">
      <div class="main_body__item__title">
        <i class="fas fa-chart-line"></i>
        <h2>სამეცნიერო პროექტები</h2>
      </div> 
      <p>მეცნიერ-მკვლევართა საერთაშორისო საგანმანათლებლო და აკადემიური განვითარების მიზნით, ინსტიტუტი ახორციელებს სხვადასხვა ადგილობრივ და საერთაშორისო საგრანტო პროექტებს.     </p>             
   </div>
          </div>
        </div>

        <div class="main__body__bottom">

          <div class="main__body__bottom-title">
            <h1>გჭირდებათ სამართლებრივი დახმარება? </h1>
            <h2>თქვენს სამსაუხრში პროფესიონალი იურისტები არიან</h2>
            <strong> დაგვირეკეთ! &nbsp;<p> 2 000 171 (116)</p></strong>
        </div>
        <div class="main__body__icon">
          <div class="line"></div>
          <i class="fas fa-phone-alt"></i>
        <div class="line"></div>
        </div>
     

        <div class="main__bottom__account">
          <h2>ანგარიშები</h2>
          <div class="main__bottom__account_main">
            <div class="main__bottom__account__item" >
              <img src="{{asset('storage/Images/acc_img4.jpg')}}" alt="">
              <div class="main__bottom__acc__thumbnail"></div>
              <h4>5 წელი ერთად</h4>
            </div>
          
          <div class="main__bottom__account__item" >
            <img src="{{asset('storage/Images/acc_img1.jpg')}}" alt="">
            <div class="main__bottom__acc__thumbnail"></div>
            <h4>2019 წლის ანგარიშები</h4>
          </div>
          <div class="main__bottom__account__item" >
            <img src="{{asset('storage/Images/acc_img2.jpg')}}" alt="">
            <div class="main__bottom__acc__thumbnail"></div>
            <h4>2018 წლის ანგარიშები</h4>
          </div>
        
          <div class="main__bottom__account__item" >
            <img src="{{asset('storage/Images/acc_img3.jpg')}}" alt="">
            <div class="main__bottom__acc__thumbnail"></div>
            <h4>2015-2017 წლების ანგარიშები</h4>
          </div>
        
   
        </div>

        <div class="main__botttom__authors_and_news">

          <div class="main__botttom__authors">
            <div class="home__slider__btns">
              <h3>Testimonial</h3>
          
          </div>
          <div  class="home__main__slider_container">
            <div id="slider" class="home__main__slider">
              <div class="home__main__slider-item">
                <div  class="home__slider">
                    <div class="home__slider__item">
                      <div class="home__slider-profile">
  
                        <img width="80px" src="{{ asset('storage/Images/authors/acc_profile1.jpg') }}" alt="">
                      </div>
                        <div class="home__main__slider-info">
                          <h5>ადამიანის უფლებათა საერთაშორისო სამართალი</h5>  
                          <p >სტრასბურგის ადამიანის უფლებათა საერთაშორისო ინსტიტუტისა და ევროპის უნივერსიტეტის სამართლის ინსტიტუტის პირველი ერთობლივად ორგანიზებული სასწავლო სესია ადამიანის უფლებებში იყო ძალიან წარმატებული, რასაც მოწმობს ერთი მხრივ, მსმენელთა დასწრების რაოდენობა, მეორე მხრივ, ის საქმიანი და გულთბილი დამოკიდებულება, რასაც ადგილი ჰქონდა ჩვენს ექსპერტებთან მიმართებაში თბილისში.</p>
                        </div>
                    </div>
                  
                </div>
                <div class="home__slider__subinfo">
                  <h2>სებასტიან ტუზე</h2>
                  <p>გაეროს წამების კომიტეტის წევრი</p>
                </div>
              </div>
  
              <div class="home__main__slider-item">
                <div  class="home__slider">
                    <div class="home__slider__item">
                      <div class="home__slider-profile">
  
                        <img width="80px" src="{{ asset('storage/Images/authors/acc_profile2.jpg') }}" alt="">
                      </div>
                        <div class="home__main__slider-info">
                          <h5>ნაფიც მსაჯულა ინსტიტუტი</h5>  
                          <p >ჩემი ვიზიტი საქართველოში იყო განსაკუთრებული ჩემს ცხოვრებაში, ხალხი არის მეტად თბილი და სტუმართმოყვარე. მე ქართველ სტუდენტებს წავუკითხე ნაფიც მსაჯულთა სასამართლოს კურსი. ეს ყველაზე გამორჩეული აუდიტორია იყო, რაც კი ოდესმე მინახავს.</p>
                        </div>
                    </div>
                  
                </div>
                <div class="home__slider__subinfo">
                  <h2>დევიდ კოლბე</h2>
                  <p>ვალპარაისოს (აშშ) უნივერსიტეტის პროფესორი</p>
                </div>
              </div>
  
              <div class="home__main__slider-item">
                <div  class="home__slider">
                    <div class="home__slider__item">
                      <div class="home__slider-profile">
  
                        <img width="80px" src="{{ asset('storage/Images/authors/acc_profile3.png') }}" alt="">
                      </div>
                        <div class="home__main__slider-info">
                          <h5>სამოქალაქო სამართალწარმოება აშშ-ში</h5>  
                          <p >მინდა მადლობა გადავუხადო ევროპის უნივერსიტეტს იმ თბილი დახვედრისათვის, რაც თბილისში ვიგრძენი. ორი კვირის განმავლობაში მე ვკითხულობდი ლექციებს ევროპის უნივერსიტეტში “სამოქალაქო სამართლაწარმოება აშშ-ში”. ამ პერიოდის განმავლობაში მე მივიღე უზომოდ დიდი გამოცდილება სტუდენტებთან ურთიერთობაში. ევროპის უნივერიტეტის სტუდენტები არიან ძალიან ჭკვიანები და აქტიურები, მათთან ლექციების ჩატარება ძალიან სასიამოვნო იყო. მე სიამოვნებით გავაგრძელებ მათთან კონტაქტს და მივადევნებ თვალს მათ კარიერულ თავგადასავლებს მომავალში.</p>
                        </div>
                    </div>
                  
                </div>
                <div class="home__slider__subinfo">
                  <h2>თომას პოუპი</h2>
                  <p>სამოქალაქო სამართლის ექსპერტი, ადვოკატი (აშშ)</p>
                </div>
              </div>
          </div>
        </div>
            </div>
            <div class="main__botttom__news">
              <h2>Recent News</h2>
              <div class="main__botttom__news__item__container">
                <div class="main__botttom__news__item">
                <div class="main__botttom__news__item__date">
                  <h6>15 </h6>
                  <p>ნოე</p>
                  {{-- <img src="{{ asset('storage/Images/news-1.jpg') }}" alt=""> --}}
                </div>
                <div class="main__botttom__news__item__info">
                  <h5>სამოქალაქო სამართლის ექსპერტი, ადვოკატი (აშშ)</h5>
                  <p>სამოქალაქო სამართლის ექსპერტი, ადვოკატი (აშშ)სამოქალაქო სამართლის ექსპერტი, ადვოკატი (აშშ)</p>
              </div>
           </div>

           <div class="main__botttom__news__item">
            <div class="main__botttom__news__item__date">
              <h6>15 </h6>
              <p>ნოე</p>
              {{-- <img src="{{ asset('storage/Images/news-1.jpg') }}" alt=""> --}}
            </div>
            <div class="main__botttom__news__item__info">
              <h5>სამოქალაქო სამართლის ექსპერტი, ადვოკატი (აშშ)</h5>
              <p>სამოქალაქო სამართლის ექსპერტი, ადვოკატი (აშშ) სამოქალაქო სამართლის ექსპერტი, ადვოკატი (აშშ)</p>
          </div>
       </div>

       <div class="main__botttom__news__item">
        <div class="main__botttom__news__item__date">
          <h6>15 </h6>
          <p>ნოე</p>
          {{-- <img src="{{ asset('storage/Images/news-1.jpg') }}" alt=""> --}}
        </div>
        <div class="main__botttom__news__item__info">
          <h5>სამოქალაქო სამართლის ექსპერტი, ადვოკატი (აშშ)</h5>
          <p>სამოქალაქო სამართლის ექსპერტი, ადვოკატი (აშშ)სამოქალაქო სამართლის ექსპერტი, ადვოკატი (აშშ)</p>
      </div>
   </div>
  </div>
  <div class="read__allNews">
    <a href="#">Read All News</a>
  </div>
      </div>

        
      </div>
      </div>

      <div style="background-image: url('{{asset('storage/Images/bg-contact.jpg')}}')" class="main__bottom__contact">
          <div class="main__bottom__contact-title">
            <h1>Don't hesitate to ask</h1>
            <p>Law is complicate matter. It can cause you a big problem
              if you ignore it. Let us help you!</p>
          </div>

          <form action="" method="post">
            <div class="main__bottom__contact-form">
              <div class="main__bottom__contact-form__item">
                <input type="text" name="name" placeholder="სახელი*">
              </div>
              <div class="main__bottom__contact-form__item">
                <input type="text" name="email" placeholder="ელფოსტა*">
              </div>
              <div class="main__bottom__contact-form__item">
                <input type="text" name="Topic" placeholder="თემა*">
              </div>
              <div class="main__bottom__contact-form__item">
                <textarea name="message" id="" cols="30" rows="10" placeholder="შეტყობინება*"></textarea>
              </div>
              <div class="main__bottom__contact-form__item">
                <button type="submit">გაგზავნა</button>
              </div>
            </div>
          </form>
      </div>

      <div class="main__bottom__partners">
        <div class="main__bottom__partners__title">
          <h1>Partners</h1>
         
      </div>
 
    <div class="main__bottom__slider__container">

      <div class="main__bottom__slider">

        <div class="main__bottom__partners__item">
          <img src="{{ asset('storage/Images/partner1.jpg') }}" alt="">
        </div>

        <div class="main__bottom__partners__item">
          <img src="{{ asset('storage/Images/partner2.jpg') }}" alt="">
        </div>

        <div class="main__bottom__partners__item">
          <img src="{{ asset('storage/Images/partner3.jpg') }}" alt="">
        </div>

        <div class="main__bottom__partners__item">
          <img src="{{ asset('storage/Images/partner4.jpg') }}" alt="">
        </div>

        <div class="main__bottom__partners__item">
          <img src="{{ asset('storage/Images/partner5.jpg') }}" alt="">
        </div>
        <div class="main__bottom__partners__item">
          <img src="{{ asset('storage/Images/partner6.jpg') }}" alt="">
        </div>

      </div>
    </div>
  </div>

    </div>
    
@endsection