@extends('layouts.dashboard-master')

@section('page-title', trans('app.about.org'))

@section('user-name', Auth::user()->username)

@section('breadcrumb')
    <a href="{{ route('main.settings.home') }}">Main Pages</a> /
    <a href="{{ route('main.settings.organization') }}">About Us</a> /
    <a>{{ trans('app.about.org') }}</a>
@stop

@section('content')
    <div class="container">
        @error('avatar')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror

    </div>
@stop
