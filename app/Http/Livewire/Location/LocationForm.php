<?php

namespace App\Http\Livewire\Location;

use Livewire\Component;
use App\Models\Location;

class LocationForm extends Component
{
    public $locationId, $street, $brgy, $city, $province, $country, $sketch;
    public $action = '';  //flash
    public $message = '';  //flash
    public $isUploaded = false;
    public $change_images = false;

    protected $listeners = [
        'locationId',
        'resetInputFields'
    ];

    public function resetInputFields()
    {
        $this->reset();
        $this->resetValidation();
        $this->resetErrorBag();
    }

    public function updatedItemImage()
    {
        if ($this->locationId) {
            $this->change_images = true;
        }

        $this->isUploaded = true;
    }

    public function render()
    {
        return view('livewire.location.location-form');
    }

    //edit
    public function locationId($locationId)
    {
        $this->locationId = $locationId;
        // dd($this->discountId);
        $locations = Location::findOrFail($locationId)->first();
        $this->street = $locations->street;
        $this->brgy = $locations->brgy;
        $this->city = $locations->city;
        $this->province = $locations->province;
        $this->country = $locations->country;
        $this->sketch = $locations->sketch;
    }

    //store
    public function store()
    {

        $action = '';

        if (!$this->locationId || $this->change_images) {
            if (!empty($this->sketch)) {
                if ($this->isUploaded) {
                    $data['sketch'] = $this->uploadImage();
                }
            }

            $data = $this->validate([
                'street' => 'required',
                'brgy' => 'required',
                'city' => 'required',
                'province' => 'required',
                'country' => 'required',
                'sketch' => 'nullable|image|max:2000',
            ]);

        } else {
            $data['sketch'] = $this->sketch;

            $data = $this->validate([
                'street' => 'required',
                'brgy' => 'required',
                'city' => 'required',
                'province' => 'required',
                'country' => 'required',
                'sketch' => '',
            ]);
        }

        if ($this->locationId) {
            Location::whereId($this->locationId)->first()->update($data);
            $action = 'edit';
            $message = 'Location Successfully Updated';
            // dd($action);
            $this->emit('flashAction', $action, $message);
        } else {
            Location::create($data);
            $action = 'store';
            $message = 'Location Successfully Updated';
            // dd($action);
            $this->emit('flashAction', $action, $message);
        }
        $this->resetInputFields();
        $this->emit('closeLocationModal');
        $this->emit('refreshParentLocation');
        $this->emit('refreshTable');
    }

    public function uploadImage()
    {
        $sketch = 'sketch.' . time() . $this->sketch->getClientOriginalName();

        $this->sketch->storeAs('public/images', $sketch);

        // $data['sketch'] = $sketch;
        return $sketch;
    }
}
