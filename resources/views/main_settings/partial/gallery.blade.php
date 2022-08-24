<h4 class="mb-4">Gallery</h4>
<form method="POST" action="{{ route('main.settings.gallery.update') }}">
    @csrf
    <h5>Title</h5>
    <input type="text" name="title" class="form-control mt-3 mb-3" placeholder="Enter Title"
        value="{{ $gallery_title }}">

    <h5>Subtitle</h5>
    <input type="text" name="subtitle" class="form-control mt-3 mb-3" placeholder="Enter Subtitle"
        value="{{ $gallery_subtitle }}">

    <div class="d-flex flex-row-reverse mt-3">
        <button type="submit" class="btn btn-primary float-right">
            Save Changes
        </button>
    </div>
</form>

<hr>

<form method="POST" enctype="multipart/form-data" action="{{ route('main.settings.gallery.images') }}">
    @csrf
    <h5>Images (Min 1, Max 5)</h5>
    <input type="file" name="images[]" class="form-control mt-3 mb-3" accept="image/*" multiple required>

    <div class="d-flex flex-row-reverse mt-3">
        <button type="submit" class="btn btn-primary float-right">
            Save Changes
        </button>
    </div>
</form>
