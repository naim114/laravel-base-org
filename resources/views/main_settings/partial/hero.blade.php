<h4 class="mb-4">Hero</h4>
<form method="POST" action="{{ route('main.settings.home.update') }}">
    @csrf
    <h5>Title</h5>
    <input type="text" name="title" class="form-control mt-3 mb-3" placeholder="Enter Title"
        value="{{ $hero_title }}">

    <h5>Subtitle</h5>
    <input type="text" name="subtitle" class="form-control mt-3 mb-3" placeholder="Enter Subtitle"
        value="{{ $hero_subtitle }}">

    <h5>Youtube URL</h5>
    <input type="url" name="vid" class="form-control mt-3 mb-3" placeholder="Enter Video Link"
        value="{{ $hero_vid }}">
    <div class="d-flex flex-row-reverse mt-3">
        <button type="submit" class="btn btn-primary float-right">
            Save Changes
        </button>
    </div>
</form>
<hr>
<form method="POST" enctype="multipart/form-data" action="{{ route('main.settings.home.bg') }}">
    @csrf
    <h5>Hero Background Wallpaper</h5>
    <div class="text-center">
        <img id="previewHeroBg" class="img-thumbnail mt-3 mb-3" src="{{ asset($hero_bg) }}" style="height: 200px">
        <button type="button" id="changeHeroBgButton" class="btn btn-secondary btn-block mt-3 w-100">
            <i class="fa fa-camera pr-2 pl-2"></i>
            Change Background
        </button>

        <p id="guideMsgHeroBg" class="text-secondary hide">
            * Upload image and update wallpaper.
        </p>

        <input type="file" id="fileInputHeroBg" name="wallpaper" class="fileHeroBg hide" accept="image/*" required>
        <input type="text" class="form-control hide" disabled placeholder="Upload File" id="fileHeroBg">
        <button type="button" id="inputFileButtonHeroBg"
            class="browseHeroBg btn btn-secondary btn-block mt-3 w-100 hide">
            <i class="fa fa-upload pr-2 pl-2"></i>
            Upload Image
        </button>
    </div>
    <button type="submit" class="btn btn-primary btn-block mt-3 mb-5 w-100">
        Update Background
    </button>
</form>
