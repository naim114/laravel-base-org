<h4 class="mb-4">Quotes (Min 1)</h4>
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
                <th scope="col">Name</th>
                <th scope="col">Title/Role/Position</th>
                <th scope="col">Quotes</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($quotes as $quote)
                <tr>
                    <td>{{ $quote->name }}</td>
                    <td>{{ $quote->title }}</td>
                    <td>{{ $quote->quote }}</td>
                    <td>
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="fas fa-ellipsis-h fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <button data-item="{{ $quote }}" class="dropdown-item text-danger deleteButton">
                                    Delete Quote
                                </button>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <form method="POST" enctype="multipart/form-data" action="{{ route('main.settings.quote.bg') }}">
        @csrf
        <h5>Quote Background Wallpaper</h5>
        <div class="text-center">
            <img id="previewQuoteBg" class="img-thumbnail mt-3 mb-3" src="{{ asset($quote_bg) }}" style="height: 200px">
            <button type="button" id="changeQuoteBgButton" class="btn btn-secondary btn-block mt-3 w-100">
                <i class="fa fa-camera pr-2 pl-2"></i>
                Change Background
            </button>

            <p id="guideMsgQuoteBg" class="text-secondary hide">
                * Upload image and update wallpaper.
            </p>

            <input type="file" id="fileInputQuoteBg" name="wallpaper" class="fileQuoteBg hide" accept="image/*"
                required>
            <input type="text" class="form-control hide" disabled placeholder="Upload File" id="fileQuoteBg">
            <button type="button" id="inputFileButtonQuoteBg"
                class="browseQuoteBg btn btn-secondary btn-block mt-3 w-100 hide">
                <i class="fa fa-upload pr-2 pl-2"></i>
                Upload Image
            </button>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-3 mb-5 w-100">
            Update Background
        </button>
    </form>
</div>

{{-- Modal --}}
{{-- Add Modal --}}
@include('main_settings.partial.quote_add')

{{-- Delete Modal --}}
@include('main_settings.partial.quote_delete')
