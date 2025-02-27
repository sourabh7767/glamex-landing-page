<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Glamex </title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- icofont-css-link -->
    <link rel="stylesheet" href="{{asset("asset1/css/icofont.min.css")}}">
    <!-- Owl-Carosal-Style-link -->
    <link rel="stylesheet" href="{{asset("asset1/css/owl.carousel.min.css")}}">
    <!-- Bootstrap-Style-link -->
    <link rel="stylesheet" href="{{asset("asset1/css/bootstrap.min.css")}}">
    <!-- Aos-Style-link -->
    <link rel="stylesheet" href="{{asset("asset1/css/aos.css")}}">

    <link rel="stylesheet" href="{{asset("asset1/css/all.css")}}">
    <!-- Coustome-Style-link -->
    <link rel="stylesheet" href="{{asset("asset1/css/style.css")}}">
    <!-- Responsive-Style-link -->
    <link rel="stylesheet" href="{{asset("asset1/css/responsive.css")}}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://glamex.beckdemos.com/public/assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .toast-success {
            background-color: #f93822 !important; /* Change to desired green */
            color: white !important;
        }
      .language-selector {
        background: transparent;
        border: none;
        /* color: #fff; */
        outline: none;
        option {
          background: #a299ae;
          color: #fff;
        }
      }
    </style>
</head>

