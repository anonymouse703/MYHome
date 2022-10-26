<?php

namespace App\Http\Livewire\Accomodation;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Accomodation;

class AccomodationList extends Component
{
    use WithPagination;

    public $accomodationId;

    protected $listeners = [
        'refreshParentStatus' => '$refresh',
        'deleteAccomodation',
        'editAccomodation',
        'deleteConfirmAccomodation'
    ];

    public function showEmitedFlashMessage($action)
    {
        // dd($action);

        $this->action = $action;
        $this->emit('flashAction', $this->action);
    }

    public function render()
    {
        return view('livewire.accomodation.accomodation-list');
    }

    public function createAccomodation()
    {
        $this->emit('resetInputFields');
        $this->emit('openAccomodationModal');
    }

    public function editAccomodation($accomodationId)
    {
        $this->accomodationId = $accomodationId;
        $this->emit('accomodationId', $this->accomodationId);
        $this->emit('openAccomodationModal');
    }

    public function deleteConfirmAccomodation($accomodationId)
    {
        // dd($accomodationId);
        $this->dispatchBrowserEvent('confirmAccomodationDelete', [
            'title' => 'Are you sure?',
            'text' => "You won't be able to revert this!",
            'icon' => 'warning',
            'showCancelButton' => true,
            'confirmButtonColor' => '#3085d6',
            'cancelButtonColor' => '#d33',
            'confirmButtonText' => 'Yes, delete it!',
            'id' => $accomodationId
        ]);
    }

    public function deleteAccomodation($accomodationId)
    {
        // dd($discountId);
        Accomodation::destroy($accomodationId);
        $this->emit('refreshTable');
        $this->resetPage();
    }
}
