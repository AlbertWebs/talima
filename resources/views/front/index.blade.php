@extends('front.master')

@section('content')
  <!--====== Start Banner Section ======-->
  <section class="banner-section">
    <div class="hero-wrapper-one p-r z-1">
        <div class="hero-dots"></div>
        <div class="hero-slider-one">
            <!--====== Single Slider ======-->
            <div class="single-slider p-r z-1" data-title="Camping">
                <div class="image-layer bg_cover" style="background-image: url('{{asset('theme/assets/images/hero/hero-slider-one.jpg')}}');"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero-content text-white">
                                <span class="sub-title" data-animation="fadeInDown" data-delay=".4s"><span class="number">01</span>Camping</span>
                                <h1 data-animation="fadeInUp" data-delay=".6s">Travel &
                                    Adventure</h1>
                                <div class="hero-button" data-animation="fadeInDown" data-delay=".8s">
                                    <a href="about.html" class="main-btn btn-yellow">Discover more<i class="far fa-angle-double-right"></i></a>
                                    <a href="faq.html" class="main-btn btn-link">How it works<i class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== Single Slider ======-->
            <div class="single-slider p-r z-1" data-title="Adventure">
                <div class="image-layer bg_cover" style="background-image: url('{{asset('theme/assets/images/hero/hero-slider-two.jpg')}}');"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero-content text-white">
                                <span class="sub-title" data-animation="fadeInDown" data-delay=".4s"><span class="number">02</span>Camping</span>
                                <h1 data-animation="fadeInUp" data-delay=".6s">Travel &
                                    Adventure</h1>
                                <div class="hero-button" data-animation="fadeInDown" data-delay=".8s">
                                    <a href="about.html" class="main-btn btn-yellow">Discover more<i class="far fa-angle-double-right"></i></a>
                                    <a href="faq.html" class="main-btn btn-link">How it works<i class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== Single Slider ======-->
            <div class="single-slider p-r z-1" data-title="Travel">
                <div class="image-layer bg_cover" style="background-image: url('{{asset('theme/assets/images/hero/hero-slider-three.jpg')}}');"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero-content text-white">
                                <span class="sub-title" data-animation="fadeInDown" data-delay=".4s"><span class="number">03</span>Camping</span>
                                <h1 data-animation="fadeInUp" data-delay=".6s">Travel &
                                    Adventure</h1>
                                <div class="hero-button" data-animation="fadeInDown" data-delay=".8s">
                                    <a href="about.html" class="main-btn btn-yellow">Discover more<i class="far fa-angle-double-right"></i></a>
                                    <a href="faq.html" class="main-btn btn-link">How it works<i class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Banner Section ======-->
<br>
<section class="features-bg-section p-r z-1 pt-100 pb-100" style="background-image: url('{{asset('theme/assets/images/bg/ad-bg-1.png')}}');">
    <div class="features-bg bg_cover wow fadeInRight" style="background-image: url('{{asset('theme/assets/images/bg/features-bg-1.jpg')}}'); border-radius:50px"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="features-content-box wow fadeInUp pr-lg-60">
                    <div class="section-title mb-30">
                        <span class="sub-title"><span class="number">01</span>Discover Africa</span>
                        <h2 class="theme-color">Unlimited Adventure & <span class="thin">Holiday Deals</span></h2>
                    </div>
                    <p>
                        Talima Africa Adventures offers a perfect blend of serene escapes and thrilling expeditions.  Explore breathtaking destinations, exceptional accommodations, and immersive experiences tailored to your unique travel style. Whether you seek relaxation or adventure, our expertly crafted tours promise unforgettable journeys across Africa.
                    </p>
                    <div class="counting-box mt-40">
                        <div class="title">
                            <h5>Saticfied Clients <span>89%</span></h5>
                            <div class="progress">
                                <div class="progress-bar wow slideInLeft" style="width: 89%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Features Section ======-->
 <!--====== Start Gallery Section ======-->
