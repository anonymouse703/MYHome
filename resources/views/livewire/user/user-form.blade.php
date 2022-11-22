<div>
    <div class="modal-content">
        <form wire:submit.prevent="store" enctype="multipart/form-data">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add User</h4>
                <a type="button" class="close" data-bs-dismiss="modal">&times;</a>
            </div>

            <!-- Modal body -->
            <div class=" modal-body">
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
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" wire:model="email" class="form-control">
                        @if ($errors->has('email'))
                        <p style="color:red">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" wire:model="username" class="form-control">
                        @if ($errors->has('username'))
                        <p style="color:red">{{ $errors->first('username') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" wire:model="password" class="form-control">
                        @if ($errors->has('password'))
                        <p style="color:red">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" wire:model="password" class="form-control">
                        @if ($errors->has('password'))
                        <p style="color:red">{{ $errors->first('password') }}</p>
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