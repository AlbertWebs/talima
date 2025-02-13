@extends('front.master')

@section('content')

 <!--====== Start Contact Section ======-->
 <section class="contact-bg-section bg_cover pt-100 pb-50" style="background-image: url('{{asset('theme/assets/images/bg/contact-bg-1.png')}}');">
    <div class="container">
        <div class="row align-items-center" style="margin:0 auto">

            <div class="col-xl-10 col-lg-12">
                <div class="contact-form-wrapper mb-50">
                    <h3 class="title">Send Us Your Details</h3>
                    <p>Fill This Form To Book With Us</p>
                    <form class="contact-form">
                        <div class="form_group">
                            <input type="text" class="form_control" placeholder="Full Name" name="name" required>
                        </div>
                        <div class="form_group">
                            <input type="text" class="form_control" placeholder="Your Mobile Number" name="mobile" required>
                        </div>
                        <div class="form_group">
                            <input type="text" class="form_control" placeholder="Email Address" name="email" required>
                        </div>

                        <div class="form_group">
                            <textarea class="form_control" placeholder="Write Message" name="message"></textarea>
                        </div>
                        <div class="form_group">
                            <button class="main-btn btn-green">Send Booking Inquiry <i class="far fa-angle-double-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Contact Section ======-->

@endsection
