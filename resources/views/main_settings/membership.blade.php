@extends('layouts.dashboard-master')

@section('page-title', trans('app.join.membership'))

@section('user-name', Auth::user()->username)

@section('breadcrumb')
    <a href="{{ route('main.settings.home') }}">Main Pages</a> /
    <a href="{{ route('main.settings.form') }}">Join Us</a> /
    <a>{{ trans('app.join.membership') }}</a>
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
