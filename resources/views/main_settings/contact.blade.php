@extends('layouts.dashboard-master')

@section('page-title', trans('app.contact'))

@section('user-name', Auth::user()->username)

@section('breadcrumb')
    <a href="{{ route('main.settings.home') }}">Main Pages</a> /
    <a>{{ trans('app.contact') }}</a>
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
                <form method="POST" action="{{ route('main.settings.contact.update') }}">
                    @csrf
                    <h5>Address</h5>
                    <input type="text" name="address" class="form-control mt-3 mb-3" placeholder="Enter Address"
                        value="{{ $address }}">

                    <h5>Email</h5>
                    <input type="email" name="email" class="form-control mt-3 mb-3" placeholder="Enter Email"
                        value="{{ $email }}">

                    <h5>Phone No.</h5>
                    <input type="text" name="phone" class="form-control mt-3 mb-3" placeholder="Enter Phone Number"
                        value="{{ $phone }}">

                    <h5>Twitter</h5>
                    <input type="text" name="twitter" class="form-control mt-3 mb-3" placeholder="Enter Twitter Username"
                        value="{{ $twitter }}">

                    <h5>Facebook</h5>
                    <input type="text" name="facebook" class="form-control mt-3 mb-3"
                        placeholder="Enter Facebook Username" value="{{ $facebook }}">

                    <h5>Instagram</h5>
                    <input type="text" name="instagram" class="form-control mt-3 mb-3"
                        placeholder="Enter Instagram Username" value="{{ $instagram }}">

                    <h5>LinkedIn</h5>
                    <input type="text" name="linkedin" class="form-control mt-3 mb-3"
                        placeholder="Enter LinkedIn Username" value="{{ $linkedin }}">

                    <div class="d-flex flex-row-reverse mt-3">
                        <button type="submit" class="btn btn-primary float-right">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card p-4 mb-3">
            <div class="form-group">
                <h5>Useful Link</h5>
                <button class="btn btn-primary mb-2 addButton">
                    + Add Link
                </button>
                <table id="rolesTable" class="table table-striped table-hover table-responsive">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">URL</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($useful_links as $link)
                            <tr>
                                <td>{{ $link->display_name }}</td>
                                <td>{{ $link->url }}</td>
                                <td>{{ $link->created_at }}</td>
                                <td>
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fas fa-ellipsis-h fa-fw"></i></a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>
                                            <button data-item="{{ $link }}"
                                                class="dropdown-item text-danger deleteButton">
                                                Delete Link
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

    {{-- Modal --}}
    {{-- Add Modal --}}
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="POST" action="{{ route('main.settings.link.add') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">
                            Add Link
                        </h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-2">
                            <label>Name</label>
                            <input name="display_name" type="text" class="form-control" placeholder="Enter name"
                                required>
                        </div>
                        <div class="form-group mb-2">
                            <label>URL</label>
                            <input name="url" type="url" class="form-control" placeholder="Enter url" required>
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
            <form method="POST" action="{{ route('main.settings.link.delete') }}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">
                            Delete Link
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
    <script>
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

            var link = $(this).data('item');

            $('#deleteModalId').val(link.id);
            $('#textBanModal').text('Are you sure you want to delete this useful link "' + link.display_name +
                ' (' + link.url + ')"?');
        });

        $(".closeDeleteModal").click(function() {
            $('#deleteModal').modal('hide');
        });
    </script>
@endsection
