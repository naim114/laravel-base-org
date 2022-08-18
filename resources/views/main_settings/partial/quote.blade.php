<h4 class="mb-4">Quotes</h4>
<div class="container">
    @error('name')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
    @enderror
    <button class="btn btn-primary mb-2 addButton">
        + Add Quote
    </button>
    <table id="quoteTable" class="table table-striped table-hover table-responsive">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Title/Role/Position</th>
                <th scope="col">Quotes</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Saul Goodman</td>
                <td>CEO</td>
                <td>Its all good man</td>
                <td>
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="fas fa-ellipsis-h fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <button data-item="" class="dropdown-item text-danger deleteButton">
                                Delete Quote
                            </button>
                        </li>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</div>

{{-- Modal --}}
{{-- Add Modal --}}
@include('main_settings.partial.quote_add')

{{-- Delete Modal --}}
@include('main_settings.partial.quote_delete')
