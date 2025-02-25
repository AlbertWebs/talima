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
                             {{-- <p> Create Blog Posts </p> --}}
                            <center>
                                @if(Session::has('message'))
                                            <div class="alert alert-success">{{ Session::get('message') }}</div>
                            @endif

                            @if(Session::has('messageError'))
                                            <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                            @endif
                            </center>
                            <form class="accommodation-form-three" mathod="POST" action="{{route('booking')}}">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <div class="form_group">
                                                <label><i class="far fa-edit"></i></label>
                                                <input name="name" type="text" class="form_control" placeholder="Full Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <div class="form_group">
                                                <label><i class="far fa-envelope"></i></label>
                                                <input name="email" type="email" class="form_control" placeholder="Email Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <div class="form_group">
                                                <label><i class="far fa-mobile"></i></label>
                                                <input name="date" type="text" class="form_control" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <div class="form_group">
                                                <label><i class="far fa-calendar-alt"></i></label>
                                                <input name="date" type="text" class="form_control datepicker" placeholder="Date">
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="experience" value="{{$experiences->title}}">

                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <label><i class="far fa-user"></i></label>
                                            <input name="guest" type="text" class="form_control" placeholder="Guest">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea style="min-height:150px; background-color:#ffffff; padding:10px; border-radius:10px" name="message" row="5" class="form_control" placeholder="Write Message" name="message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <button type="submit" class="main-btn btn-green">Submit Request <i class="far fa-angle-double-right"></i></button>
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
