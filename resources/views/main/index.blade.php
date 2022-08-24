@extends('layouts.main-master')

@section('page-title', trans('app.home'))

@section('custom-head')
    <style>
        .card-title {
            line-height: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            /* number of lines to show */
            -webkit-line-clamp: 2;
            line-clamp: 2;
            -webkit-box-orient: vertical;
            transition: 0.3s all ease-in-out;
        }

        .card-text {
            line-height: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            /* number of lines to show */
            -webkit-line-clamp: 3;
            line-clamp: 3;
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

        #hero {
            background: url({{ $hero_bg }}) top left;
        }

        .testimonials {
            background: url({{ $quote_bg }});
        }
    </style>
@stop

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1>{{ $hero_title }}</h1>
            <h2>{{ $hero_subtitle }}</h2>
            <div class="d-flex">
                <a href="#news" class="btn-get-started scrollto">Get Started</a>
                <a href="{{ $hero_vid }}" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch
                        Video</span></a>
            </div>
        </div>
    </section><!-- End Hero -->

    <!-- ======= News Preview Section ======= -->
    <section id="news" class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3><span>{{ $news_title }}</span></h3>
                <p>{{ $news_subtitle }}</p>
            </div>
            <div class="row">
                <div class="col-md-3 mb-2">
                    <a href="#" class="text-body">
                        <div class="card d-block w-100 shadow h-100">
                            <img src="{{ $gallery_images[0]->url }}" class="card-img-top" alt="...">
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
                <div class="col-md-3 mb-2">
                    <a href="#" class="text-body">
                        <div class="card d-block w-100 shadow h-100">
                            <img src="{{ $gallery_images[0]->url }}" class="card-img-top" alt="...">
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
                <div class="col-md-3 mb-2">
                    <a href="#" class="text-body">
                        <div class="card d-block w-100 shadow h-100">
                            <img src="{{ $gallery_images[0]->url }}" class="card-img-top" alt="...">
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
                <div class="col-md-3 mb-2">
                    <a href="#" class="text-body">
                        <div class="card d-block w-100 shadow h-100">
                            <img src="{{ $gallery_images[0]->url }}" class="card-img-top" alt="...">
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
                <a href="{{ route('main.news') }}">View More <i class="bi bi-arrow-right-square-fill"></i></a>
            </div>
        </div>
    </section><!-- End News Preview Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3><span>{{ $gallery_title }}</span></h3>
                <p>{{ $gallery_subtitle }}</p>
            </div>

            <div id="carouselGalleryCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @isset($gallery_images[0])
                        <button type="button" data-bs-target="#carouselGalleryCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    @endisset
                    @isset($gallery_images[1])
                        <button type="button" data-bs-target="#carouselGalleryCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    @endisset
                    @isset($gallery_images[2])
                        <button type="button" data-bs-target="#carouselGalleryCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    @endisset
                    @isset($gallery_images[3])
                        <button type="button" data-bs-target="#carouselGalleryCaptions" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    @endisset
                    @isset($gallery_images[4])
                        <button type="button" data-bs-target="#carouselGalleryCaptions" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                    @endisset
                </div>
                <div class="carousel-inner">
                    @isset($gallery_images[0])
                        <div class="carousel-item active">
                            <img src="{{ $gallery_images[0]->url }}" class="d-block w-100" alt="...">
                        </div>
                    @endisset
                    @isset($gallery_images[1])
                        <div class="carousel-item">
                            <img src="{{ $gallery_images[1]->url }}" class="d-block w-100" alt="...">
                        </div>
                    @endisset
                    @isset($gallery_images[2])
                        <div class="carousel-item">
                            <img src="{{ $gallery_images[2]->url }}" class="d-block w-100" alt="...">
                        </div>
                    @endisset
                    @isset($gallery_images[3])
                        <div class="carousel-item">
                            <img src="{{ $gallery_images[3]->url }}" class="d-block w-100" alt="...">
                        </div>
                    @endisset
                    @isset($gallery_images[4])
                        <div class="carousel-item">
                            <img src="{{ $gallery_images[4]->url }}" class="d-block w-100" alt="...">
                        </div>
                    @endisset
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
                    @foreach ($quotes as $quote)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <h3>{{ $quote->name }}</h3>
                                <h4>{{ $quote->title }}</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{ $quote->quote }}
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->
                    @endforeach
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
                        <h4>{{ $donate_title }}</h4>
                        <p>{{ $donate_subtitle }}</p>
                        <a href="{{ route('main.join.donate') }}" class="btn btn-primary btn-lg">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Donate Section -->
@stop
