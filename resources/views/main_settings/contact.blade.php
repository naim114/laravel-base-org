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
                <h5>Address</h5>
                <input type="text" name="address" class="form-control mt-3 mb-3" placeholder="Enter Address" value="">

                <h5>Email</h5>
                <input type="text" name="email" class="form-control mt-3 mb-3" placeholder="Enter Email"
                    value="">

                <h5>Phone No.</h5>
                <input type="text" name="phone" class="form-control mt-3 mb-3" placeholder="Enter Phone Number"
                    value="">

                <h5>Twitter</h5>
                <input type="text" name="twitter" class="form-control mt-3 mb-3" placeholder="Enter Twitter Username"
                    value="">

                <h5>Facebook</h5>
                <input type="text" name="facebook" class="form-control mt-3 mb-3" placeholder="Enter Facebook Username"
                    value="">

                <h5>Instagram</h5>
                <input type="text" name="instagram" class="form-control mt-3 mb-3" placeholder="Enter Instagram Username"
                    value="">

                <h5>LinkedIn</h5>
                <input type="text" name="linkedin" class="form-control mt-3 mb-3" placeholder="Enter LinkedIn Username"
                    value="">

                <div class="d-flex flex-row-reverse mt-3">
                    <button type="submit" class="btn btn-primary float-right">
                        Save Changes
                    </button>
                </div>
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
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Title #1</td>
                            <td>www.google.com</td>
                            <td>
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fas fa-ellipsis-h fa-fw"></i></a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
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
        </div>
    </div>
@stop
