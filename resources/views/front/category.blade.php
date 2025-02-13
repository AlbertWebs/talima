@extends('front.master')

@section('content')

  <!--====== Start Breadcrumb Section ======-->
  <section class="page-banner light-red-bg pt-170 pb-250 bg_cover" style="background-image: url(assets/images/bg/page-bg-1.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="page-banner-content text-center text-white">
                    <h1 class="page-title">Accommodation</h1>
                    <ul class="breadcrumb-link text-white">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Accommodation Standard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Breadcrumb Section ======-->
<!--====== Start Accommodation form Section ======-->
<section class="accommodation-form-section mt-minus-85 p-r z-2">
    <div class="container-fluid">
        <div class="accommodation-form-wrapper wow fadeInDown">
            <form class="accommodation-form-two">
                <div class="form_group">
                    <span>Check In</span>
                    <label><i class="far fa-calendar-alt"></i></label>
                    <input type="text" class="form_control datepicker" placeholder="Select Date">
                </div>
                <div class="form_group">
                    <span>Check Out</span>
                    <label><i class="far fa-calendar-alt"></i></label>
                    <input type="text" class="form_control datepicker" placeholder="Select Date">
                </div>
                <div class="form_group">
                    <span>Guest</span>
                    <label><i class="far fa-calendar-alt"></i></label>
                    <input type="text" class="form_control" placeholder="Persons">
                </div>
                <div class="form_group">
                    <span>Accommodations</span>
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
                    <button class="main-btn filled-btn">Check availability</button>
                </div>
            </form>
        </div>
    </div>
</section><!--====== End Accommodation form Section ======-->
<!--====== Start Accommodation Section ======-->
<section class="accommodation-section pt-100 pb-100">
    <div class="container">
        <div class="row">
            @foreach ($Experiences as $category)
            <div class="col-lg-3 col-md-6 col-sm-12">
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
            @endforeach

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="vedhak-pagination text-center mt-30 wow fadeInUp">
                    <ul>
                        <li><a href="#" class="prev-btn"><i class="far fa-arrow-left"></i></a></li>
                        <li><a href="#"><span></span></a></li>
                        <li><a href="#"><span></span></a></li>
                        <li><a href="#"><span></span></a></li>
                        <li><a href="#"><span></span></a></li>
                        <li><a href="#"><span></span></a></li>
                        <li><a href="#" class="next-btn"><i class="far fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Accommodation Section ======-->


@endsection
