<div>
    <div class="content__boxed">
        <div class="content__wrap">

            <!-- Table with toolbar -->
            <div class="card">
                <div class="card-header mb-3">
                    <h5 class="card-title mb-3">List of Locations</h5>
                    <livewire:flash-message.flash-message />
                    <div class="row">

                        <!-- Left toolbar -->
                        <div class="col-md-6 d-flex gap-1 align-items-center mb-3">
                            <button wire:click="createLocation" class="btn btn-primary hstack gap-2 align-self-center">
                                <i class="demo-psi-add fs-5"></i>
                                <span class="vr"></span>
                                Add New
                            </button>
                        </div>
                        <!-- END : Left toolbar -->

                    </div>
                </div>

                <div class="card-body">
                    <livewire:location-table />
                </div>
            </div>
            <!-- END : Table with toolbar -->

        </div>
    </div>

    <!-- The Modal -->
    <div wire.ignore.self class="modal fade" id="locationModal" tabindex="-1" role="dialog" aria-labelledby="locationModal" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog" role="document">
            <livewire:location.location-form />
        </div>
    </div>
</div>

@section('custom_script')
@include('layouts.scripts.location-scripts')
@endsection