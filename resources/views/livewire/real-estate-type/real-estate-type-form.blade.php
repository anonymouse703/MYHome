<div>
    <div class="modal-content">
        <form wire:submit.prevent="store" enctype="multipart/form-data">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Real Estate Type</h4>
                <a type="button" class="close" data-bs-dismiss="modal">&times;</a>
            </div>

            <!-- Modal body -->
            <div class=" modal-body">
                <div class="row mb-3">
                    <label for="real_estate_type" class="col-sm-2 col-form-label">Real Estate Type</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="real_estate_type" class="form-control">
                        @if ($errors->has('real_estate_type'))
                        <p style="color:red">{{ $errors->first('real_estate_type') }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary  pull-right">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>