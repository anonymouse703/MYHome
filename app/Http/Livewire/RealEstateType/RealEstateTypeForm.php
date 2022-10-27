<?php

namespace App\Http\Livewire\RealEstateType;

use Livewire\Component;
use App\Models\RealEstateType;

class RealEstateTypeForm extends Component
{
    public $realEstateTypeId, $real_estate_type;
    public $action = '';  //flash
    public $message = '';  //flash

    protected $listeners = [
        'realEstateTypeId',
        'resetInputFields'
    ];

    public function resetInputFields()
    {
        $this->reset();
        $this->resetValidation();
        $this->resetErrorBag();
    }

    public function render()
    {
        return view('livewire.real-estate-type.real-estate-type-form');
    }

    //edit
    public function realEstateTypeId($realEstateTypeId)
    {
        $this->realEstateTypeId = $realEstateTypeId;
        // dd($this->discountId);
        $realEstateTypes = RealEstateType::findOrFail($realEstateTypeId)->first();
        $this->real_estate_type = $realEstateTypes->real_estate_type;
    }

    //store
    public function store()
    {

        $action = '';

        $data = $this->validate([
            'real_estate_type' => 'required',
        ]);
        if ($this->realEstateTypeId) {
            RealEstateType::whereId($this->realEstateTypeId)->first()->update($data);
            $action = 'edit';
            $message = 'Real Estate Type Successfully Updated';
            // dd($action);
            $this->emit('flashAction', $action, $message);
        } else {
            RealEstateType::create($data);
            $action = 'store';
            $message = 'Real Estate Type Successfully Updated';
            // dd($action);
            $this->emit('flashAction', $action, $message);
        }
        $this->resetInputFields();
        $this->emit('closeRealEstateTypeModal');
        $this->emit('refreshParentRealEstateType');
        $this->emit('refreshTable');
    }
}
