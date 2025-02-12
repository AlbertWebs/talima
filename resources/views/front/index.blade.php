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
<!--====== Start Features Section ======-->
<section class="features-section pt-95 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-10">
                <!--====== Section Title ======-->
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <span class="sub-title"><span class="number">01</span> Enjoy Adventure</span>
                    <h2>Have A Fun With Our Amazing <span class="thin">Camping Ground</span></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <!--====== Features Thumb Item ======-->
                <div class="features-thumb-item mb-40 wow fadeInUp">
                    <div class="thumb">
                        <img src="{{asset('theme/assets/images/features/f-1.jpg')}}" alt="Features image">
                    </div>
                    <div class="text mt-25">
                        <h4 class="title"><a href="#">Classic Tent</a></h4>
                        <p>Sit amet consectetur adipiscing elit.
                            Lacus acmassa in hendrerit</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <!--====== Features Thumb Item ======-->
                <div class="features-thumb-item mb-40 wow fadeInUp">
                    <div class="thumb">
                        <img src="{{asset('theme/assets/images/features/f-2.jpg')}}" alt="Features image">
                    </div>
                    <div class="text mt-25">
                        <h4 class="title"><a href="#">Luxury Tent</a></h4>
                        <p>Sit amet consectetur adipiscing elit.
                            Lacus acmassa in hendrerit</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <!--====== Features Thumb Item ======-->
                <div class="features-thumb-item mb-40 wow fadeInUp">
                    <div class="thumb">
                        <img src="{{asset('theme/assets/images/features/f-3.jpg')}}" alt="Features image">
                    </div>
                    <div class="text mt-25">
                        <h4 class="title"><a href="#">Cabin Trailer</a></h4>
                        <p>Sit amet consectetur adipiscing elit.
                            Lacus acmassa in hendrerit</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <!--====== Features Thumb Item ======-->
                <div class="features-thumb-item mb-40 wow fadeInUp">
                    <div class="thumb">
                        <img src="{{asset('theme/assets/images/features/f-4.jpg')}}" alt="Features image">
                    </div>
                    <div class="text mt-25">
                        <h4 class="title"><a href="#">Motorhome</a></h4>
                        <p>Sit amet consectetur adipiscing elit.
                            Lacus acmassa in hendrerit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Features Section ======-->
<!--====== Start Form Section ======-->
<section class="adventure-bgc-section p-r z-1 pt-15 pb-15">
    <div class="ad-bgc-shape wow fadeInRight" data-wow-delay=".4s"></div>
    <div class="ad-bg-shape bg_cover wow fadeInRight" style="background-image: url(assets/images/bg/ad-bg-1.png);"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="adventure-form-content-box pt-95 pb-95 pr-lg-70 wow fadeInLeft">
                    <div class="section-title mb-35">
                        <span class="sub-title"><span class="number">02</span>Availability</span>
                        <h2>Find Best Camping <span class="thin">Availability</span></h2>
                    </div>
                    <form class="accommodation-form">
                        <div class="form_group">
                            <label><i class="far fa-calendar-alt"></i></label>
                            <input type="text" class="form_control datepicker" placeholder="Check In">
                        </div>
                        <div class="form_group">
                            <label><i class="far fa-calendar-alt"></i></label>
                            <input type="text" class="form_control datepicker" placeholder="Check Out">
                        </div>
                        <div class="form_group">
                            <label><i class="far fa-user-alt"></i></label>
                            <input type="text" class="form_control" placeholder="Guest" name="text">
                        </div>
                        <div class="form_group">
                            <select class="wide">
                                <option data-display="Accommodations">Accommodations</option>
                                <option value="01">Classic Tent</option>
                                <option value="01">Forest Camping</option>
                                <option value="01">Small Trailer</option>
                                <option value="01">Tree House Tent</option>
                                <option value="01">Tent Camping</option>
                                <option value="01">Couple Tent</option>
                            </select>
                        </div>
                        <div class="form_group">
                            <button class="main-btn btn-green">Check availability<i class="far fa-angle-double-right"></i></button>
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
<!--====== Start About Section ======-->
<section class="about-section pt-100 pb-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image-box text-lg-end pr-lg-30 mb-50 wow fadeInLeft">
                    <img src="{{asset('theme/assets/images/about/about-1.jpg')}}" alt="About Image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-box pl-lg-50 mb-50 wow fadeInRight">
                    <div class="section-title mb-20">
                        <span class="sub-title"><span class="number">03</span>About Us</span>
                        <h2>We’re Most Trusted
                            Travel <span class="thin">Partner Aroud
                                The World</span></h2>
                    </div>
                    <p class="mb-30">Sit amet consectetur adipiscing elit. At donec et fusce orci tellus aliquam vitae. Metus nibh laoreet velit, diam enim. Justo
                        sagittis fringilla ulputatey honcus justo, cras sed</p>
                    <ul class="check-style-one mb-35">
                        <li><i class="flaticon-draw-check-mark"></i>Wild Camping</li>
                        <li><i class="flaticon-draw-check-mark"></i>Family Camping</li>
                        <li><i class="flaticon-draw-check-mark"></i>Tent Camping</li>
                    </ul>
                    <a href="about.html" class="main-btn btn-yellow">learn more us <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End About Section ======-->
