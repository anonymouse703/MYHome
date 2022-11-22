<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;

class UserForm extends Component
{
    public $userId, $last_name, $first_name, $middle_name, $gender_id, 
           $civil_status_id, $address, $contact_no, $email,$company_id,
           $status_id, $username, $password;
    public $action = '';  //flash
    public $message = '';  //flash

    protected $listeners = [
        'userId',
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
        return view('livewire.user.user-form');
    }

    //edit
    public function userId($userId)
    {
        $this->userId = $userId;
        // dd($this->discountId);
        $users = User::findOrFail($userId)->first();
        $this->last_name = $users->last_name;
        $this->first_name = $users->first_name;
        $this->middle_name = $users->middle_name;
        $this->gender_id = $users->gender_id;
        $this->civil_status_id = $users->civil_status_id;
        $this->address = $users->address;
        $this->contact_no = $users->contact_no;
        $this->email = $users->email;
        $this->company_id = $users->company_id;
        $this->username = $users->username;
        $this->password = $users->password;
        $this->status_id = $users->status_id;
    }

    //store
    public function store()
    {

        $action = '';

        $data = $this->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'gender_id' => 'required',
            'civil_status_id' => 'required',
            'address' => 'required',
            'contact_no' => 'required',
            'email' => 'required',
            'company_id' => 'required',
            'username' => 'required',
            'password' => 'required',
            'status_id' => 'required',
        ]);
        if ($this->userId) {
            User::whereId($this->userId)->first()->update($data);
            $action = 'edit';
            $message = 'User Successfully Updated';
        } else {
            User::create($data);
            $action = 'store';
            $message = 'User Successfully Updated';
        }
        $this->emit('flashAction', $action, $message);
        $this->resetInputFields();
        $this->emit('closeUserModal');
        $this->emit('refreshParentUser');
        $this->emit('refreshTable');
    }
}
