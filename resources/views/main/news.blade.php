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
            <form method="GET" action="{{ route('main.news') }}">
                <div class="row mb-4">
                    <div class="col-lg-2 col-md-2">
                        <select name="sort" class="form-control p-3">
                            <option value="desc">Newest</option>
                            <option value="asc">Oldest </option>
                        </select>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <input name="keyword" placeholder="Find article using keyword" class="form-control p-3"
                            type="text" value="{{ $keyword }}">
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <button type="submit" class="btn btn-primary p-3 w-100">
                            Search <i class="bx bx-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-3 mb-4">
                        <a href="{{ route('main.article', ['id' => $article->id]) }}" class="text-body">
                            <div class="card d-block w-100 shadow h-100">
                                <img src="{{ secure_asset(get_article_thumbnail($article->id)) }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $article->title }}
                                    </h5>
                                    <p class="card-text">
                                        {{ $article->description }}
                                    </p>
                                    <p class="card-time"><i class="bi bi-clock"></i>
                                        {{ date_format($article->created_at, 'd M Y') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </section>
@stop
