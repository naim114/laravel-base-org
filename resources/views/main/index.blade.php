@extends('layouts.main-master')

@section('custom-head')
    <style>
        .carousel-control-prev,
        .carousel-control-next {
            background-color: #8b8b8b;
            padding: 10px;
            width: 5vh;
            height: 5vh;
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
        }

        .cards-wrapper {
            display: flex;
            justify-content: center;
        }

        .card {
            margin: 0 1em;
            /* box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18); */
            border: none;
            background-color: transparent;
            border-radius: 0;
        }

        .card-img-top {
            border-radius: 0;
        }

        .card-title {
            color: #212529;
        }

        .card-title:hover {
            color: #545454;
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

    <!-- ======= News Preview Section ======= -->
    <section id="news" class="about section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3>Read Our <span>Latest News</span></h3>
                <p>Get the latest news, events, announcement, public statements directly from us.</p>
            </div>
            <div id="carouselNews" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper p-4">
                            <div class="card">
                                <img src="https://on-desktop.com/wps/2020Food___Cakes_and_Sweet_Pie_with_cottage_cheese_and_berries_on_the_table_144346_.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p style="font-size: 12px;"><i class="bi bi-clock"></i> 11/2/2022</p>
                                    <a href="#">
                                        <h5 class="card-title">Card title</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="https://on-desktop.com/wps/2020Food___Cakes_and_Sweet_Pie_with_cottage_cheese_and_berries_on_the_table_144346_.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p style="font-size: 12px;"><i class="bi bi-clock"></i> 11/2/2022</p>
                                    <a href="#">
                                        <h5 class="card-title">Card title</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="https://on-desktop.com/wps/2020Food___Cakes_and_Sweet_Pie_with_cottage_cheese_and_berries_on_the_table_144346_.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p style="font-size: 12px;"><i class="bi bi-clock"></i> 11/2/2022</p>
                                    <a href="#">
                                        <h5 class="card-title">Card title</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper p-4">
                            <div class="card">
                                <img src="https://on-desktop.com/wps/2020Food___Cakes_and_Sweet_Pie_with_cottage_cheese_and_berries_on_the_table_144346_.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p style="font-size: 12px;"><i class="bi bi-clock"></i> 11/2/2022</p>
                                    <a href="#">
                                        <h5 class="card-title">Card title</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="https://on-desktop.com/wps/2020Food___Cakes_and_Sweet_Pie_with_cottage_cheese_and_berries_on_the_table_144346_.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p style="font-size: 12px;"><i class="bi bi-clock"></i> 11/2/2022</p>
                                    <a href="#">
                                        <h5 class="card-title">Card title</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="https://on-desktop.com/wps/2020Food___Cakes_and_Sweet_Pie_with_cottage_cheese_and_berries_on_the_table_144346_.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p style="font-size: 12px;"><i class="bi bi-clock"></i> 11/2/2022</p>
                                    <a href="#">
                                        <h5 class="card-title">Card title</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper p-4">
                            <div class="card">
                                <img src="https://on-desktop.com/wps/2020Food___Cakes_and_Sweet_Pie_with_cottage_cheese_and_berries_on_the_table_144346_.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p style="font-size: 12px;"><i class="bi bi-clock"></i> 11/2/2022</p>
                                    <a href="#">
                                        <h5 class="card-title">Card title</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="https://on-desktop.com/wps/2020Food___Cakes_and_Sweet_Pie_with_cottage_cheese_and_berries_on_the_table_144346_.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p style="font-size: 12px;"><i class="bi bi-clock"></i> 11/2/2022</p>
                                    <a href="#">
                                        <h5 class="card-title">Card title</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="card d-none d-md-block">
                                <img src="https://on-desktop.com/wps/2020Food___Cakes_and_Sweet_Pie_with_cottage_cheese_and_berries_on_the_table_144346_.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p style="font-size: 12px;"><i class="bi bi-clock"></i> 11/2/2022</p>
                                    <a href="#">
                                        <h5 class="card-title">Card title</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselNews"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselNews"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

    </section><!-- End About Section -->
@stop
