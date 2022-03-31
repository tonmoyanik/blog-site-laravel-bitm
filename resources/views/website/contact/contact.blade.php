@extends('master.front.master')

@section('body')
    <section class="page-title overlay" style="background-image: url({{ asset('/') }}website/images/background/page-title.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-white font-weight-bold">Contact Us</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-1 col-md-5">
                    <h2 class="section-title">Contact Us</h2>
                    <ul class="pl-0">
                        <!-- contact items -->
                        <li class="d-flex mb-30">
                            <i class="round-icon mr-3 ti-mobile"></i>
                            <div class="align-self-center font-primary">
                                <p>+88 0123 456 789</p>
                                <p>+88 987 654 3210</p>
                            </div>
                        </li>
                        <li class="d-flex mb-30">
                            <i class="round-icon mr-3 ti-email"></i>
                            <div class="align-self-center font-primary">
                                <p>info@biztrox.com</p>
                                <p>biztrox@email.com</p>
                            </div>
                        </li>
                        <li class="d-flex mb-30">
                            <i class="round-icon mr-3 ti-map-alt"></i>
                            <div class="align-self-center font-primary">
                                <p>24/B Garden Street.</p>
                                <p>Northambia, Weals, UK</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- form -->
                <div class="col-lg-6 col-md-7">
                    <div class="p-5 rounded box-shadow">
                        <form action="#" class="row">
                            <div class="col-12">
                                <h3>Contact Form</h3>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control p-2" name="message" id="message" placeholder="Your Message Here..." required style="height: 150px;"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" value="send">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map">
        <!-- Google Map -->
        <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9028600385536!2d90.39122601445585!3d23.750843194677536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd535e2469%3A0xd144b1293fb0f720!2sBDBL%20Bhaban%2C%2012%2C%20Kazi%20Nazrul%20Islam%20Ave%2C%20Dhaka%201215!5e0!3m2!1sen!2sbd!4v1648532533121!5m2!1sen!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </section>
@endsection
