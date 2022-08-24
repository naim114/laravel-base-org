<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" action="{{ route('main.settings.quote.add') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">
                        Add Quote
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Enter name" required>
                    </div>
                    <div class="form-group mb-2">
                        <label>Title/Role/Position</label>
                        <input name="title" type="text" class="form-control"
                            placeholder="Enter title/role/position" required>
                    </div>
                    <div class="form-group mb-2">
                        <label>Quote</label>
                        <input name="quote" type="text" class="form-control" placeholder="Enter quotes" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closeAddModal" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
