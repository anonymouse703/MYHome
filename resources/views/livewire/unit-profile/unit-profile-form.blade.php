<div>
    <div class="modal-content">
        <form wire:submit.prevent="store" enctype="multipart/form-data">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Unit Profile</h4>
                <a type="button" class="close" data-bs-dismiss="modal">&times;</a>
            </div>

            <!-- Modal body -->
            <div class=" modal-body">
                <div class="row mb-3">
                    <label for="client_type_id" class="col-sm-2 col-form-label">Client Type</label>
                    <div class="col-sm-10">
                        <select wire:click="changeClient($event.target.value)" wire:model="client_type_id" class="form-select">
                            <option selected="">Choose...</option>
                            <option value=""></option>
                        </select>
                        @if ($errors->has('client_type_id'))
                        <p style="color:red">{{ $errors->first('client_type_id') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="last_name" class="form-control">
                        @if ($errors->has('last_name'))
                        <p style="color:red">{{ $errors->first('last_name') }}</p>
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