<body data-sidebar="dark">

    <!-- Start Switcher -->

    <div class="page_wrapper">
	
      <!-- app-header -->
        <!-- Header Start -->
        <header>
          <!-- container start -->
          <div class="container">
            <!-- navigation bar -->
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="#">
                <img src="https://glamex.beckdemos.com/public/assets/images/logo-dark.png" alt="image" >
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                  <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
                  <div class="toggle-wrap">
                    <span class="toggle-bar"></span>
                  </div>
                </span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <!-- secondery menu start -->
                  <li class="nav-item">
                    <a class="nav-link" href="#">{{__("words.Home")}}</a>
                    
                  </li>
                  <!-- secondery menu end -->
                  <li class="nav-item">
                    <a class="nav-link" href="#features">{{__("words.Features")}}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#how_it_work">{{__("words.How it works")}}</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#contactUsSechtion">{{__("words.Contact Us")}}</a>
                  </li>
                  
                  
                  <li class="nav-item">
                    <a class="nav-link dark_btn" href="#getstarted" title="Join us as a company">{{__("words.JOIN US")}}</a>
                  </li>
                  {{-- <li class="nav-item">
                    <select class="language-selector nav-link" id="SetLocel">
                      <option value="en" {{session("locale") == "en" ? "selected" : ""}}>English</option>
                      <option value="ar" {{session("locale") == "ar" ? "selected" : ""}}>Arabic</option>
                    </select>
                  </li> --}}
                </ul>
              </div>
            </nav>
            <!-- navigation end -->
          </div>
          <!-- container end -->
        </header>    <!-- /app-header -->
        
      
    
        <!-- Banner-Section-Start -->
        <section class="banner_section">
          <!-- container start -->
          <div class="container">
            <!-- row start -->
            <div class="row">
              <div class="col-lg-6 col-md-12"  data-aos="fade-right" data-aos-duration="1500">
                <!-- banner text -->
                <div class="banner_text">
                  <h1>Glamex</h1>
                  <!-- h2 -->
                  <h2>{{__("words.Book Your Beauty")}} <span>{{__("words.Anytime, Anywhere.")}}</span></h2>
                  <!-- p -->
                  <p>{{__("words.Discover top-rated salons and beauty professionals at your fingertips. Glamex makes booking your next appointment seamless and stress-free, whether you're looking for a quick cut or a luxurious spa day.")}} 
                  </p>
            
            <p><b>{{__("words.Download it for free from apple and play store")}}</b></p>
                </div>
                <!-- app buttons -->
                <ul class="app_btn">
                  <li>
                    <a href="#">
                      <img class="blue_img" src="./asset1/images/appstore_blue.png" alt="image" >
                      <img class="white_img" src="./asset1/images/appstore_white.png" alt="image" >
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img class="blue_img" src="./asset1/images/googleplay_blue.png" alt="image" >
                      <img class="white_img" src="./asset1/images/googleplay_white.png" alt="image" >
                    </a>
                  </li>
                </ul>
    
                <!-- users -->
                
              </div>
    
              <!-- banner slides start -->
              <div class="col-lg-6 col-md-12"  data-aos="fade-in" data-aos-duration="1500">
                <div class="banner_image">
                  <img style="border-radius: 15px;" src="./asset1/images/hero-banner.png" alt="image" >
    
                    <!-- video section start -->
                    
                </div>
              </div>
              <!-- banner slides end -->
    
            </div>
            <!-- row end -->
          </div>
          <!-- container end -->
        </section>
        <!-- Banner-Section-end -->
    
       
        <!-- Features-Section-Start -->
        <section class="row_am features_section" id="features">
          <!-- container start -->
          <div class="container">
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
              <!-- h2 -->
              <h2><span>{{__("Features")}}</span> {{__("words.that makes Glamex App different!")}}</h2>
              <!-- p -->
              <p>{{__("words.Your beauty appointments, made simple and effortless.")}}</p>
            </div>
            <div class="feature_detail">
              <!-- feature box left -->
              <div class="left_data feature_box">
    
                <!-- feature box -->
                <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
                  <div class="icon">
                    <img src="{{asset("asset1/images/easy_booking.png")}}" alt="image" >
                  </div>
                  <div class="text">
                    <h4>{{__("words.Easy Booking")}}</h4>
                    <p>{{__("words.Browse salons, select your service, and book your preferred time slot—no calls, no hassle. It’s fast, easy, and available 24/7.")}}</p>
                  </div>
                </div>
    
                <!-- feature box -->
                <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
                  <div class="icon">
                    <img src="{{asset("asset1/images/functional.png")}}" alt="image" >
                  </div>
                  <div class="text">
                    <h4>{{__("words.Verified Reviews & Ratings")}}</h4>
                    <p>{{__("words.Make confident choices with real reviews and ratings from verified clients. Discover new salons or stick to your favorites.")}}</p>
                  </div>
                </div>
            
          <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
                  <div class="icon">
                    <img src="{{asset("asset1/images/gifts.png")}}" alt="image" >
                  </div>
                  <div class="text">
                    <h4>{{__("words.Customised Gifts Sending")}}</h4>
                    <p>{{__("words.Choose from a wide range of personalized options and send heartfelt gifts to your loved ones, creating memories that last forever..")}}</p>
                  </div>
                </div>
              </div>
    
              <!-- feature box right -->
              <div class="right_data feature_box">
    
                <!-- feature box -->
                <div class="data_block" data-aos="fade-left" data-aos-duration="1500">
                  <div class="icon">
                    <img src="{{asset("asset1/images/live-chat.png")}}" alt="image" >
                  </div>
                  <div class="text">
                    <h4>{{__("words.Personalized Recommendations")}}</h4>
                    <p>{{__("words.Based on your preferences and past bookings, Glamex suggests new services and professionals you’ll love.")}} </p>
                  </div>
                </div>
    
                <!-- feature box -->
                <div class="data_block" data-aos="fade-left" data-aos-duration="1500">
                  <div class="icon">
                    <img src="{{asset("asset1/images/secure_data.png")}}" alt="image" >
                  </div>
                  <div class="text">
                    <h4>{{__("words.Secure Payment Gateways")}}</h4>
                    <p>{{__("words.Glamex uses secure payment gateways with PCI-DSS compliance, encryption, and tokenization to protect sensitive data.")}}</p>
                  </div>
                </div>
            
          <div class="data_block" data-aos="fade-right" data-aos-duration="1500">
                  <div class="icon">
                    <img src="{{asset("asset1/images/discounts.png")}}" alt="image" >
                  </div>
                  <div class="text">
                    <h4>{{__("words.Discounts & Offers")}}</h4>
                    <p>{{__("words.Save more while enjoying premium services with our special deals tailored just for you. Don’t miss out—grab them today!")}}</p>
                  </div>
                </div>
    
              </div>
              <!-- feature image -->
              <div class="feature_img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <img src="{{asset("asset1/images/features_frame.png")}}" alt="image" >
              </div>
            </div>
          </div>
          <!-- container end -->
        </section>
        <!-- Features-Section-end -->
    
        
    
        <!-- ModernUI-Section-Start -->
        <section class="row_am modern_ui_section">
          <!-- container start -->
          <div class="container">
            <!-- row start -->
        <div class="about-box-inner">
            <div class="row align-items-start">
              <div class="col-lg-6">
                <!-- UI content -->
                <div class="ui_text">
                  <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                    <h2>{{__("words.Your Ultimate Beauty Companion")}}</h2>
            <p>{{__("words.Discover a smarter, more convenient way to manage your beauty needs with Glamex. With just a few taps, you can browse trusted salons and skilled stylists, read verified reviews, and book your next appointment in seconds. Whether you’re looking for a haircut, manicure, facial, or massage, Glamex makes it easy to find top-quality services near you.")}}</p>
                    <p>
                      {{__("words.Say goodbye to the hassle of scheduling and searching—your perfect salon experience is just a click away.")}}
                    </p>
              
              <p><b>{{__("words.Start your effortless beauty journey today with Glamex!")}}</b></p>
              
              <p><b>{{__("words.Download it for free on the Apple App Store and Google Play Store.")}}</b></p>
              <a class="nav-link dark_btn" href="#getstarted" title="Download Customer App Now">{{__("words.Download Customer App Now")}}</a>
                  </div>
                  
                </div>
              </div>
              <div class="col-lg-6">
                <!-- UI Image -->
                <div class="ui_img_full" data-aos="fade-in" data-aos-duration="1500">
                    <img class="aboutBigImgs" style="border-radius: 0 38px 38px 0; width: 100%;height: 630px; object-fit: cover; object-position: 0 20%;" src="{{asset("asset1/images/yourUltimateNew.JPG")}}" alt="Grow Your Business with Glamex">
                </div>
              </div>
            </div>
            <!-- row end -->
        </div>
          </div>
          <!-- container end -->
        </section>
        <!-- ModernUI-Section-end -->

        <!-- About-App-Section-Start -->
        <section class="row_am about_app_section">
          <div class="container">
          <!-- container start -->
          <div class="about-box-inner">
          <!-- row start -->
          <div class="row">
            <div class="col-lg-6">
    
            <!-- about images -->
            <div class="about_img_full h-100" data-aos="fade-in" data-aos-duration="1500">
              <img class="aboutBigImgs" style="border-radius: 38px 0px 0px 38px; width: 100%;height: 630px; object-fit: cover; object-position: 0 20%;" height="100%" src="{{asset("asset1/images/grow.png")}}" alt="Grow Your Business with Glamex">
            </div>
            </div>
            <div class="col-lg-6">
    
            <!-- about text -->
            <div class="about_text">
              <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
    
              <!-- h2 -->
              <h2>{{__("words.Grow Your Salon Business with Glamex")}}</h2>

              <p>
              {{__("words.Boost your bookings and streamline your scheduling with Glamex—the ultimate platform for salon owners and artists looking to expand their clientele. Whether you’re a salon owner wanting to grow your business or an artist looking to reach more clients, Glamex connects you directly with customers in a seamless way.")}}
              </p>
              <!-- p -->
              <p>
                {{__("words.With Glamex, we make it easier to manage appointments, fill your schedule, and grow your presence in the beauty industry. Say goodbye to missed opportunities and manual scheduling—Glamex simplifies everything, saving you time and helping you focus on what you do best.")}}
              </p>
    
                <p><b>{{__("words.Join Glamex today")}}</b> {{__("words.and take your salon business to the next level with smart, efficient booking and management tools!")}}
                </p>
    <!-- 
                <p>With Glamex, we bring salons and customers closer together, saving time and simplifying the process for everyone.</p>
    
                <p><b>Join Glamex today</b> and experience the smarter way to manage and book salon appointments!</p> -->
                
                <p><b>{{__("words.Download it now from apple and play store!")}}</b></p>
                <a class="nav-link dark_btn" href="#getstarted" title="{{__("words.Download Customer App Now")}}">{{__("words.Download Customer App Now")}}</a>
              </div>
    
              <!-- UL -->
    
            </div>
            </div>
          </div>
          <!-- row end -->
          </div>
          <!-- container end -->
          </div>
        </section>
        <!-- About-App-Section-end -->
      
      <section class="row_am gallery" id="gallery">
        <div class="container">
          <div class="gallery_inner">
            <div class="section_title text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
              <!-- h2 -->
              <h2>{{__("words.Five-star Beauty Services")}}</h2>
              <!-- p -->
              <p>{{__("words.Discover OR deliver top-rated services and at your fingertips.")}}</p>
              </div>
          </div>
          
          <div class="row">
            <div class="col-sm-4">
              <div class="gallery_img">
                <img src="./asset1/images/service1.png" alt="Service 1">
                <div class="gallery_text">
                  <h3>{{__("words.Body")}}</h3>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="gallery_img">
                <img style="border-radius: 15px;" src="{{asset("asset1/images/service2.JPG")}}" alt="Service 2">
                <div class="gallery_text">
                  <h3 >{{__("words.Hair Services")}}</h3>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="gallery_img">
                <img style="border-radius: 15px;" src="{{asset("asset1/images/service3.JPG")}}" alt="Service 3">
                <div class="gallery_text">
                  <h3>{{__("words.Manicure")}}</h3>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="gallery_img">
                <img src="{{asset("asset1/images/service4.png")}}" alt="Service 4">
                <div class="gallery_text">
                  <h3>{{__("words.Pedicure")}}</h3>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="gallery_img">
                <img src="{{asset("asset1/images/service5.png")}}" alt="Service 5">
                <div class="gallery_text">
                  <h3>{{__("words.Makeup")}}</h3>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="gallery_img">
                <img src="{{asset("asset1/images/service6.png")}}" alt="Service 6">
                <div class="gallery_text">
                  <h3>{{__("words.Facial")}}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
        <!-- How-It-Workes-Section-Start -->
        <section class="row_am how_it_works" id="how_it_work">
          <!-- container start -->
          <div class="container">
            <div class="how_it_inner">
              <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                <!-- h2 -->
                <h2><span>{{__("words.How it works")}}</span> - {{__("words.3 easy steps")}}</h2>
                <!-- p -->
                <p>{{__("words.Experience convenience, reliability, and beauty at your fingertips—all in three easy steps!")}}</p>
              </div>
              <div class="step_block">
    
              <!-- row start -->
              <div class="row ">
                <!-- step box -->
                <div class="col-md-4 col-sm-12">
                  <div class="step_box">
                    <!-- icon -->
                      <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                        <img src="{{asset("asset1/images/step1.png")}}" alt="image" >
                        <div class="step_number">
                        <h3>01</h3>
                        </div>
                      </div>
                      <!-- text -->
                      <div class="step_text step1" data-aos="fade-right" data-aos-duration="1500">
                        <h4>{{__("words.Search Your Service")}}</h4>
                        <p>{{__("words.Browse salons and beauty professionals offering the exact service you’re looking for.")}}</p>
                      </div>
                  </div>
                </div>
    
                <!-- step box -->
                <div class="col-md-4 col-sm-12">
                  <div class="step_box">
                    <!-- icon -->
                      <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                        <img src="{{asset("asset1/images/step2.png")}}" alt="image" >
                        <div class="step_number">
                        <h3>02</h3>
                        </div>
                      </div>
                      <!-- text -->
                      <div class="step_text step2" data-aos="fade-right" data-aos-duration="1500">
                        <h4>{{__("words.Choose your time & Location")}}</h4>
                          <p>{{__("words.Select a date and time that works best for you in your preferred location at your house or at the Salon, all in real-time availability.")}}</p>
                      </div>
                  </div>
                </div>
    
                <!-- step box -->
                <div class="col-md-4 col-sm-12">
                  <div class="step_box">
                    <!-- icon -->
                      <div class="step_img" data-aos="fade-left" data-aos-duration="1500">
                        <img src="{{asset("asset1/images/step3.png")}}" alt="image" >
                        <div class="step_number">
                        <h3>03</h3>
                        </div>
                      </div>
                      <!-- text -->
                      <div class="step_text step3" data-aos="fade-right" data-aos-duration="1500">
                        <h4>{{__("words.Book & Pay")}}</h4>
                          <p>{{__("words.Confirm your appointment and pay directly through the app—no need for cash or cards.")}}</p>
                      </div>
                  </div>
                </div>
    
            </div>
    
              </div>
            </div>
    
          </div>
          <!-- container end -->
        </section>
        <!-- How-It-Workes-Section-end -->
    
    
       <section class="row_am faq_section" id="faqSectionPage">
          <!-- container start -->
          <div class="container">
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
              <!-- h2 -->
              <h2><span>FAQ</span> - {{__("words.Frequently Asked Questions")}}</h2>
              <!-- p -->
              
            </div>
            <!-- faq data -->
            <div class="faq_panel">
              <div class="accordion" id="accordionExample">
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button type="button" class="btn btn-link active" data-toggle="collapse" data-target="#collapseOne">
                        <i class="icon_faq fa-solid fa-plus"></i> {{__("words.What is Glamex?")}}</button>
                    </h2>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <p>{{__("words.Glamex is a salon appointment booking app that allows you to easily find, book, and pay for beauty services from top-rated salons and professionals near you. Whether you’re looking for a haircut, manicure, facial, or massage, Glamex brings beauty and wellness services right to your fingertips.")}}</p>
                    </div>
                  </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                        data-target="#collapseTwo"><i class="icon_faq fa-solid fa-plus"></i> {{__("words.How does Glamex work?")}}</button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <p>{{__("words.Glamex makes booking beauty services simple and convenient. Here’s how it works:")}}<br>
    
        {{__("words.Step 1: Search for the beauty service you need (e.g., hair, nails, skincare).")}}<br>
        {{__("words.Step 2: Browse a list of salons and professionals, complete with real-time availability and verified reviews.")}}<br>
        {{__("words.Step 3: Choose your preferred time and book your appointment in just a few clicks.")}}<br>
        {{__("words.Step 4: Pay securely through the app—no cash or card needed at the salon.")}}</p>
                    </div>
                  </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                        data-target="#collapseThree"><i class="icon_faq fa-solid fa-plus"></i>{{__("words.Is Glamex free to use?")}}</button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      <p>{{__("words.Yes! Glamex is free to download and use. You can browse salons, read reviews, and book appointments at no cost.")}}</p>
                    </div>
                  </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1500">
                  <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                      <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                        data-target="#collapseFour"><i class="icon_faq fa-solid fa-plus"></i>{{__("words.Can I trust the reviews on Glamex?")}}</button>
                    </h2>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                      <p>{{__("words.Absolutely. All reviews on Glamex are verified and written by actual customers who have booked and completed appointments through the app. This ensures the feedback is genuine and trustworthy, helping you make the best decision when choosing a salon or service.")}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- container end -->
        </section>
    
        <!-- Beautifull-interface-Section start -->
        <section class="row_am interface_section">
        <!-- container start -->
          <div class="container-fluid">
            <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                <!-- h2 -->
                <h2>{{__("words.Beautiful")}} <span>{{__("words.interface")}}</span></h2>
                <!-- p -->
               
            </div>
    
              <!-- screen slider start -->
              <div class="screen_slider" >
                <div id="screen_slider" class="owl-carousel owl-theme">
                  <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{asset("asset1/images/screen1.png")}}" alt="image" >
                    </div>
                  </div>
                  <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{asset("asset1/images/screen2.png")}}" alt="image" >
                    </div>
                  </div>
                  <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{asset("asset1/images/screen3.png")}}" alt="image" >
                    </div>
                  </div>
                  <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{asset("asset1/images/screen4.png")}}" alt="image" >
                    </div>
                  </div>
                  <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{asset("asset1/images/screen5.png")}}" alt="image" >
                    </div>
                  </div>
                  <div class="item">
                    <div class="screen_frame_img">
                        <img src="{{asset("asset1/images/screen6.png")}}" alt="image" >
                    </div>
                  </div>
              </div>
              </div>
              <!-- screen slider end -->
          </div>
          <!-- container end -->
        </section>
        <!-- Beautifull-interface-Section end -->
    
        <!-- Download-Free-App-section-Start  -->
        <section class="row_am free_app_section" id="getstarted">
          <!-- container start -->
            <div class="container">
                <div class="free_app_inner" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100"> 
                    <!-- row start -->
                    <div class="row">
                      <!-- content -->
                        <div class="col-md-6">
                            <div class="free_text">
                                <div class="section_title">
                                    <h2>{{__("words.Download it now from apple and play store!")}}</h2>
                                    <p>{{__("words.Instant Free Download from the Apple App Store and Google Play Store.")}}</p>
                    
                    <p>{{__("words.Get Glamex on your device today—it’s quick, easy, and completely free! Simply download from the Apple App Store or Google Play Store and start booking your next beauty appointment in seconds.")}}</p>
                                </div>
                                <ul class="app_btn">
                                  <li>
                                    <a href="#">
                                      <img src="{{asset("asset1/images/appstore_blue.png")}}" alt="image" >
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <img src="{{asset("asset1/images/googleplay_blue.png")}}" alt="image" >
                                    </a>
                                  </li>
                                </ul>
                            </div>
                        </div>
    
                        <!-- images -->
                        <div class="col-md-6">
                            <div class="free_img">
                                <img src="{{asset("asset1/images/screen01.png")}}" alt="image" >
                                <img class="mobile_mockup" src="{{asset("asset1/images/screen02.png")}}" alt="image" >
                            </div>
                        </div>
                    </div>
                    <!-- row end -->
                </div>
            </div>
            <!-- container end -->
        </section>
        <!-- Download-Free-App-section-end  -->
      
      <section class="contact_section" id="contactUsSechtion">
        <div class="container">
          <!-- container start -->
          <div class="about-box-inner">
          <!-- row start -->
          <div class="row">
            <div class="col-lg-6">
    
            <!-- about images -->
            <div class="about_img_full h-100 contactImg" data-aos="fade-in" data-aos-duration="1500">
              <img class="aboutBigImgs"  class="h-100" src="{{asset("asset1/images/contact.png")}}" alt="Grow Your Business with Glamex">
            </div>
            </div>
            <div class="col-lg-6">
    
            <!-- about text -->
            <div class="about_text">
              <div class="section_title text-left" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
    
              <!-- h2 -->
              <h2>{{__("words.Contact Us")}}</h2>
    
              <!-- p -->
              <p>
                {{__("words.Have questions or need support? We're here to help you with any inquiries or assistance you may need.")}}
              </p>
              <form action="{{route("contact.store")}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-sm-6 ">
                    <div class="form-group {{ $errors->has('name') ? ' is-invalid' : '' }}">
                      <input type="text" placeholder="{{__("words.Name")}}" class="form-control " name="name">
                    </div>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div> 
                  <div class="col-sm-6 ">
                    <div class="form-group {{ $errors->has('email') ? ' is-invalid' : '' }}">
                      <input type="email" placeholder="{{__("words.Email Address")}}" class="form-control " name="email">
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div> 
                </div>
                  
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group {{ $errors->has('message') ? ' is-invalid' : '' }}">
                      <textarea class="form-control " rows="8" placeholder="{{__("words.Your message")}}" name="message"></textarea>
                    </div>
                    @if ($errors->has('message'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                    @endif
                  </div>  
                </div>
                  
                <button type="submit" class="nav-link dark_btn" href="#getstarted" title="Send Message">{{__("words.Send Message")}}</button>
              </form>
              
              </div>
    
              <!-- UL -->
    
            </div>
            </div>
          </div>
          <!-- row end -->
          </div>
          <!-- container end -->
        </div>
      </section>
    
        <!-- News-Letter-Section-Start -->
        <section class="newsletter_section" id="newsletter_section">
          <!-- container start -->
          <div class="container">
              <div class="newsletter_box">
                  <div class="section_title" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
                      <!-- h2 -->
                      <h2>{{__("words.Subscribe To Our Newsletter")}}</h2>
                      <!-- p -->
                      <p>{{__("words.Be the first to receive all latest post in your inbox")}}</p>
                  </div>
                  <form method="POST" action="{{route("news.store")}}" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="100">
                    @csrf
                      <div class="form-group ">
                          <input type="email" class="form-control {{ $errors->has('news_letter_email') ? ' is-invalid' : '' }}" placeholder="{{__("words.Enter your email")}}" name="news_letter_email">
                          @if ($errors->has('news_letter_email'))
                              <span class="invalid-feedback-white" role="alert">
                                  <strong>{{ $errors->first('news_letter_email') }}</strong>
                              </span>
                          @endif
                      </div>
                      <div class="form-group">
                          <button class="btn">{{__("words.SUBMIT")}}</button>
                      </div>
                  </form>
              </div>
          </div>
          <!-- container end -->
        </section>
        <!-- News-Letter-Section-end -->
    
       
    
      <!-- VIDEO MODAL -->
      <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button id="close-video" type="button" class="button btn btn-default text-right" data-dismiss="modal">
                <i class="icofont-close-line-circled"></i>
              </button>
                <div class="modal-body">
                    <div id="video-container" class="video-container">
                        <iframe id="youtubevideo" src="" width="640" height="360" frameborder="0" allowfullscreen></iframe>
                    </div>        
                </div>
                <div class="modal-footer">
                </div>
            </div> 
        </div>
      </div>
    
      <div class="purple_backdrop"></div>
    
    
    
    
      <!-- Footer Start -->
      <footer>
            <div class="top_footer" id="contact">
                <!-- container start -->
                <div class="container">
                  <!-- row start -->
                  <div class="row">
                      <!-- footer link 1 -->
                      <div class="col-lg-4 col-md-6 col-12">
                          <div class="abt_side">
                            <div class="logo"> <img src="./asset1/images/logo-white.png" alt="image" ></div>
                            
                            <ul class="social_media">
                                <li><a href="https://www.tiktok.com/@glamexco" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                <li><a href="https://twitter.com/glamexco?s=20" target="_blank"><i class="fa-brands fa-twitter"></i></i></a></li>
                                <li><a href="https://instagram.com/glamexco?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="https://pin.it/3pQNLek" target="_blank"><i class="fa-brands fa-pinterest"></i></a></li>
                  <li><a href="https://www.youtube.com/channel/UCiL0oVG3n_FmMysu4vS8v8Q" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/glamex/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                            </ul>
                          </div>
                      </div>
    
                      <!-- footer link 2 -->
                      <div class="col-lg-3 col-md-6 col-6">
                          <div class="links text-left">
                            <h3>{{__("words.Useful Links")}}</h3>
                              <ul>
                                <li><a href="#">{{__("words.Home")}}</a></li>
                                <li><a href="#">{{__("words.About us")}}</a></li>
                                <li><a href="#">{{__("words.Services")}}</a></li>
                                <li><a href="#">{{__("words.Blog")}}</a></li>
                  <li><a href="https://www.linkedin.com/company/glamex/" target="_blank">{{__("words.Jobs")}}</a></li>
                              </ul>
                          </div>
                      </div>
    
                      <!-- footer link 3 -->
                      <div class="col-lg-3 col-md-6 col-6">
                        <div class="links text-left">
                          <h3>{{__("words.Help & Support")}}</h3>
                            <ul>
                              <li><a href="#faqSectionPage">{{__("words.FAQs")}}</a></li>
                              <li><a href="#how_it_work">{{__("words.How it works")}}</a></li>
                              <li><a href="#contactUsSechtion">{{__("words.Contact Us")}}</a></li>
                              <!-- <li><a href="#">Terms & conditions</a></li> -->
                              <!-- <li><a href="https://glamex.minisquaretechnologies.com/admin/content/privacy/policy">Privacy policy</a></li> -->
                            </ul>
                        </div>
                      </div>
    
                      <!-- footer link 4 -->
                      <div class="col-lg-2 col-md-6 col-12">
                        <div class="try_out">
                            <h3>{{__("words.Let’s Try Out")}}</h3>
                <p><b>{{__("words.Download it for free from apple and play store")}}</b></p>
                            <ul class="app_btn">
                              <li>
                                <a href="#">
                                  <img src="{{asset("asset1/images/appstore_blue.png")}}" alt="image" >
                                </a>
                              </li>
                              <li>
                                <a href="#">
                                  <img src="{{asset("asset1/images/googleplay_blue.png")}}" alt="image" >
                                </a>
                              </li>
                            </ul>
                        </div>
                      </div>
                  </div>
                  <!-- row end -->
              </div>
              <!-- container end -->
            </div>
    
            <!-- last footer -->
            <div class="bottom_footer">
              <!-- container start -->
                <div class="container">
                  <!-- row start -->
                  <div class="row">
                    <div class="col-md-12 text-center">
                        <p>© {{__("words.Copyrights")}} {{date("Y")}}. {{__("words.All rights reserved.")}}</p>
                    </div>
                    
                </div>
                <!-- row end -->
                </div>
                <!-- container end -->
            </div>	<!-- End::app-content -->
        
    </div>
    <!-- END layout-wrapper -->


    <!-- Jquery-js-Link -->
    <script src="{{asset("asset1/js/jquery.js")}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
       $(document).on("change", "#SetLocel", function () {
            var locel = $(this).val();
            window.location.href = "{{ route('set.locel') }}?locel=" + encodeURIComponent(locel);
        });
    </script>
    <script>
      // Check if toastr is defined before using it
      if (typeof toastr !== 'undefined') {
          // Initialize Toastr.js with default options
          toastr.options = {
              "closeButton": false,
              "debug": false,
              "newestOnTop": false,
              "progressBar": true,
              "positionClass": "toast-top-right",
              "preventDuplicates": false,
              "onclick": null,
              "showDuration": "300",
              "hideDuration": "1000",
              "timeOut": "5000",
              "extendedTimeOut": "1000",
              "showEasing": "swing",
              "hideEasing": "linear",
              "showMethod": "fadeIn",
              "hideMethod": "fadeOut"
          };
  
          // Check if there's a success message and display a success toast
          @if(Session::has('success'))
              toastr.success('{{ Session::get('success') }}');    
          @endif
  
          // Check if there's an error message and display an error toast
          @if(Session::has('error'))
              toastr.error('{{ Session::get('error') }}');
          @endif
  
          // Check if there's an error message and display an error toast
      } else {
          console.error('Toastr.js is not loaded or properly included.');
      }
  </script>
    <!-- owl-js-Link -->
    <script src="{{asset("asset1/js/owl.carousel.min.js")}}"></script>
    <!-- bootstrap-js-Link -->
    <script src="{{asset("asset1/js/bootstrap.min.js")}}"></script>
    <!-- aos-js-Link -->
    <script src="{{asset("asset1/js/aos.js")}}"></script>
    <!-- main-js-Link -->
    <script src="{{asset("asset1/js/main.js")}}"></script>
    <script></script>

</body>

</html>
