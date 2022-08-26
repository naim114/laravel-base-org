@extends('layouts.main-master')

@section('page-title', trans('app.contact'))

@section('content')
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h1>Contact Us</h1>
                    <p>Any enquire please contact us through below details.</p>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>{{ $address ?? 'None' }} </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>{{ $email ?? 'None' }}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>{{ $phone ?? 'None' }}</p>
                    </div>
                </div>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
                <div class="col-lg-6">
                    @isset($twitter)
                        <div class="info-box mb-2">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="bx bxl-twitter"></i>
                                </div>
                                <div class="col-sm-8">
                                    <h6>Twitter</h6>
                                    <p>{{ $twitter ?? 'None' }}</p>
                                </div>
                            </div>
                        </div>
                    @endisset
                    @isset($facebook)
                        <div class="info-box mb-2">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="bx bxl-facebook"></i>
                                </div>
                                <div class="col-sm-8">
                                    <h6>Facebook</h6>
                                    <p>{{ $facebookv ?? 'None' }}</p>
                                </div>
                            </div>
                        </div>
                    @endisset
                    @isset($instagram)
                        <div class="info-box mb-2">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="bx bxl-instagram"></i>
                                </div>
                                <div class="col-sm-8">
                                    <h6>Instagram</h6>
                                    <p>{{ $instagram ?? 'None' }}</p>
                                </div>
                            </div>
                        </div>
                    @endisset
                    @isset($linkedin)
                        <div class="info-box mb-2">
                            <div class="row">
                                <div class="col-sm-4">
                                    <i class="bx bxl-linkedin"></i>
                                </div>
                                <div class="col-sm-8">
                                    <h6>LinkedIn</h6>
                                    <p>{{ $linkedin ?? 'None' }}</p>
                                </div>
                            </div>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </section>
@stop
