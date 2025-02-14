@extends('front.master-experience')

@section('content')
    @foreach ($Experiences as $experiences)


        <!--====== Start Accommodation Details section ======-->
        <section class="accommodation-details-section">
            <div class="container-fluid pb-100">
                <div class="service-slider-one wow fadeInUp"  >
                    <div class="single-service-item-four">
                        <div class="img-holder" id="animated-thumbnails-gallery">
                            <a href="{{$experiences->image_one}}" class="gallery-item" data-src="{{$experiences->image_one}}">
                               <img class="single-img" src="{{$experiences->image_one}}" alt="Service Image">
                            </a>
                        </div>
                    </div>
                    <div class="single-service-item-four">
                        <div class="img-holder">
                            <img class="single-img" src="{{$experiences->image_two}}" alt="Service Image">
                        </div>
                    </div>
                    <div class="single-service-item-four">
                        <div class="img-holder">
                            <img class="single-img" src="{{$experiences->image_three}}" alt="Service Image">
                        </div>
                    </div>
                    <div class="single-service-item-four">
                        <div class="img-holder">
                            <img class="single-img" src="{{$experiences->image_four}}" alt="Service Image">
                        </div>
                    </div>
                    <div class="single-service-item-four">
                        <div class="img-holder">
                            <img class="single-img" src="{{$experiences->image_five}}" alt="Service Image">
                        </div>
                    </div>
                    <div class="single-service-item-four">
                        <div class="img-holder">
                            <img class="single-img" src="{{$experiences->image_six}}" alt="Service Image">
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
                            <h2>Related  <span class="thin">Packages</span></h2>
                        </div>
                    </div>
                </div>
                <div class="service-slider-one">
                    <?php
                       $Related = DB::table('experiences')->where('cat',$experiences->cat)->get()
                    ?>
                    @foreach ($Related as $category)
                    <div class="single-service-item mb-30">
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="gallery-item">
                                <div class="gallery-img border">
                                    <img class="tour-img" src="{{$category->image_one}}" alt="Gallery Image">
                                        {{-- <a href="gallery.html" class="icon-btn"><i class="far fa-arrow-right"></i></a> --}}
                                        <div class="ova_foot_product">
                                            <div class="ova-product-day-title-location">
                                               <div class="ova-tour-day">
                                                  <i aria-hidden="true" class="icomoon icomoon-clock"></i>
                                                  {{$category->duration}}
                                               </div>
                                               <p class="ova-product-title">
                                                  <a href="{{route('experience', $category->slung)}}"><u>{{$category->title}}</u></a>
                                               </p>
                                               <div class="ova-product-location">
                                                  <i aria-hidden="true" class="icomoon icomoon-location"></i>
                                                  <small class="location">{{$category->location}}</small>
                                               </div>
                                            </div>
                                         </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section><!--====== End Service section ======-->
    @endforeach

@endsection
