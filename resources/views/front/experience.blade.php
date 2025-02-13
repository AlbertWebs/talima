@extends('front.master')

@section('content')
    @foreach ($Experiences as $experiences)


        <!--====== Start Accommodation Details section ======-->
        <section class="accommodation-details-section">
            <div class="container-fluid">
                <div class="service-image-wrapper">
                    <div class="row">
                        <div class="col-lg-6 mb-40">
                            <img src="{{$experiences->image_one}}" alt="service image">
                        </div>
                        <div class="col-lg-6 mb-40">
                            <img src="{{$experiences->image_one}}" alt="service image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="accommodation-details-wrapper">
                            <div class="service-content wow fadeInUp">
                                <h2 class="title">{{$experiences->title}}</h2>
                                <p>
                                    {!!html_entity_decode($experiences->content)!!}
                                </p>


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="details-form-wrapper wow fadeInUp">
                            <div class="section-title mb-40">
                                <h2>Make Your <span class="thin">Booking</span></h2>
                            </div>
                            <form class="accommodation-form-three">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <div class="form_group">
                                                <label><i class="far fa-calendar-alt"></i></label>
                                                <input type="text" class="form_control datepicker" placeholder="Check In">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <label><i class="far fa-calendar-alt"></i></label>
                                            <input type="text" class="form_control datepicker" placeholder="Check Out">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <label><i class="far fa-user"></i></label>
                                            <input type="text" class="form_control" placeholder="Guest">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
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
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <button class="main-btn btn-green">Check availability <i class="far fa-angle-double-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Accommodation Details section ======-->
        <!--====== Start Service section ======-->
        <section class="service-section pt-90 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-12">
                        <div class="section-title text-center mb-50">
                            <h2>Amazing Camping For <span class="thin">Real Adventure</span></h2>
                        </div>
                    </div>
                </div>
                <div class="service-slider-one">
                    <div class="single-service-item mb-30">
                        <div class="img-holder">
                            <img src="assets/images/service/service-1.jpg" alt="Service image">
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
                                <a href="accommodation-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-service-item mb-30">
                        <div class="img-holder">
                            <img src="assets/images/service/service-2.jpg" alt="Service image">
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
                                <a href="accommodation-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-service-item mb-30">
                        <div class="img-holder">
                            <img src="assets/images/service/service-3.jpg" alt="Service image">
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
                                <a href="accommodation-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-service-item mb-30">
                        <div class="img-holder">
                            <img src="assets/images/service/service-7.jpg" alt="Service image">
                            <div class="shape"></div>
                        </div>
                        <div class="text">
                            <h3 class="title"><a href="accommodation-details.html">Camper</a></h3>
                            <P>Sit amet consectetur adipisc fermentumat
                                tellusaliquam arcu uturnacon sequat</P>
                            <div class="meta">
                                <a href="#" class="icon"><i class="flaticon-bedding"></i></a>
                                <a href="#" class="icon"><i class="flaticon-cat"></i></a>
                                <a href="#" class="icon"><i class="flaticon-tent-3"></i></a>
                                <a href="#" class="icon"><i class="flaticon-campfire"></i></a>
                                <a href="accommodation-details.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Service section ======-->
    @endforeach

@endsection
