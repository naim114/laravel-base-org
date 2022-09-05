<form method="POST" action="{{ route('profile.update_profile') }}">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="full_name">Full Name</label>
                <input type="text" name="full_name" value="{{ $user->full_name }}" class="form-control"
                    placeholder="Enter Full Name">
            </div>
            <div class="form-group mb-3">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" value="{{ $user->phone }}" class="form-control"
                    placeholder="Enter Phone Number">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group mb-3">
                <label for="birthday">Date of Birth (MM-DD-YYYY)</label>
                <input type="date" id="bithdayInput" name="birthday" value="{{ $birthday }}" class="form-control"
                    min="1800-01-01" placeholder="Enter Date of Birth">
            </div>
            <div class="form-group mb-3">
                <label for="address">Address</label>
                <input type="text" name="address" value="{{ $user->address }}" class="form-control"
                    placeholder="Enter Address">
            </div>
        </div>
    </div>
    <div class="d-flex flex-row-reverse">
        <button type="submit" class="btn btn-primary float-right">
            Update Profile Details
        </button>
    </div>
</form>