<section class="gallery-section pt-95 pb-50">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-3" style="margin: 0 auto; text-align:center">
                <div class="section-title mb-20">
                    <h2 class="theme-color">Best Deals <br> For You</h2>
                </div>
                <a href="#" class="main-btn btn-yellow pulseBtn"> Book Now <i class="far fa-angle-double-right"></i></a>
            </div>
            <div class="col-lg-9">
                <div class="gallery-slider-two wow fadeInDown">
                    <div class="single-gallery-item-two">
                        <div class="gallery-img">
                            <img src="{{asset('theme/assets/images/gallery/gl-5.jpg')}}" alt="gallery image">
                            <div class="hover-content">
                                <div class="inner-content">
                                    <a href="#" class="cat-btn">Tree House</a>
                                    <h6>Couple Camping</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-gallery-item-two">
                        <div class="gallery-img">
                            <img src="{{asset('theme/assets/images/gallery/gl-6.jpg')}}" alt="gallery image">
                            <div class="hover-content">
                                <div class="inner-content">
                                    <a href="#" class="cat-btn">Tree House</a>
                                    <h6>Couple Camping</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-gallery-item-two">
                        <div class="gallery-img">
                            <img src="{{asset('theme/assets/images/gallery/gl-7.jpg')}}" alt="gallery image">
                            <div class="hover-content">
                                <div class="inner-content">
                                    <a href="#" class="cat-btn">Tree House</a>
                                    <h6>Couple Camping</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-gallery-item-two">
                        <div class="gallery-img">
                            <img src="{{asset('theme/assets/images/gallery/gl-8.jpg')}}" alt="gallery image">
                            <div class="hover-content">
                                <div class="inner-content">
                                    <a href="#" class="cat-btn">Tree House</a>
                                    <h6>Couple Camping</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-gallery-item-two">
                        <div class="gallery-img">
                            <img src="{{asset('theme/assets/images/gallery/gl-6.jpg')}}" alt="gallery image">
                            <div class="hover-content">
                                <div class="inner-content">
                                    <a href="#" class="cat-btn">Tree House</a>
                                    <h6>Couple Camping</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section><!--====== End Gallery Section ======-->
{{-- style="background-image: url('{{asset('theme/assets/images/video/video-1.jpg')}}');" --}}
<section class="video-bg-section pt-140 pb-210 p-r z-1 bg_cover" >
    <div class="fullscreen-bg">
        <video loop muted autoplay poster="img/videoframe.jpg')}}" class="fullscreen-bg__video">
            <source src="{{url('/')}}/uploads/videos/3196505-sd_960_540_30fps.mp4" type="video/mp4">
        </video>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="video-content-box text-white wow fadeInLeft">
                    <center><h2 class="mb-30">We have Handpicked These Just for you</h2></center>
                    <p style="max-width:600px; margin:0 auto; text-align:center">
                        Step into the heart of Africa with Talima Africa Adventures—where breathtaking landscapes, encounters with exotic wildlife, and the thrill of the untamed wilderness await.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Video Section ======-->
