<div>
    <div class="modal-content">
        <form wire:submit.prevent="store" enctype="multipart/form-data">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Client</h4>
                <a type="button" class="close" data-bs-dismiss="modal">&times;</a>
            </div>

            <!-- Modal body -->
            <div class=" modal-body">
                <div class="row mb-3">
                    <label for="client_type_id" class="col-sm-2 col-form-label">Client Type</label>
                    <div class="col-sm-10">
                        <select wire:click="changeClient($event.target.value)" wire:model="client_type_id" class="form-select">
                            <option selected="">Choose...</option>
                            @foreach($client_types as $data)
                            <option value="{{$data->id}}">{{$data->client_type}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('client_type_id'))
                        <p style="color:red">{{ $errors->first('client_type_id') }}</p>
                        @endif
                    </div>
                </div>
                @if($client_type == 1)
                <div class="row mb-3">
                    <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="last_name" class="form-control">
                        @if ($errors->has('last_name'))
                        <p style="color:red">{{ $errors->first('last_name') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="first_name" class="form-control">
                        @if ($errors->has('first_name'))
                        <p style="color:red">{{ $errors->first('first_name') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="middle_name" class="col-sm-2 col-form-label">Middle Name</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="middle_name" class="form-control">
                        @if ($errors->has('middle_name'))
                        <p style="color:red">{{ $errors->first('middle_name') }}</p>
                        @endif
                    </div>
                </div>
                @elseIf($client_type == 2)
                <div class="row mb-3">
                    <label for="real_estate_name" class="col-sm-2 col-form-label">Real Estate Name</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="real_estate_name" class="form-control">
                        @if ($errors->has('real_estate_name'))
                        <p style="color:red">{{ $errors->first('real_estate_name') }}</p>
                        @endif
                    </div>
                </div>
                @else
                <h5>Please Select Client Type...</h5>
                @endif
                @if($client_type == 1 || $client_type == 2)
                <div class="row mb-3">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="address" class="form-control">
                        @if ($errors->has('address'))
                        <p style="color:red">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="contact_no" class="col-sm-2 col-form-label">Contact No</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="contact_no" class="form-control">
                        @if ($errors->has('contact_no'))
                        <p style="color:red">{{ $errors->first('contact_no') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="email" class="form-control">
                        @if ($errors->has('email'))
                        <p style="color:red">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>
                @endif
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