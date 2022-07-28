@extends('layouts.main-master')

@section('page-title', trans('app.home'))

@section('custom-head')
    <style>
        .card-title {
            line-height: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* number of lines to show */
            line-clamp: 3;
            -webkit-box-orient: vertical;
            transition: 0.3s all ease-in-out;
        }

        .card-text {
            line-height: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            /* number of lines to show */
            line-clamp: 4;
            -webkit-box-orient: vertical;
        }

        .card-time {
            color: #808791;
            font-size: 12.5px;
        }

        .card-img-top {
            height: 150px;
            object-fit: cover;
            opacity: 0.6;
            transition: 0.3s all ease-in-out;
        }

        .card:hover .card-title {
            color: #3b8af2;
        }

        .card:hover .card-img-top {
            opacity: 1;
        }
    </style>
@stop

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>Welcome to <span>{{ trans('app.app-name') }}</span></h1>
            <h2>We are team of talented designers making websites with Bootstrap</h2>
            <div class="d-flex">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                        class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Featured Section ======= -->
    <section id="about" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a href="#">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">About Us</a></h4>
                            <p class="description">Get to know more about our organization, history and committee.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a href="#">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-news"></i></div>
                            <h4 class="title"><a href="">News</a></h4>
                            <p class="description">Read the latest news, statements and events.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a href="#">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-certification"></i></div>
                            <h4 class="title"><a href="">Join Us</a></h4>
                            <p class="description">Register online membership, download application forms or donate to us.
                            </p>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <a href="#">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bx bx-phone"></i></div>
                            <h4 class="title"><a href="">Contact</a></h4>
                            <p class="description">Get our contact information.</p>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    </section><!-- End Featured Section -->

    <!-- ======= News Preview Section ======= -->
    <section id="news" class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3>Read Our <span>Latest News</span></h3>
                <p>Get the latest news, events, announcement, public statements directly from us.</p>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="text-body">
                        <div class="card d-block w-100 shadow h-100">
                            <img src="http://localhost:8000/home/img/hero-bg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur venenatis
                                    blandit. Praesent vehicula, libero non pretium vulputate, lacus arcu facilisis lectus,
                                    sed
                                    feugiat tellus nulla eu dolor. Nulla porta bibendum lectus quis euismod. Aliquam
                                    volutpat
                                    ultricies porttitor. Cras risus nisi, accumsan vel cursus ut, sollicitudin vitae dolor.
                                    Fusce scelerisque eleifend lectus in bibendum. Suspendisse lacinia egestas felis a
                                    volutpat.
                                </h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur venenatis
                                    blandit. Praesent vehicula, libero non pretium vulputate, lacus arcu facilisis lectus,
                                    sed
                                    feugiat tellus nulla eu dolor. Nulla porta bibendum lectus quis euismod. Aliquam
                                    volutpat
                                    ultricies porttitor. Cras risus nisi, accumsan vel cursus ut, sollicitudin vitae dolor.
                                    Fusce scelerisque eleifend lectus in bibendum. Suspendisse lacinia egestas felis a
                                    volutpat.
                                </p>
                                <p class="card-time"><i class="bi bi-clock"></i> 4 August 2020</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="text-body">
                        <div class="card d-block w-100 shadow h-100">
                            <img src="http://localhost:8000/home/img/hero-bg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Thriving in an AI-enabled Digital Economy
                                </h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <p class="card-time"><i class="bi bi-clock"></i> 4 August 2020</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="text-body">
                        <div class="card d-block w-100 shadow h-100">
                            <img src="http://localhost:8000/home/img/hero-bg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Thriving in an AI-enabled Digital Economy
                                </h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <p class="card-time"><i class="bi bi-clock"></i> 4 August 2020</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="text-body">
                        <div class="card d-block w-100 shadow h-100">
                            <img src="http://localhost:8000/home/img/hero-bg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Thriving in an AI-enabled Digital Economy
                                </h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <p class="card-time"><i class="bi bi-clock"></i> 4 August 2020</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="float-end mt-3">
                <a href="#">View More <i class="bi bi-arrow-right-square-fill"></i></a>
            </div>
    </section><!-- End News Preview Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3><span>Gallery</span></h3>
                <p>Check out what we have been up to.</p>
            </div>
            <div id="carouselGalleryCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselGalleryCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselGalleryCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselGalleryCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="http://localhost:8000/home/img/hero-bg.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://localhost:8000/home/img/hero-bg.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://localhost:8000/home/img/hero-bg.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="caption-title">Third slide label</h5>
                            <p class="caption-subtitle">Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselGalleryCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselGalleryCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Quotes Section ======= -->
    <section id="quotes" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                risus at semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                legam anim culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                dolore labore illum veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                culpa fore nisi cillum quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Quptes Section -->

    <!-- ======= Donate Section ======= -->
    <footer id="footer" data-aos="fade-up">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Support Us By Donating</h4>
                        <p>Besides buying our products you can straight away support us by donating.</p>
                        <button class="btn btn-primary btn-lg">Donate Now</button>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Donate Section -->
@stop
