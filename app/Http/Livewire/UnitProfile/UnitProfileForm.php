<?php

namespace App\Http\Livewire\UnitProfile;

use Livewire\Component;
use App\Models\RealEstateProfile; 

class UnitProfileForm extends Component
{
    public $profileId;
    public $action = '';  //flash
    public $message = '';  //flash
    public $client_type = '';

    protected $listeners = [
        'profileId',
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
        return view('livewire.unit-profile.unit-profile-form');
    }

    public function profileId($profileId)
    {
        $this->profileId = $profileId;
        // dd($this->discountId);
        $clients = RealEstateProfile::findOrFail($profileId)->first();
        $this->client_type_id = $clients->client_type_id;
        $this->last_name = $clients->last_name;
        $this->first_name = $clients->first_name;
        $this->middle_name = $clients->middle_name;
        $this->real_estate_name = $clients->real_estate_name;
        $this->address = $clients->address;
        $this->contact_no = $clients->contact_no;
        $this->email_address = $clients->email_address;
    }

    //store
    public function store()
    {

        $action = '';

        $data = $this->validate([
            'client_type_id' => 'required',
            'last_name' => 'nullable',
            'first_name' => 'nullable',
            'middle_name' => 'nullable',
            'real_estate_name' => 'nullable',
            'address' => 'required',
            'email' => 'required|email',
            'contact_no' => 'required',
        ]);
        if ($this->profileId) {
            RealEstateProfile::whereId($this->profileId)->first()->update($data);
            $action = 'edit';
            $message = 'Real Estate Successfully Updated';
        } else {
            RealEstateProfile::create($data);
            $action = 'store';
            $message = 'Real Estate Successfully Updated';
        }
        $this->emit('flashAction', $action, $message);
        $this->resetInputFields();
        $this->emit('closeRealEstateModal');
        $this->emit('refreshParentRealEstate');
        $this->emit('refreshTable');
    }
}
