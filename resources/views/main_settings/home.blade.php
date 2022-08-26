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
            $('#fileInputHeroBg').val(null);
        });

        // front-end for hero bg button
        $(document).on("click", "#changeHeroBgButton", function() {
            $("#inputFileButtonHeroBg").removeClass('hide');
            $("#cancelChangeHeroBgButton").removeClass('hide');
            $("#submitHeroBgButton").removeClass('hide');
            $("#guideMsgHeroBg").removeClass('hide');

            $("#changeHeroBgButton").addClass('hide');
        });

        $(document).on("click", "#cancelChangeHeroBgButton", function() {
            $("#inputFileButtonHeroBg").addClass('hide');
            $("#cancelChangeHeroBgButton").addClass('hide');
            $("#submitHeroBgButton").addClass('hide');
            $("#guideMsgHeroBg").addClass('hide');

            $("#changeHeroBgButton").removeClass('hide');
            $('#fileInputHeroBg').val(null);
        });

        $(document).on("click", ".browseHeroBg", function() {
            var fileHeroBg = $(this).parents().find(".fileHeroBg");
            fileHeroBg.trigger("click");
        });

        $('#fileInputHeroBg').change(function(e) {
            var fileName = e.target.files[0].name;
            console.log(fileName);
            $("#fileHeroBg").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("previewHeroBg").src = e.target.result;
            };
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        });

        // front-end for quote bg button
        $(document).on("click", "#changeQuoteBgButton", function() {
            $("#inputFileButtonQuoteBg").removeClass('hide');
            $("#cancelChangeQuoteBgButton").removeClass('hide');
            $("#submitQuoteBgButton").removeClass('hide');
            $("#guideMsgQuoteBg").removeClass('hide');

            $("#changeQuoteBgButton").addClass('hide');
        });

        $(document).on("click", "#cancelChangeQuoteBgButton", function() {
            $("#inputFileButtonQuoteBg").addClass('hide');
            $("#cancelChangeQuoteBgButton").addClass('hide');
            $("#submitQuoteBgButton").addClass('hide');
            $("#guideMsgQuoteBg").addClass('hide');

            $("#changeQuoteBgButton").removeClass('hide');
            $('#fileInputQuoteBg').val(null);
        });

        $(document).on("click", ".browseQuoteBg", function() {
            var fileQuoteBg = $(this).parents().find(".fileQuoteBg");
            fileQuoteBg.trigger("click");
        });

        $('#fileInputQuoteBg').change(function(e) {
            var fileName = e.target.files[0].name;
            console.log(fileName);
            $("#fileQuoteBg").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                document.getElementById("previewQuoteBg").src = e.target.result;
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

            var quote = $(this).data('item');

            $('#deleteModalId').val(quote.id);
            $('#textBanModal').text('Are you sure you want to delete this quote "' + quote.quote +
                '" ' + ' from ' + quote.name + '?');
        });

        $(".closeDeleteModal").click(function() {
            $('#deleteModal').modal('hide');
        });
    </script>
@stop
