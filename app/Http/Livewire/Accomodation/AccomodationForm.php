<?php

namespace App\Http\Livewire\Accomodation;

use Livewire\Component;
use App\Models\Accomodation;    

class AccomodationForm extends Component
{
    public $accomodationId, $accomodation;
    public $action = '';  //flash
    public $message = '';  //flash

    protected $listeners = [
        'accomodationId',
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
        return view('livewire.accomodation.accomodation-form');
    }


    //edit
    public function accomodationId($accomodationId)
    {
        $this->accomodationId = $accomodationId;
        // dd($this->discountId);
        $accomodations = Accomodation::findOrFail($accomodationId)->first();
        $this->accomodation = $accomodations->accomodation;
    }

    //store
    public function store()
    {

        $action = '';

        $data = $this->validate([
            'accomodation' => 'required',
        ]);
        if ($this->accomodationId) {
            Accomodation::whereId($this->accomodationId)->first()->update($data);
            $action = 'edit';
            $message = 'Accomodation Successfully Updated';
        } else {
            Accomodation::create($data);
            $action = 'store';
            $message = 'Accomodation Successfully Updated';
           
        }
        $this->emit('flashAction', $action, $message);
        $this->resetInputFields();
        $this->emit('closeAccomodationModal');
        $this->emit('refreshParentAccomodation');
        $this->emit('refreshTable');
    }
}
