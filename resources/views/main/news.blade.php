@extends('layouts.main-master')

@section('page-title', trans('app.news'))

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
    <section id="content">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1>News</h1>
                <p>Get the latest news, events, announcement, public statements directly from us.</p>
            </div>
            <div class="row mb-4">
                <div class="col-lg-2 col-md-2">
                    <select name="sort" class="form-control p-3">
                        <option value="desc">Newest</option>
                        <option value="asc">Oldest </option>
                    </select>
                </div>
                <div class="col-lg-8 col-md-8">
                    <input name="keyword" placeholder="Find article using keyword" class="form-control p-3" type="text">
                </div>
                <div class="col-lg-2 col-md-2">
                    <button type="submit" class="btn btn-primary p-3 w-100">
                        Search <i class="bx bx-search"></i>
                    </button>
                </div>
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
        </div>
    </section>
@stop