<!--====== Start Video Section ======-->
<section class="video-bg-section pt-140 pb-210 p-r z-1 bg_cover" style="background-image: url('{{asset('theme/assets/images/video/video-1.jpg')}}');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="video-content-box text-white mb-40 wow fadeInLeft">
                    <h2 class="mb-30">Ready to Get Started your Travel Camping Us</h2>
                    <a href="#" class="main-btn btn-green">Watch video <i class="far fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="play-box text-lg-end mb-40 wow fadeInRight">
                    <a href="https://www.youtube.com/watch?v=ibuUmMhD2Pg" class="video-popup"><i class="fas fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Video Section ======-->
<!--====== Start Fun Section ======-->
<section class="fun-fact mt-minus-100 plr-5p p-r z-2">
    <div class="container-fluid">
        <div class="fun-wrapper mt-minus-100 p-r z-2 bg_cover pt-60 pb-20 light-gray-bg" style="background-image: url('{{asset('theme/assets/images/bg/fun-bg-1.png')}}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-item mb-30 d-flex justify-content-center wow fadeInUp">
                            <div class="counter-inner-item">
                                <div class="icon">
                                    <i class="flaticon-hiking"></i>
                                </div>
                                <div class="text">
                                    <h2><span class="count">365</span>K+</h2>
                                    <p>Happy Traveler</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-item mb-30 d-flex justify-content-center wow fadeInUp">
                            <div class="counter-inner-item">
                                <div class="icon">
                                    <i class="flaticon-tent-1"></i>
                                </div>
                                <div class="text">
                                    <h2><span class="count">135</span>+</h2>
                                    <p>Tent Sites</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-item mb-30 d-flex justify-content-center wow fadeInUp">
                            <div class="counter-inner-item">
                                <div class="icon">
                                    <i class="flaticon-branch"></i>
                                </div>
                                <div class="text">
                                    <h2><span class="count">458</span>+</h2>
                                    <p>Global Branch</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-item mb-30 d-flex justify-content-center wow fadeInUp">
                            <div class="counter-inner-item">
                                <div class="icon">
                                    <i class="flaticon-tent-2"></i>
                                </div>
                                <div class="text">
                                    <h2><span class="count">985</span>+</h2>
                                    <p>Family Camping</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Fun Section ======-->