<section class="fun-fact mt-minus-180 plr-5p p-r z-2">
    <div class="container-fluid">
        <div class="gallery-slider-one wow fadeInUp">
            <div class="gallery-item">
                <div class="gallery-img border">
                    <img src="{{asset('theme/assets/images/gallery/gl-1.jpg')}}" alt="Gallery Image">
                        {{-- <a href="gallery.html" class="icon-btn"><i class="far fa-arrow-right"></i></a> --}}
                        <div class="ova_foot_product">
                            <div class="ova-product-day-title-location">
                               <div class="ova-tour-day">
                                  <i aria-hidden="true" class="icomoon icomoon-clock"></i>
                                  5 days
                               </div>
                               <p class="ova-product-title">
                                  <a href="#">5 DAYS GORILLAS &amp; GOLDEN MONKEYS IN RWANDA -2025</a>
                               </p>
                               <div class="ova-product-location">
                                  <i aria-hidden="true" class="icomoon icomoon-location"></i>
                                  <span class="location">
                                  Akagera Road, Akagera, Rwanda	            </span>
                               </div>
                            </div>
                         </div>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-img border">
                    <img src="{{asset('theme/assets/images/gallery/gl-2.jpg')}}" alt="Gallery Image">
                    <div class="hover-overlay">
                        <div class="hover-content text-center text-white">
                            <a href="gallery.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <h4 class="title"><a href="gallery.html">Tent Camping</a></h4>
                            <a href="#" class="cat-link">Forest Traveling</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-img border">
                    <img src="{{asset('theme/assets/images/gallery/gl-3.jpg')}}" alt="Gallery Image">
                    <div class="hover-overlay">
                        <div class="hover-content text-center text-white">
                            <a href="gallery.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <h4 class="title"><a href="gallery.html">Tent Camping</a></h4>
                            <a href="#" class="cat-link">Forest Traveling</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-img border">
                    <img src="{{asset('theme/assets/images/gallery/gl-4.jpg')}}" alt="Gallery Image">
                    <div class="hover-overlay">
                        <div class="hover-content text-center text-white">
                            <a href="gallery.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <h4 class="title"><a href="gallery.html">Tent Camping</a></h4>
                            <a href="#" class="cat-link">Forest Traveling</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <div class="gallery-img border">
                    <img src="{{asset('theme/assets/images/gallery/gl-3.jpg')}}" alt="Gallery Image">
                    <div class="hover-overlay">
                        <div class="hover-content text-center text-white">
                            <a href="gallery.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            <h4 class="title"><a href="gallery.html">Tent Camping</a></h4>
                            <a href="#" class="cat-link">Forest Traveling</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="adventure-bgc-section p-r z-1 pt-15 pb-15">
    <div class="ad-bgc-shape wow fadeInRight" data-wow-delay=".4s"></div>
    <div class="ad-bg-shape bg_cover wow fadeInRight" style="background-image: url('{{asset('theme/assets/images/bg/ad-bg-1.png')}})');"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="adventure-form-content-box pt-95 pb-95 pr-lg-70 wow fadeInLeft">
                    <div class="section-title mb-35">
                        {{-- <span class="sub-title"><span class="number">02</span>Availability</span> --}}
                        <h2>Find Best Holiday <span class="thin">Availability</span></h2>
                    </div>
                    <form class="accommodation-form">
                        <div class="form_group">
                            <label><i class="far fa-calendar-alt"></i></label>
                            <input type="text" class="form_control datepicker" placeholder="Date">
                        </div>

                        <div class="form_group">
                            <label><i class="far fa-check"></i></label>
                            <select class="wide">
                                <option data-display="Accommodations">Destination</option>
                                <option value="01">Classic Tent</option>
                                <option value="01">Forest Camping</option>
                                <option value="01">Small Trailer</option>
                                <option value="01">Tree House Tent</option>
                                <option value="01">Tent Camping</option>
                                <option value="01">Couple Tent</option>
                            </select>
                        </div>
                        <div class="form_group">
                            <label><i class="far fa-edit"></i></label>
                            <textarea class="form_control"></textarea>
                        </div>
                        <div class="form_group">
                            <button class="main-btn btn-green">Make Inquiry<i class="far fa-angle-double-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="adventure-one_image-box p-r z-1 wow fadeInRight">
                    <img src="{{asset('theme/assets/images/contact/img-1.jpg')}}" class="img-one" alt="Image">
                    <img src="{{asset('theme/assets/images/contact/img-2.jpg')}}" class="img-two" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Form Section ======-->

