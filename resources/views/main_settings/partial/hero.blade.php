<h4 class="mb-4">Hero</h4>
<h5>Title</h5>
<input type="text" name="title" class="form-control mt-3 mb-3" placeholder="Enter Title" value="">

<h5>Subtitle</h5>
<input type="text" name="subtitle" class="form-control mt-3 mb-3" placeholder="Enter Subtitle" value="">

<h5>Video Link</h5>
<input type="text" name="video" class="form-control mt-3 mb-3" placeholder="Enter Video Link" value="">
<div class="d-flex flex-row-reverse mt-3">
    <button type="submit" class="btn btn-primary float-right">
        Save Changes
    </button>
</div>
<hr>
<form method="POST" enctype="multipart/form-data" action="">
    @csrf
    <h5>Background Wallpaper</h5>
    <div class="text-center">
        <img id="previewWallpaper" class="img-thumbnail mt-3 mb-3" src="{{ asset(trans('app.wallpaper.auth')) }}"
            style="height: 200px">
        <button type="button" id="changeWallpaperButton" class="btn btn-secondary btn-block mt-3 w-100">
            <i class="fa fa-camera pr-2 pl-2"></i>
            Change Wallpaper
        </button>

        <p id="guideMsgWallpaper" class="text-secondary hide">
            * Upload image and update wallpaper.
        </p>

        <input type="file" id="fileInputWallpaper" name="wallpaper" class="fileWallpaper hide" accept="image/*"
            required>
        <input type="text" class="form-control hide" disabled placeholder="Upload File" id="fileWallpaper">
        <button type="button" id="inputFileButtonWallpaper"
            class="browseWallpaper btn btn-secondary btn-block mt-3 w-100 hide">
            <i class="fa fa-upload pr-2 pl-2"></i>
            Upload Image
        </button>
    </div>
    <button type="submit" class="btn btn-primary btn-block mt-3 mb-5 w-100">
        Update Wallpaper
    </button>
</form>
