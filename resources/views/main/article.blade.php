@extends('layouts.main-master')

@section('page-title', 'Article Name')

@section('custom-head')
    <style>
        .card-title {
            line-height: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            /* number of lines to show */
            -webkit-line-clamp: 3;
            line-clamp: 3;
            -webkit-box-orient: vertical;
            transition: 0.3s all ease-in-out;
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
            <div class="row">
                <div class="col-md-9">
                    <div class="text-center mb-4">
                        <img src="{{ asset(get_article_thumbnail($article->id)) }}" class="img-fluid" alt="..."
                            style="min-width: 100%;" />
                    </div>
                    <h2>{{ $article->title }}</h2>
                    <h6 class="text-muted">Author: {{ get_user_detail($article->author, 'full_name') }}<br>Published:
                        {{ date_format($article->created_at, 'd M Y') }} | Updated:
                        {{ date_format($article->updated_at, 'd M Y') }}
                    </h6>
                    <p class="mt-4">
                        {!! $article->text !!}
                    </p>
                    <div id="image-gallery">
                        @foreach ($images as $image)
                            <img src="{{ asset($image->path) }}" class="img-fluid mb-2" alt="..." />
                        @endforeach
                    </div>
                    <div id="video-gallery">
                        @foreach ($videos as $video)
                            <video controls class="mb-2">
                                <source src="{{ asset($video->path) }}" type="video/mp4">
                            </video>
                        @endforeach
                    </div>

                    {{-- <div id="comment ">
                        <h4 class="mt-4 mb-3">9 Comments</h4>
                        <div>
                            <p><span class="fw-bold">Fernando Tatis Jr. </span><span class="fst-italic text-muted">01 Jan
                                    2020</span>
                            </p>
                            <p> Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente
                                quis molestiae est qui cum soluta. Vero aut rerum vel. Rerum quos laboriosam placeat ex qui.
                                Sint qui facilis et. </p>
                            <hr>
                        </div>
                        <div>
                            <p><span class="fw-bold">Kay Duggan </span><span class="fst-italic text-muted">01 Jan
                                    2020</span>
                            </p>
                            <p> Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente
                                quis molestiae est qui cum soluta. Vero aut rerum vel. Rerum quos laboriosam placeat ex qui.
                                Sint qui facilis et. </p>
                            <hr>
                        </div>
                    </div> --}}
                </div>
                <div class="col-md-3">
                    <h6>Read more like this</h6>
                    <a href="#" class="text-body">
                        <div class="card d-block w-100 shadow mb-2">
                            <div class="card-body">
                                <h6 class="card-title">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur venenatis
                                    blandit. Praesent vehicula, libero non pretium vulputate, lacus arcu facilisis lectus,
                                    sed
                                    feugiat tellus nulla eu dolor. Nulla porta bibendum lectus quis euismod. Aliquam
                                    volutpat
                                    ultricies porttitor. Cras risus nisi, accumsan vel cursus ut, sollicitudin vitae dolor.
                                    Fusce scelerisque eleifend lectus in bibendum. Suspendisse lacinia egestas felis a
                                    volutpat.
                                </h6>
                                <p class="card-time"><i class="bi bi-clock"></i> 4 August 2020</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>
@stop
