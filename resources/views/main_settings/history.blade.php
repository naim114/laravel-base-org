@extends('layouts.dashboard-master')

@section('page-title', trans('app.about.history'))

@section('custom-head')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.2/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: "380",
        });
    </script>
    <style>
        .mce-notification {
            display: none !important;
        }
    </style>
@stop

@section('user-name', Auth::user()->username)

@section('breadcrumb')
    <a href="{{ route('main.settings.home') }}">Main Pages</a> /
    <a href="{{ route('main.settings.organization') }}">About Us</a> /
    <a>{{ trans('app.about.history') }}</a>
@stop

@section('content')
    <div class="container">
        @error('avatar')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror

        <div class="card p-4 mb-3">
            <div class="form-group">
                <h5>Title</h5>
                <input type="text" name="title" class="form-control mt-3 mb-3" placeholder="Enter Title" value="">

                <h5>Subtitle</h5>
                <input type="text" name="subtitle" class="form-control mt-3 mb-3" placeholder="Enter Subtitle"
                    value="">

                <h5>Text</h5>
                <textarea name="text"></textarea>

                <div class="d-flex flex-row-reverse mt-3">
                    <button type="submit" class="btn btn-primary float-right">
                        Save Changes
                    </button>
                </div>

                <hr>

                <h5>Main Image</h5>
                <input type="file" name="main" class="form-control mt-3 mb-3" accept="image/*" multiple>

                <h5>Upload Images/Videos</h5>
                <input type="file" name="main" class="form-control mt-3 mb-3" accept="image/*,video/*" multiple>

                <div class="d-flex flex-row-reverse mt-3">
                    <button type="submit" class="btn btn-primary float-right">
                        Save Changes
                    </button>
                </div>
            </div>
        </div>

    </div>
@stop
