@extends('layouts.dashboard-master')

@section('page-title', $article->title)

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
    <a href="{{ route('main.settings.news') }}">{{ trans('app.news') }}</a> /
    <a>{{ $article->title }}</a>
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
                <form method="POST" action="{{ route('main.settings.article.update') }}">
                    @csrf
                    <a target="_blank" href="{{ route('main.article', ['id' => $article->id]) }}">View article >></a>
                    <h5 class="mt-3">Title</h5>
                    <input type="text" name="title" class="form-control mt-3 mb-3" placeholder="Enter Title"
                        value="{{ $article->title }}" required>

                    <input type="text" name="id" value="{{ $article->id }}" hidden>

                    <h5>Subtitle</h5>
                    <input type="text" name="description" class="form-control mt-3 mb-3" placeholder="Enter Subtitle"
                        value="{{ $article->description }}" required>

                    <h5 data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Tips: You can paste image, iframe, etc on the text editor">Text</h5>
                    <textarea name="text">{!! $article->text !!}</textarea>

                    <div class="d-flex flex-row-reverse mt-3">
                        <button type="submit" class="btn btn-primary float-right">
                            Save Changes
                        </button>
                    </div>
                </form>

                <hr>

                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1"
                            type="button" role="tab" aria-controls="nav-1" aria-selected="true">Thumbnail</button>
                        <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button"
                            role="tab" aria-controls="nav-2" aria-selected="true">Image</button>
                        <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button"
                            role="tab" aria-controls="nav-3" aria-selected="false">Video</button>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
                        <form method="POST" enctype="multipart/form-data"
                            action="{{ route('main.settings.article.image-video') }}">
                            @csrf
                            <h5 class="mt-3">Add/Replace Thumbnail</h5>
                            <input type="file" name="thumbnail" class="form-control mt-3 mb-3" accept="image/*" required>
                            <input type="text" name="id" value="{{ $article->id }}" hidden>
                            <input type="text" name="type" value="thumbnail" hidden>
                            <div class="d-flex flex-row-reverse mt-3">
                                <button type="submit" class="btn btn-primary float-right">
                                    Confirm Add/Replace Thumbnail
                                </button>
                            </div>
                        </form>
                        <hr>
                        <table class="table table-striped mt-2">
                            <tbody>
                                @foreach ($thumbnails as $thumbnail)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($thumbnail->path) }}" alt="..."
                                                style="width: 30vw">
                                        </td>
                                        <td>
                                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-h fa-fw"></i></a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li>
                                                    <a target="_blank" href="{{ asset($thumbnail->path) }}"
                                                        class="dropdown-item">
                                                        View Thumbnail
                                                    </a>
                                                </li>
                                                <li>
                                                    <button data-item="{{ $thumbnail }}" data-type="thumbnail"
                                                        class="dropdown-item text-danger deleteImgVidButton">
                                                        Delete Thumbnail
                                                    </button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
                        <form method="POST" enctype="multipart/form-data"
                            action="{{ route('main.settings.article.image-video') }}">
                            @csrf
                            <h5 class="mt-3">Upload Images</h5>
                            <input type="file" name="images[]" class="form-control mt-3 mb-3" accept="image/*"
                                multiple required>
                            <input type="text" name="id" value="{{ $article->id }}" hidden>
                            <input type="text" name="type" value="image" hidden>
                            <div class="d-flex flex-row-reverse mt-3">
                                <button type="submit" class="btn btn-primary float-right">
                                    Confirm Add Images
                                </button>
                            </div>
                        </form>
                        <hr>
                        <table class="table table-striped mt-2">
                            <tbody>
                                @foreach ($images as $image)
                                    <tr>
                                        <td>
                                            <img src="{{ asset($image->path) }}" alt="..."
                                                style="width: 30vw">
                                        </td>
                                        <td>
                                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-h fa-fw"></i></a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li>
                                                    <a target="_blank" href="{{ asset($image->path) }}"
                                                        class="dropdown-item">
                                                        View Image
                                                    </a>
                                                </li>
                                                <li>
                                                    <button data-item="{{ $image }}" data-type="image"
                                                        class="dropdown-item text-danger deleteImgVidButton">
                                                        Delete Image
                                                    </button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
                        <form method="POST" enctype="multipart/form-data"
                            action="{{ route('main.settings.article.image-video') }}">
                            @csrf
                            <h5 class="mt-3">Upload Videos (Max 20MB)</h5>
                            <input type="file" name="videos[]" class="form-control mt-3 mb-3" accept="video/*"
                                multiple required>
                            <input type="text" name="id" value="{{ $article->id }}" hidden>
                            <input type="text" name="type" value="video" hidden>
                            <div class="d-flex flex-row-reverse mt-3">
                                <button type="submit" class="btn btn-primary float-right">
                                    Confirm Add Videos
                                </button>
                            </div>
                        </form>
                        <hr>
                        <table class="table table-striped mt-2">
                            <tbody>
                                @foreach ($videos as $video)
                                    <tr>
                                        <td>
                                            <video controls class="mb-2" style="width: 30vw">
                                                <source src="{{ asset($video->path) }}" type="video/mp4">
                                            </video>
                                        </td>
                                        <td>
                                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                    class="fas fa-ellipsis-h fa-fw"></i></a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li>
                                                    <a target="_blank" href="{{ asset($video->path) }}"
                                                        class="dropdown-item">
                                                        View Video
                                                    </a>
                                                </li>
                                                <li>
                                                    <button data-item="{{ $video }}" data-type="video"
                                                        class="dropdown-item text-danger deleteImgVidButton">
                                                        Delete Video
                                                    </button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Delete Image Modal --}}
    <div class="modal fade" id="deleteImgVidModal" tabindex="-1" role="dialog"
        aria-labelledby="deleteImgVidModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="POST" action="{{ route('main.settings.article.image-video.delete') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteImgVidModalLabel">
                        </h5>
                    </div>
                    <div class="modal-body">
                        <p id="textBanImgModal"></p>
                        <input name="id" type="text" id="deleteImgVidModalId" hidden>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary closeDeleteImgVidModal"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        // delete image modal
        $(".deleteImgVidButton").click(function() {
            $('#deleteImgVidModal').modal('show');

            var item = $(this).data('item');
            var type = $(this).data('type');

            $('#deleteImgVidModalId').val(item.id);
            $('#deleteImgVidModalLabel').text('Delete ' + type);
            $('#textBanImgModal').text('Are you sure you want to delete this ' + type + '?');
        });

        $(".closeDeleteImgVidModal").click(function() {
            $('#deleteImgVidModal').modal('hide');
        });
    </script>
@stop
