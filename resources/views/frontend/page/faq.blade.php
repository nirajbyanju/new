@extends('frontend.layouts.layout') 
@section('title', 'Dashboard')
@section('content')
 <!-- faq-section -->
 <section class="faq-section bg-color-2">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="faq-content">
                    <div class="sec-title">
                        <span>FAQ’S</span>
                        <h2>Frequently Asked <br />Questions.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing do eumod tempor   incididunt labore dolore magna aliqua enim.</p>
                    </div>
                    <ul class="accordion-box">
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"></div>
                                <h5>Do I really need a Realtor when buying a home?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing eumod tempor incidunt labore dolore magna aliqua enim minim veniam. quis nostrud exercitation  labo ris nis aliquip comodo consequat duis aute irure.</p>
                                    <ul class="list-item">
                                        <li>consectetur elit sed do eius</li>
                                        <li>consectetur elit sed</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block active-block">
                            <div class="acc-btn active">
                                <div class="icon-outer"></div>
                                <h5>Can a home depreciate in value?</h5>
                            </div>
                            <div class="acc-content current">
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing eumod tempor incidunt labore dolore magna aliqua enim minim veniam. quis nostrud exercitation  labo ris nis aliquip comodo consequat duis aute irure.</p>
                                    <ul class="list-item">
                                        <li>consectetur elit sed do eius</li>
                                        <li>consectetur elit sed</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                             <div class="acc-btn">
                                <div class="icon-outer"></div>
                                <h5>Is an older home as good a value as a new home?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing eumod tempor incidunt labore dolore magna aliqua enim minim veniam. quis nostrud exercitation  labo ris nis aliquip comodo consequat duis aute irure.</p>
                                    <ul class="list-item">
                                        <li>consectetur elit sed do eius</li>
                                        <li>consectetur elit sed</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                             <div class="acc-btn">
                                <div class="icon-outer"></div>
                                <h5>Who pays the Realtor fees when buying a home?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing eumod tempor incidunt labore dolore magna aliqua enim minim veniam. quis nostrud exercitation  labo ris nis aliquip comodo consequat duis aute irure.</p>
                                    <ul class="list-item">
                                        <li>consectetur elit sed do eius</li>
                                        <li>consectetur elit sed</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                             <div class="acc-btn">
                                <div class="icon-outer"></div>
                                <h5>How much should I offer the sellers?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing eumod tempor incidunt labore dolore magna aliqua enim minim veniam. quis nostrud exercitation  labo ris nis aliquip comodo consequat duis aute irure.</p>
                                    <ul class="list-item">
                                        <li>consectetur elit sed do eius</li>
                                        <li>consectetur elit sed</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="faq-sidebar">
                    <div class="submit-form">
                        <div class="sec-title">
                            <span>Submit Question</span>
                            <h3>Ask Your Valuable Questions</h3>
                        </div>
                        <form action="faq.html" method="post">
                            <div class="form-group">
                                <label>Your name</label>
                                <input type="text" name="name" required="">
                            </div>
                            <div class="form-group">
                                <label>Your Phone</label>
                                <input type="text" name="phone" required="">
                            </div>
                            <div class="form-group">
                                <label>Your message</label>
                                <textarea name="message"></textarea>
                            </div>
                            <div class="form-group message-btn">
                                <button type="submit" class="theme-btn-one">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-section end -->

@endsection