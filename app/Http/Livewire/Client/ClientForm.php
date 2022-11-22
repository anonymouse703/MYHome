<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\Client;
use App\Models\ClientType;  

class ClientForm extends Component
{
    public $clientId, $client_type_id, $last_name, $first_name, $middle_name, $real_estate_name, $address, $contact_no, $email;
    public $action = '';  //flash
    public $message = '';  //flash
    public $client_type = '';

    protected $listeners = [
        'clientId',
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
        return view('livewire.client.client-form',[
            'client_types' => ClientType::all()
        ]);

       
    }

    public function changeClient($value)
    {
        $this->client_type = $value;
    }


    //edit
    public function clientId($clientId)
    {
        $this->clientId = $clientId;
        // dd($this->discountId);
        $clients = Client::findOrFail($clientId)->first();
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
            'last_name' => 'nullable|text',
            'first_name' => 'nullable|text',
            'middle_name' => 'nullable|text',
            'address' => 'required',
            'email' => 'required|email',
            'contact_no' => 'required',
        ]);
        if ($this->clientId) {
            Client::whereId($this->clientId)->first()->update($data);
            $action = 'edit';
            $message = 'Client Successfully Updated';
        } else {
            Client::create($data);
            $action = 'store';
            $message = 'Client Successfully Updated';
        }
        $this->emit('flashAction', $action, $message);
        $this->resetInputFields();
        $this->emit('closeClientModal');
        $this->emit('refreshParentClient');
        $this->emit('refreshTable');
    }
}
