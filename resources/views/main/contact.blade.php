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
                    <form id="contact_form" action="mailto:{{ $email }}" method="POST" role="form"
                        class="php-email-form">
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="input_subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" id="input_msg" required></textarea>
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

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        $("#contact_form").change(function() {
            var email = {!! json_encode($email) !!};;
            var input_subject = $('#input_subject').val();
            var input_msg = $('#input_msg').val();

            var action = `mailto:${email}?subject=${input_subject}&body=${input_msg}`;

            $('#contact_form').attr('action', action);
        });
    </script>
@stop