<!--====== Start Service Section ======-->
<section class="services-section pt-90 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-10">
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <span class="sub-title"><span class="number">04</span>Popular Services</span>
                    <h2>Amazing Camping For <span class="thin">Real Adventure</span></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="single-service-item mb-30 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/service/service-1.jpg')}}" alt="Service image">
                        <div class="shape"></div>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="accommodation-details.html">Classic Tent</a></h3>
                        <P>Sit amet consectetur adipisc fermentumat
                            tellusaliquam arcu uturnacon sequat</P>
                        <div class="meta">
                            <a href="#" class="icon"><i class="flaticon-bedding"></i></a>
                            <a href="#" class="icon"><i class="flaticon-cat"></i></a>
                            <a href="#" class="icon"><i class="flaticon-tent-3"></i></a>
                            <a href="#" class="icon"><i class="flaticon-campfire"></i></a>
                            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="single-service-item mb-30 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/service/service-2.jpg')}}" alt="Service image">
                        <div class="shape"></div>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="accommodation-details.html">Forest Camping</a></h3>
                        <P>Sit amet consectetur adipisc fermentumat
                            tellusaliquam arcu uturnacon sequat</P>
                        <div class="meta">
                            <a href="#" class="icon"><i class="flaticon-bedding"></i></a>
                            <a href="#" class="icon"><i class="flaticon-cat"></i></a>
                            <a href="#" class="icon"><i class="flaticon-tent-3"></i></a>
                            <a href="#" class="icon"><i class="flaticon-campfire"></i></a>
                            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="single-service-item mb-30 wow fadeInUp">
                    <div class="img-holder">
                        <img src="{{asset('theme/assets/images/service/service-3.jpg')}}" alt="Service image">
                        <div class="shape"></div>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="accommodation-details.html">Small Trailer</a></h3>
                        <P>Sit amet consectetur adipisc fermentumat
                            tellusaliquam arcu uturnacon sequat</P>
                        <div class="meta">
                            <a href="#" class="icon"><i class="flaticon-bedding"></i></a>
                            <a href="#" class="icon"><i class="flaticon-cat"></i></a>
                            <a href="#" class="icon"><i class="flaticon-tent-3"></i></a>
                            <a href="#" class="icon"><i class="flaticon-campfire"></i></a>
                            <a href="#" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="service-button text-center mt-30 wow fadeInDown">
                    <a href="accommodation-grid.html" class="main-btn btn-green">Discover more<i class="far fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Service Section ======-->
<!--====== Start Choose Section ======-->
<section class="choose-bg-section p-r z-1 pt-50 pb-20">
    <div class="choose-bg bg_cover wow fadeInLeft" style="background-image: url('{{asset('theme/assets/images/bg/choose-bg-1.jpg')}}');"></div>
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
                        <h2>Enjoy The Better Adventure
                            Life <span class="thin">Tent Camping</span></h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cta-button float-lg-end mb-35 wow fadeInRight">
                        <a href="about.html" class="main-btn btn-yellow">Discover more<i class="far fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End CTa Section ======-->
