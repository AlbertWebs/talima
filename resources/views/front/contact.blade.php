@extends('front.master')

@section('content')

 <!--====== Start Contact Section ======-->
 <section class="contact-bg-section bg_cover pt-100 pb-50" style="background-image: url(assets/images/bg/contact-bg-1.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-12">
                <div class="contact-content-box mb-50">
                    <div class="section-title mb-45 wow fadeInUp">
                        <span class="sub-title"><span class="number">01</span>Contact Us</span>
                        <h2>Ready to Travel Us <span class="thin">for Better Adventure</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-icon-box mb-50 wow fadeInDown">
                                <div class="icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <h4 class="title">Locations</h4>
                                    <p>4th Flr-Gateway Mall, Nairobi, Kenya</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-icon-box mb-50 wow fadeInDown">
                                <div class="icon">
                                    <i class="fal fa-envelope-open"></i>
                                </div>
                                <div class="text">
                                    <h4 class="title">Email Us</h4>
                                    <p><a href="mailto:info@talimaadventures.com">info@talimaadventures.com</a></p>
                                    <p><a href="mailto:booking@talimaadventures.com">booking@talimaadventures.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-icon-box mb-50 wow fadeInDown">
                                <div class="icon">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="text">
                                    <h4 class="title">Contact</h4>
                                    <p><a href="tel:(+254) 708 284 492">tel:(+254) 708 284 492</a></p>
                                    <p><a href="tel:+(+254) 708 284 492">(+254) 708 284 492</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-icon-box mb-50 wow fadeInDown">
                                <div class="icon">
                                    <i class="fal fa-link"></i>
                                </div>
                                <div class="text">
                                    <h4 class="title">Follow Us</h4>
                                    <p>4th Flr-Gateway Mall, Nairobi, Kenya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-12">
                <div class="contact-form-wrapper mb-50">
                    <h3 class="title">Send Us Message</h3>
                    <p>Adipiscing magna varius imperdiet scelerisque
                        suspendisse amet sed ridiculus turpis.</p>
                    <form class="contact-form">
                        <div class="form_group">
                            <input type="text" class="form_control" placeholder="Full Name" name="name" required>
                        </div>
                        <div class="form_group">
                            <input type="text" class="form_control" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="form_group">
                            <textarea class="form_control" placeholder="Write Message" name="message"></textarea>
                        </div>
                        <div class="form_group">
                            <button class="main-btn btn-green">Send message <i class="far fa-angle-double-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Contact Section ======-->

@endsection
