@extends('layouts.dashboard-master')

@section('page-title', trans('app.news'))

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

        <a href="{{ route('main.settings.article.add') }}" class="btn btn-primary mb-2">
            + Add Article
        </a>
        <table id="rolesTable" class="table table-striped table-hover table-responsive">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Author</th>
                    <th scope="col">Published at</th>
                    <th scope="col">Updated at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->description ?? 'None' }}</td>
                        <td><a
                                href="{{ route('users.view', ['action' => 'profile', 'id' => $article->author]) }}">{{ get_user_detail($article->author, 'full_name') }}</a>
                        </td>
                        <td>{{ $article->created_at ?? 'None' }}</td>
                        <td>{{ $article->updated_at ?? 'None' }}</td>
                        <td>
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fas fa-ellipsis-h fa-fw"></i></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a target="_blank" href="{{ route('main.article', ['id' => $article->id]) }}"
                                        class="dropdown-item">
                                        View Article
                                    </a>
                                </li>
                                <li>
                                    <button data-item="" class="dropdown-item">
                                        Edit Article
                                    </button>
                                </li>
                                <li>
                                    <button data-item="" class="dropdown-item text-danger deleteButton">
                                        Delete Article
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

@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('.table').DataTable();
        });

        // delete modal
        $(".deleteButton").click(function() {
            $('#deleteModal').modal('show');

            var item = $(this).data('item');

            $('#deleteModalId').val(item.id);
            $('#textBanModal').text('Are you sure you want to delete article ' + item.title +
                ' ?');
        });

        $(".closeDeleteModal").click(function() {
            $('#deleteModal').modal('hide');
        });
    </script>
@stop
