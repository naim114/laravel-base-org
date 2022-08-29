@extends('layouts.main-master')

@section('page-title', trans('app.about.history'))

@section('custom-head')
    <style>
        .profile-photo {
            object-fit: cover;
            height: 400px;
        }

        .name-title {
            margin-top: 20px;
        }
    </style>
@stop

@section('content')
    <section id="content">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1>Committee</h1>
                <p>Get to know our organization committee.</p>
            </div>
            <div class="row">
                @foreach ($committees as $committee)
                    <div class="col-md-4">
                        <img class="w-100 profile-photo" alt="..."
                            src="{{ $committee->path == null || $committee->path == '' ? asset('assets/img/default-image.jpg') : asset($committee->path) }}">
                        <div class="name-title">
                            <h3>{{ $committee->name }}</h3>
                            <p>{{ $committee->title }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop
