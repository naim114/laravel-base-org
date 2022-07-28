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
                <div class="col-md-4">
                    <img class="w-100 profile-photo" alt="..."
                        src="https://naim114.github.io/portfolio/demo/BizLand/assets/img/team/team-1.jpg">
                    <div class="name-title">
                        <h3>Saul Goodman</h3>
                        <p>Politics</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="w-100 profile-photo" alt="..."
                        src="https://naim114.github.io/portfolio/demo/BizLand/assets/img/team/team-3.jpg">
                    <div class="name-title">
                        <h3>Saul Goodman</h3>
                        <p>Politics</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="w-100 profile-photo" alt="..."
                        src="https://naim114.github.io/portfolio/demo/BizLand/assets/img/team/team-1.jpg">
                    <div class="name-title">
                        <h3>Saul Goodman</h3>
                        <p>Politics</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="w-100 profile-photo" alt="..."
                        src="https://naim114.github.io/portfolio/demo/BizLand/assets/img/team/team-1.jpg">
                    <div class="name-title">
                        <h3>Saul Goodman</h3>
                        <p>Politics</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="w-100 profile-photo" alt="..."
                        src="https://naim114.github.io/portfolio/demo/BizLand/assets/img/team/team-1.jpg">
                    <div class="name-title">
                        <h3>Saul Goodman</h3>
                        <p>Politics</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="w-100 profile-photo" alt="..."
                        src="https://naim114.github.io/portfolio/demo/BizLand/assets/img/team/team-1.jpg">
                    <div class="name-title">
                        <h3>Saul Goodman</h3>
                        <p>Politics</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="w-100 profile-photo" alt="..."
                        src="https://naim114.github.io/portfolio/demo/BizLand/assets/img/team/team-1.jpg">
                    <div class="name-title">
                        <h3>Saul Goodman</h3>
                        <p>Politics</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
