@extends('frontend.layouts.layout') 
@section('title', 'Dashboard')
@section('content')

<!-- contact-section -->
<section class="contact-section bg-color-2">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                <div class="contact-info-inner">
                    <div class="sec-title">
                        <span>Contact Us</span>
                        <h2>Our Contacts & Location</h2>
                    </div>
                    <div class="single-box">
                        <h3>Opening hours</h3>
                        <ul class="list clearfix"> 
                            <li>Daily: 9.30 AM–6.00 PM</li>
                            <li>Saturday & Holidays: Closed</li>
                        </ul>
                    </div>
                    <div class="single-box">
                        <h3>Contact info</h3>
                        <ul class="list clearfix"> 
                            <li> Nepal</li>
                            <li><a href="mailto:example@info.com">opportunitiescirclenepal@gmail.com</a></li>
                            
                        </ul>
                    </div>
                    <div class="single-box">
                        <h3>Social contact</h3>
                        <ul class="social-links clearfix">
                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                <div class="form-inner">
                    <h2>Get in Touch</h2>
                    <form method="post" action="sendemail.php" id="contact-form" class="default-form"> 
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label>Your Name *</label>
                                <input type="text" name="username" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <label>Your Email *</label>
                                <input type="email" name="email" required="">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <label>Your Phone</label>
                                <input type="text" name="phone" required="">
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <label>Subject</label>
                                <input type="text" name="subject" required="">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <label>Your Message ...</label>
                                <textarea name="message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                <button class="theme-btn-one" type="submit" name="submit-form">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->


<!-- google-map-section -->
<section class="google-map-section">
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7067.540572682971!2d85.4252958!3d27.662578000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1aa64a37499d%3A0x77c794ac234add76!2sSuryabinayak!5e0!3m2!1sen!2snp!4v1672750199353!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- google-map-section end -->


@endsection
