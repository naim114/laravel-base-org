@extends('layouts.dashboard-master')

@section('page-title', trans('app.join.donate'))

@section('user-name', Auth::user()->username)

@section('breadcrumb')
    <a href="{{ route('main.settings.home') }}">Main Pages</a> /
    <a href="{{ route('main.settings.form') }}">Join Us</a> /
    <a>{{ trans('app.join.donate') }}</a>
@stop

@section('content')
    <div class="container">
        @error('avatar')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-4 mb-3">
                        <div class="form-group">
                            <p class="fw-bold">Total Overall:</p>
                            <h4>RM200.00</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 mb-3">
                        <div class="form-group">
                            <p class="fw-bold">Total This Year:</p>
                            <h4>RM200.00</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4 mb-3">
                        <div class="form-group">
                            <p class="fw-bold">Total This Month:</p>
                            <h4>RM200.00</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table id="rolesTable" class="table table-striped table-hover table-responsive">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Amount (RM)</th>
                    <th scope="col">Created at</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ASD2323</td>
                    <td>11.00</td>
                    <td>Aug 16, 2022</td>
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
    </script>
@stop