<!--====== Start Features Section ======-->
<section class="features-section pt-95 pb-50" style="background-image: url('{{asset('theme/assets/images/bg/ad-bg-1.png')}}');">
    <div class="container-fluids">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-10">
                <!--====== Section Title ======-->
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <span class="sub-title"><span class="number">01</span> Enjoy Adventure</span>
                    <h2 class="theme-color">Unbeatable  <span class="thin">Holiday Deals</span></h2>
                </div>
            </div>
        </div>
        <div class="container-fluids">
            <div class="service-slider-one wow fadeInDown">
                <div class="single-service-item-four">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/service/service-16.jpg')}}" alt="Service Image">
                        <div class="hover-content">
                            <div class="inner-content d-flex justify-content-between">
                                <div class="text">
                                    <h4 class="title"><a href="accommodation-details.html">Tent Camper</a></h4>
                                    <a href="accommodation-details.html" class="btn-link">check availability<i class="far fa-angle-double-right"></i></a>
                                </div>
                                <div class="icon">
                                    <a href="accommodation-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-service-item-four">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/service/service-17.jpg')}}" alt="Service Image">
                        <div class="hover-content">
                            <div class="inner-content d-flex justify-content-between">
                                <div class="text">
                                    <h4 class="title"><a href="accommodation-details.html">Tent Camper</a></h4>
                                    <a href="accommodation-details.html" class="btn-link">check availability<i class="far fa-angle-double-right"></i></a>
                                </div>
                                <div class="icon">
                                    <a href="accommodation-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-service-item-four">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/service/service-18.jpg')}}" alt="Service Image">
                        <div class="hover-content">
                            <div class="inner-content d-flex justify-content-between">
                                <div class="text">
                                    <h4 class="title"><a href="accommodation-details.html">Tent Camper</a></h4>
                                    <a href="accommodation-details.html" class="btn-link">check availability<i class="far fa-angle-double-right"></i></a>
                                </div>
                                <div class="icon">
                                    <a href="accommodation-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-service-item-four">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/service/service-19.jpg')}}" alt="Service Image">
                        <div class="hover-content">
                            <div class="inner-content d-flex justify-content-between">
                                <div class="text">
                                    <h4 class="title"><a href="accommodation-details.html">Tent Camper</a></h4>
                                    <a href="accommodation-details.html" class="btn-link">check availability<i class="far fa-angle-double-right"></i></a>
                                </div>
                                <div class="icon">
                                    <a href="accommodation-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Features Section ======-->

  <!--====== Start Choose Section ======-->
  <section class="choose-bg-section p-r z-1 pt-50">
    <div class="choose-bg bg_cover wow fadeInLeft">
        <div class="fullscreen-bg">
            <video loop muted autoplay poster="img/videoframe.jpg')}}" class="fullscreen-bg__video">
                <source src="{{url('/')}}/uploads/videos/2231485-sd_960_540_24fps.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-6 col-lg-12">
                <div class="choose-content-box pl-lg-70 pr-lg-50">
                    <div class="section-title mb-40 wow fadeInDown">
                        <span class="sub-title"><span class="number">05</span>Why Choose Us</span>
                        <h2>Traveler Why Choose <span class="thin">Our Tent Camping</span></h2>
                    </div>
                    <ul>
                        <li class="features-left-icon-box mb-35 wow fadeInUp">
                            <div class="icon bg-one">
                                <i class="flaticon-tent-4"></i>
                            </div>
                            <div class="text">
                                <h5 class="title">Facilities/Prices</h5>
                                <p>Undertakes laborious physical exercise except to
                                    obtain some advantage has any right</p>
                            </div>
                        </li>
                        <li class="features-left-icon-box mb-35 wow fadeInUp">
                            <div class="icon bg-two">
                                <i class="flaticon-sports"></i>
                            </div>
                            <div class="text">
                                <h5 class="title">Outdoor Sports</h5>
                                <p>These cases are perfectly simple and distinguish
                                    power of choice untrammelled nothing</p>
                            </div>
                        </li>
                        <li class="features-left-icon-box mb-35 wow fadeInUp">
                            <div class="icon bg-one">
                                <i class="flaticon-tent-4"></i>
                            </div>
                            <div class="text">
                                <h5 class="title">Well Canoeing</h5>
                                <p>Quis autem vel eum sure reprehenderit voluptate
                                    velit esse quam molestiae consequatur</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Choose Section ======-->

<!--====== Start CTa Section ======-->
<section class="cta-section dark-green-bg pt-70 pb-35">
    <div class="container">
        <div class="cta-wrapper bg_cover" style="background-image: url(assets/images/bg/cta-bg-1.png);">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-title text-white mb-40 wow fadeInLeft">
                        <h2>Discover the World with<br>
                             <span class="thin"><u>Talima Africa Adventures</u></span></h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cta-button float-lg-end mb-35 wow fadeInRight">
                        <a href="about.html" class="main-btn btn-yellow pulseBtn">Contact Us<i class="far fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End CTa Section ======-->

@endsection
