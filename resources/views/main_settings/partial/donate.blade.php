<h4 class="mb-4">Donate</h4>
<form method="POST" action="{{ route('main.settings.donate.update') }}">
    @csrf
    <h5>Title</h5>
    <input type="text" name="title" class="form-control mt-3 mb-3" placeholder="Enter Title"
        value="{{ $donate_title }}">

    <h5>Subtitle</h5>
    <input type="text" name="subtitle" class="form-control mt-3 mb-3" placeholder="Enter Subtitle"
        value="{{ $donate_subtitle }}">

    <div class="d-flex flex-row-reverse mt-3">
        <button type="submit" class="btn btn-primary float-right">
            Save Changes
        </button>
    </div>
</form>
