@extends('layouts.dashboard-master')

@section('page-title', trans('app.join.forms'))

@section('user-name', Auth::user()->username)

@section('breadcrumb')
    <a href="{{ route('main.settings.home') }}">Main Pages</a> /
    <a href="{{ route('main.settings.form') }}">Join Us</a> /
    <a>{{ trans('app.join.forms') }}</a>
@stop

@section('content')
    <div class="container">
        @error('avatar')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror

        <button class="btn btn-primary mb-2 addButton">
            + Add Forms
        </button>
        <table id="rolesTable" class="table table-striped table-hover table-responsive">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">View File</th>
                    <th scope="col">Published at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($forms as $form)
                    <tr>
                        <td>{{ $form->name }}</td>
                        <td>
                            <a target="_blank" href="{{ secure_asset($form->path) }}"><i
                                    class="fa fa-download fa-fw"></i></a>
                        </td>
                        <td>{{ date_format($form->created_at, 'd/m/Y') }}</td>
                        <td>
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fas fa-ellipsis-h fa-fw"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <button data-item="{{ $form }}" class="dropdown-item text-danger deleteButton">
                                        Delete Form
                                    </button>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Modal --}}
    {{-- Add Modal --}}
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="POST" enctype="multipart/form-data" action="{{ route('main.settings.form.add') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">
                            Add Form
                        </h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-2">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter name" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>File</label>
                            <input name="file" type="file" class="form-control" placeholder="Upload file" required>
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

    {{-- Delete Modal --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="POST" action="{{ route('main.settings.form.delete') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">
                            Delete Form
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
@stop


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

        // delete modal
        $(".deleteButton").click(function() {
            $('#deleteModal').modal('show');

            var form = $(this).data('item');

            $('#deleteModalId').val(form.id);
            $('#textBanModal').text('Are you sure you want to delete form "' + form.name +
                '"" ?');
        });

        $(".closeDeleteModal").click(function() {
            $('#deleteModal').modal('hide');
        });
    </script>
@stop