<!--====== Start Gallery Section ======-->
<section class="gallery-section pt-90">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10">
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <span class="sub-title"><span class="number">06</span>Recent Gallery</span>
                    <h2>Take a Look About Our Recent <span class="thin">Camping Photo</span></h2>
                </div>
            </div>
        </div>
        <div class="gallery-slider-one wow fadeInUp">
            <div class="gallery-item">
                <div class="gallery-img">
                    <img src="{{asset('theme/assets/images/gallery/gl-1.jpg')}}" alt="Gallery Image">
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
                <div class="gallery-img">
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
                <div class="gallery-img">
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
                <div class="gallery-img">
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
                <div class="gallery-img">
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
</section><!--====== End Gallery Section ======-->
<!--====== Start Feedback Section ======-->
<section class="feedback-section pt-100">
    <div class="container">
        <div class="feedback-wrapper-one">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="feedback-content-box wow fadeInLeft">
                        <div class="section-title mb-45">
                            <span class="sub-title"><span class="number">07</span>Testimonials</span>
                            <h2>What Our Client Say <span class="thin">About Us</span></h2>
                        </div>
                        <div class="testimonial-arrows mb-45"></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial-wrapper wow fadeInRight">
                        <div class="testimonial-slider-one">
                            <div class="single-testimonial-item text-center">
                                <div class="testimonial-content">
                                    <div class="author-title-thumb d-inline-flex">
                                        <div class="author-thumb">
                                            <img src="{{asset('theme/assets/images/testimonial/author-thumb-1.jpg')}}" alt="Author Thumb">
                                        </div>
                                        <div class="author-title">
                                            <h3 class="title">Brian A. Barnes</h3>
                                            <p class="position">CEO & Founder</p>
                                        </div>
                                    </div>
                                    <p>Sit amet consectetur adipiscing congue pose
                                        habit ante dignissim faucibus tincidunt vulputate
                                        ullamcorper mattis quisque esta sidiculus</p>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-testimonial-item text-center">
                                <div class="testimonial-content">
                                    <div class="author-title-thumb d-inline-flex">
                                        <div class="author-thumb">
                                            <img src="{{asset('theme/assets/images/testimonial/author-thumb-1.jpg')}}" alt="Author Thumb">
                                        </div>
                                        <div class="author-title">
                                            <h3 class="title">Brian A. Barnes</h3>
                                            <p class="position">CEO & Founder</p>
                                        </div>
                                    </div>
                                    <p>Sit amet consectetur adipiscing congue pose
                                        habit ante dignissim faucibus tincidunt vulputate
                                        ullamcorper mattis quisque esta sidiculus</p>
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Feedback Section ======-->
<!--====== Start Blog Section ======-->
<section class="blog-section pt-90 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10">
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <span class="sub-title"><span class="number">08</span>News & Blog</span>
                    <h2>Read Every News & Blog <span class="thin">Articles & Tips</span></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="single-blog-post-item mb-40 wow fadeInUp">
                    <div class="post-thumbnail">
                        <img src="{{asset('theme/assets/images/blog/blog-1.jpg')}}" alt="Blog Image">
                    </div>
                    <div class="entry-content">
                        <div class="post-meta">
                            <ul>
                                <li><span><a href="#"><i class="far fa-calendar-alt"></i> November 23,2022</a></span></li>
                                <li><span><a href="#"><i class="far fa-comment"></i> Comments (05)</a></span></li>
                            </ul>
                        </div>
                        <h4 class="title"><a href="blog-details.html">It’s That Time Of (December
                            2022) Desktop Edition</a></h4>
                        <a href="blog-details.html" class="btn-link">Read more <i class="far fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="single-blog-post-item mb-40 wow fadeInUp">
                    <div class="post-thumbnail">
                        <img src="{{asset('theme/assets/images/blog/blog-2.jpg')}}" alt="Blog Image">
                    </div>
                    <div class="entry-content">
                        <div class="post-meta">
                            <ul>
                                <li><span><a href="#"><i class="far fa-calendar-alt"></i> November 23,2022</a></span></li>
                                <li><span><a href="#"><i class="far fa-comment"></i> Comments (05)</a></span></li>
                            </ul>
                        </div>
                        <h4 class="title"><a href="blog-details.html">Meet Touch Design Mobile
                            Interfaces Smashing</a></h4>
                        <a href="blog-details.html" class="btn-link">Read more <i class="far fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="single-blog-post-item mb-40 wow fadeInUp">
                    <div class="post-thumbnail">
                        <img src="{{asset('theme/assets/images/blog/blog-3.jpg')}}" alt="Blog Image">
                    </div>
                    <div class="entry-content">
                        <div class="post-meta">
                            <ul>
                                <li><span><a href="#"><i class="far fa-calendar-alt"></i> November 23,2022</a></span></li>
                                <li><span><a href="#"><i class="far fa-comment"></i> Comments (05)</a></span></li>
                            </ul>
                        </div>
                        <h4 class="title"><a href="blog-details.html">Powerful Terminal Comaney
                            Modern Development</a></h4>
                        <a href="blog-details.html" class="btn-link">Read more <i class="far fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Blog Section ======-->
@endsection
