@extends('layouts.main-master')

@section('page-title', trans('app.about.history'))

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
            <div class="section-title">
                <h1>{{ $article->title }}</h1>
                <p>{{ $article->description }}</p>
            </div>
            {!! $article->text !!}
            <div class="text-center mt-4">
                <div id="image-gallery" class="row">
                    @foreach ($images as $image)
                        <img src="{{ asset($image->path) }}" class="img-fluid mb-2" alt="..." />
                    @endforeach
                </div>
                <div id="video-gallery" class="row">
                    @foreach ($videos as $video)
                        <video controls class="mb-2">
                            <source src="{{ asset($video->path) }}" type="video/mp4">
                        </video>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@stop
