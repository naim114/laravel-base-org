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
                <tr>
                    <td>Title #1</td>
                    <td>
                        <a href="#"><i class="fa fa-download fa-fw"></i></a>
                    </td>
                    <td>Aug 16, 2022</td>
                    <td>
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="fas fa-ellipsis-h fa-fw"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <button data-item="" class="dropdown-item editButton">
                                    Edit Form
                                </button>
                            </li>
                            <li>
                                <button data-item="" class="dropdown-item text-danger deleteButton">
                                    Delete Form
                                </button>
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
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

        // edit modal
        $(".editButton").click(function() {
            $('#editModal').modal('show');

            var role = $(this).data('role');

            $('#editModalName').val(role.name);
            $('#editModalId').val(role.id);
            $('#editModalDisplayName').val(role.display_name);
            $('#editModalDescription').val(role.description);
        });

        $(".closeEditModal").click(function() {
            $('#editModal').modal('hide');
        });

        // delete modal
        $(".deleteButton").click(function() {
            $('#deleteModal').modal('show');

            var role = $(this).data('role');

            $('#deleteModalId').val(role.id);
            $('#textBanModal').text('Are you sure you want to delete role ' + role.name +
                ' ?');
        });

        $(".closeDeleteModal").click(function() {
            $('#deleteModal').modal('hide');
        });
    </script>
@stop
