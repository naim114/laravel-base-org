@extends('layouts.dashboard-master')

@section('page-title', trans('app.about.committee'))

@section('user-name', Auth::user()->username)

@section('breadcrumb')
    <a href="{{ route('main.settings.home') }}">Main Pages</a> /
    <a href="{{ route('main.settings.organization') }}">About Us</a> /
    <a>{{ trans('app.about.committee') }}</a>
@stop

@section('content')
    <div class="container">
        @error('avatar')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror

        <button class="btn btn-primary mb-2 addButton">
            + Add Committee
        </button>
        <table id="rolesTable" class="table table-striped table-hover table-responsive">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Title/Role/Position</th>
                    <th scope="col">Images</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($committees as $committee)
                    <tr>
                        <td>{{ $committee->name }}</td>
                        <td>{{ $committee->title }}</td>
                        <td>
                            <a target="_blank" href="{{ asset($committee->path) }}"><i
                                    class="fas fa-image fa-fw"></i></a>
                        </td>
                        <td>
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fas fa-ellipsis-h fa-fw"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <button data-item="{{ $committee }}" class="dropdown-item editButton">
                                        Edit Committee
                                    </button>
                                </li>
                                <li>
                                    <button data-item="{{ $committee }}" class="dropdown-item text-danger deleteButton">
                                        Delete Committee
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

{{-- Modal --}}
{{-- Add Modal --}}
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" enctype="multipart/form-data" action="{{ route('main.settings.comittee.add') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">
                        Add Modal
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group mb-2">
                        <label>Title/Role/Position</label>
                        <input name="title" type="text" class="form-control"
                            placeholder="Enter title/role/position" required>
                    </div>
                    <div class="form-group mb-2">
                        <label>Upload Image</label>
                        <input name="path" type="file" class="form-control" placeholder="Upload image"
                            accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closeAddModal" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Edit Modal --}}
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" enctype="multipart/form-data" action="{{ route('main.settings.comittee.update') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">
                        Edit Modal
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label>Name</label>
                        <input id="editModalName" name="name" type="text" class="form-control"
                            placeholder="Enter name" required>
                        <input id="editModalId" name="id" type="text" hidden>
                    </div>
                    <div class="form-group mb-2">
                        <label>Title/Role/Position</label>
                        <input id="editModalTitle" name="title" type="text" class="form-control"
                            placeholder="Enter title/role/position" required>
                    </div>
                    <div class="form-group mb-2">
                        <label>Upload Image</label>
                        <input name="path" type="file" class="form-control" placeholder="Upload image"
                            accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closeEditModal"
                        data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Delete Modal --}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" action="{{ route('main.settings.comittee.delete') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">
                        Delete Committee
                    </h5>
                </div>
                <div class="modal-body">
                    <p id="textBanModal"></p>
                    <input name="id" type="text" id="deleteModalId" hidden>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closeDeleteModal"
                        data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </form>
    </div>
</div>

@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('.table').DataTable();
        });

        // add modal
        $(".addButton").click(function() {
            $('#addModal').modal('show');
        });

        $(".closeAddModal").click(function() {
            $('#addModal').modal('hide');
        });

        // edit modal
        $(".editButton").click(function() {
            $('#editModal').modal('show');

            var item = $(this).data('item');

            $('#editModalId').val(item.id);
            $('#editModalName').val(item.name);
            $('#editModalTitle').val(item.title);
        });

        $(".closeEditModal").click(function() {
            $('#editModal').modal('hide');
        });

        // delete modal
        $(".deleteButton").click(function() {
            $('#deleteModal').modal('show');

            var item = $(this).data('item');

            $('#deleteModalId').val(item.id);
            $('#textBanModal').text('Are you sure you want to delete committee ' + item.name +
                '?');
        });

        $(".closeDeleteModal").click(function() {
            $('#deleteModal').modal('hide');
        });
    </script>
@stop
