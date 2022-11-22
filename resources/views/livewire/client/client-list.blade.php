<div>
    <div class="content__boxed">
        <div class="content__wrap">

            <!-- Table with toolbar -->
            <div class="card">
                <div class="card-header mb-3">
                    <h5 class="card-title mb-3">List of Clients</h5>
                    <livewire:flash-message.flash-message />
                    <div class="row">
                        <!-- Left toolbar -->
                        <div class="col-md-9 d-flex gap-1 align-items-center mb-3">
                            <button wire:click="createClient" class="btn btn-primary hstack gap-2 align-self-center">
                                <i class="demo-psi-add fs-5"></i>
                                <span class="vr"></span>
                                Add Client
                            </button>
                        </div>
                        <!-- END : Left toolbar -->

                        <div class="w-25 pull-right">
                            <input type="search" placeholder="Search name here..." wire:model.debounce.500ms="search" name="search" class="form-control">
                        </div>

                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">

                            <thead>
                                <tr>
                                    <th class="text-left">Name</th>
                                    <th class="text-left">Address</th>
                                    <th class="text-left">Contact No.</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $data)
                                <tr>
                                    <td>{{$data->last_name ?? ''}},{{$data->first_name ?? ''}},{{$data->middle_name ?? ''}} || {{$data->client_name ?? ''}}</td>
                                    <td>{{$data->address ?? ''}}</td>
                                    <td>{{$data->contact_no ?? ''}}</td>
                                    <td>{{$data->email ?? ''}}</td>
                                    <td class="text-center align-middle">
                                        <div class="btn-group">
                                            <button wire:click="editClient({{ $data->id }})" class="btn btn-info delete-header m-1 btn-sm" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                            <button wire:click="deleteClient({{ $data->id }})" class="btn btn-danger delete-header m-1 btn-sm" title="Delete"><i class="fa fa-circle" aria-hidden="true"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END : Table with toolbar -->

        </div>
    </div>

    <!-- The Modal -->
    <div wire.ignore.self class="modal fade" id="clientModal" tabindex="-1" role="dialog" aria-labelledby="clientModal" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog" role="document">
            <livewire:client.client-form />
        </div>
    </div>
</div>
@section('custom_script')
@include('layouts.scripts.client-scripts')
@endsection