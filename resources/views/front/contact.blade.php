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
                                    <p><a href="mailto:info@talimaafrica.com">info@talimaafrica.com</a></p>
                                    <p><a href="mailto:booking@talimaafrica.com">booking@talimaafrica.com</a></p>
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
                                    <ul class="social-link">
                                        <li><a href="https://www.facebook.com/share/15iNsi2vTx/?mibextid=wwXIfr"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                                        <li><a href="https://www.instagram.com/talimaafrica/"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://api.whatsapp.com/send?text=Hello&phone=+254708284492"><i class="fab fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-12">
                <div class="contact-form-wrapper mb-50">
                    <h3 class="title">Send Us Message</h3>
                    <p></p>
                        <center>
                            @if(Session::has('message'))
                                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                        @endif

                        @if(Session::has('messageError'))
                                        <div class="alert alert-danger">{{ Session::get('messageError') }}</div>
                        @endif
                        </center>
                    <form class="contact-form" method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="form_group">
                            <input type="text" name="name" class="form_control" placeholder="Full Name" name="name" required>
                        </div>
                        <div class="form_group">
                            <input type="text" name="email" class="form_control" placeholder="Email Address" name="email" required>
                        </div>
                        <div class="form_group">
                            <textarea class="form_control" name="message" placeholder="Write Message" name="message"></textarea>
                        </div>
                        <div class="form_group">
                            <button class="main-btn btn-green" type="submit">Send message <i class="far fa-angle-double-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{--  --}}
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16314137.73658627!2d35.6234344!3d-3.3639162500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x69aee3c4aca2f141%3A0x65e808d78c966593!2sTalima%20Africa%20Adventures!5e0!3m2!1ssw!2ske!4v1740479216473!5m2!1ssw!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        {{--  --}}
    </div>
</section><!--====== End Contact Section ======-->



@endsection
