@extends('layouts.dashboard-master')

@section('page-title', trans('app.home'))

@section('custom-head')
    <style>
        .hide {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }
    </style>
@stop

@section('user-name', Auth::user()->username)

@section('breadcrumb')
    <a href="{{ route('main.settings.home') }}">Main Pages</a> /
    <a>{{ trans('app.home') }}</a>
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
                @include('main_settings.partial.hero')
            </div>
        </div>

        <div class="card p-4 mb-3">
            <div class="form-group">
                @include('main_settings.partial.news')
            </div>
        </div>

        <div class="card p-4 mb-3">
            <div class="form-group">
                @include('main_settings.partial.gallery')
            </div>
        </div>

        <div class="card p-4 mb-3">
            <div class="form-group">
                @include('main_settings.partial.quote')
            </div>
        </div>

        <div class="card p-4 mb-3">
            <div class="form-group">
                @include('main_settings.partial.donate')
            </div>
        </div>
    </div>
@stop


@section('scripts')
    <script>
        // onready function
        $(document).ready(function() {
            $('#fileInputWallpaper').val(null);
        });

        // front-end for auth wallpaper button
        $(document).on("click", "#changeWallpaperButton", function() {
            $("#inputFileButtonWallpaper").removeClass('hide');
            $("#cancelChangeWallpaperButton").removeClass('hide');
            $("#submitWallpaperButton").removeClass('hide');
            $("#guideMsgWallpaper").removeClass('hide');

            $("#changeWallpaperButton").addClass('hide');
        });

        $(document).on("click", "#cancelChangeWallpaperButton", function() {
            $("#inputFileButtonWallpaper").addClass('hide');
            $("#cancelChangeWallpaperButton").addClass('hide');
            $("#submitWallpaperButton").addClass('hide');
            $("#guideMsgWallpaper").addClass('hide');

            $("#changeWallpaperButton").removeClass('hide');
            $('#fileInputWallpaper').val(null);
        });

        $(document).on("click", ".browseWallpaper", function() {
            var fileWallpaper = $(this).parents().find(".fileWallpaper");
            fileWallpaper.trigger("click");
        });

        $('#fileInputWallpaper').change(function(e) {
            var fileName = e.target.files[0].name;
            console.log(fileName);
            $("#fileWallpaper").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("previewWallpaper").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        // add modal
        $(".addButton").click(function() {
            $('#addModal').modal('show');
        });

        $(".closeAddModal").click(function() {
            $('#addModal').modal('hide');
        });

        // delete modal
        $(".deleteButton").click(function() {
            $('#deleteModal').modal('show');

            var quotes = $(this).data('quotes');

            $('#deleteModalId').val(quotes.id);
            $('#textBanModal').text('Are you sure you want to delete this quote "' + quote.quote +
                '" ?');
        });
    </script>
@stop
