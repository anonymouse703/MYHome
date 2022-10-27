<div>
    <div class="modal-content">
        <form wire:submit.prevent="store" enctype="multipart/form-data">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Location</h4>
                <a type="button" class="close" data-bs-dismiss="modal">&times;</a>
            </div>

            <!-- Modal body -->
            <div class=" modal-body">
                <div class="row mb-3">
                    <label for="street" class="col-sm-2 col-form-label">Street</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="street" class="form-control">
                        @if ($errors->has('street'))
                        <p style="color:red">{{ $errors->first('street') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="brgy" class="col-sm-2 col-form-label">Barangay</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="brgy" class="form-control">
                        @if ($errors->has('brgy'))
                        <p style="color:red">{{ $errors->first('brgy') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="city" class="col-sm-2 col-form-label">City</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="city" class="form-control">
                        @if ($errors->has('city'))
                        <p style="color:red">{{ $errors->first('city') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="province" class="col-sm-2 col-form-label">Province</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="province" class="form-control">
                        @if ($errors->has('province'))
                        <p style="color:red">{{ $errors->first('province') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="country" class="col-sm-2 col-form-label">Country</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="country" class="form-control">
                        @if ($errors->has('country'))
                        <p style="color:red">{{ $errors->first('country') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group">
                        <label>Sketch</label>
                        <input type="file" wire:model.defer="sketch" name="sketch" class="form-control" accept="image/*">
                        @if($errors->has('sketch'))
                        <p style="color:red">{{$errors->first('sketch')}}</p>
                        @endif
                        @if ($sketch)
                        <div class="d-flex">
                            <span class="text-success">Photo Preview:</span>
                            <img src="{{ $isUploaded ? $sketch->temporaryUrl() : url('storage/images/'. $sketch) }}" width="200" height="250">
                        </div>
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