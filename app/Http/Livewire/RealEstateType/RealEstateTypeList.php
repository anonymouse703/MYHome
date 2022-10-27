<?php

namespace App\Http\Livewire\RealEstateType;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\RealEstateType;

class RealEstateTypeList extends Component
{
    use WithPagination;

    public $realEstateTypeId;

    protected $listeners = [
        'refreshParentRealEstateType' => '$refresh',
        'deleteRealEstateType',
        'editRealEstateType',
        'deleteConfirmRealEstateType'
    ];

    public function render()
    {
        return view('livewire.real-estate-type.real-estate-type-list');
    }

    public function createRealEstateType()
    {
        $this->emit('resetInputFields');
        $this->emit('openRealEstateTypeModal');
    }

    public function editRealEstateType($realEstateTypeId)
    {
        $this->realEstateTypeId = $realEstateTypeId;
        $this->emit('realEstateTypeId', $this->realEstateTypeId);
        $this->emit('openRealEstateTypeModal');
    }

    public function deleteConfirmRealEstateType($realEstateTypeId)
    {
        // dd($realEstateTypeId);
        $this->dispatchBrowserEvent('confirmRealEstateTypeDelete', [
            'title' => 'Are you sure?',
            'text' => "You won't be able to revert this!",
            'icon' => 'warning',
            'showCancelButton' => true,
            'confirmButtonColor' => '#3085d6',
            'cancelButtonColor' => '#d33',
            'confirmButtonText' => 'Yes, delete it!',
            'id' => $realEstateTypeId
        ]);
    }

    public function deleteRealEstateType($realEstateTypeId)
    {
        // dd($discountId);
        RealEstateType::destroy($realEstateTypeId);
        $this->emit('refreshTable');
        $this->resetPage();
    }

    
}
