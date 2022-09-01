@extends('layouts.dashboard-master')

@section('page-title', trans('app.news'))

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
    <a>{{ trans('app.news') }}</a>
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
                <form method="POST" enctype="multipart/form-data" action="{{ route('main.settings.article.publish') }}">
                    @csrf
                    <h5>Title</h5>
                    <input type="text" name="title" class="form-control mt-3 mb-3" placeholder="Enter Title" required>
                    <input type="text" name="author" value="{{ Auth::user()->id }}" hidden>

                    <h5>Description</h5>
                    <input type="text" name="description" class="form-control mt-3 mb-3" placeholder="Enter Description"
                        required>

                    <h5 data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Tips: You can paste image, iframe, etc on the text editor">Text</h5>
                    <textarea name="text"></textarea>

                    <h5 class="mt-3">Upload Thumbnail</h5>
                    <input type="file" name="thumbnail" class="form-control mt-3 mb-3" accept="image/*">

                    <h5 class="mt-3">Upload Images</h5>
                    <input type="file" name="images[]" class="form-control mt-3 mb-3" accept="image/*" multiple>

                    <h5 class="mt-3">Upload Videos</h5>
                    <input type="file" name="videos[]" class="form-control mt-3 mb-3" accept="video/*" multiple>

                    <div class="d-flex flex-row-reverse mt-3">
                        <button type="submit" class="btn btn-primary float-right">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
