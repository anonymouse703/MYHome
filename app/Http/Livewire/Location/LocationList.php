<?php

namespace App\Http\Livewire\Location;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Location;

class LocationList extends Component
{
    use WithPagination;

    public $locationId;

    protected $listeners = [
        'refreshParentLocation' => '$refresh',
        'deleteLocation',
        'editLocation',
        'deleteConfirmLocation'
    ];

    public function render()
    {
        return view('livewire.location.location-list');
    }

    public function createLocation()
    {
        $this->emit('resetInputFields');
        $this->emit('openLocationModal');
    }

    public function editLocation($locationId)
    {
        $this->locationId = $locationId;
        $this->emit('locationId', $this->locationId);
        $this->emit('openLocationModal');
    }

    public function deleteConfirmLocation($locationId)
    {
        // dd($locationId);
        $this->dispatchBrowserEvent('confirmLocationDelete', [
            'title' => 'Are you sure?',
            'text' => "You won't be able to revert this!",
            'icon' => 'warning',
            'showCancelButton' => true,
            'confirmButtonColor' => '#3085d6',
            'cancelButtonColor' => '#d33',
            'confirmButtonText' => 'Yes, delete it!',
            'id' => $locationId
        ]);
    }

    public function deleteLocation($locationId)
    {
        // dd($discountId);
        Location::destroy($locationId);
        $this->emit('refreshTable');
        $this->resetPage();
    }
}
