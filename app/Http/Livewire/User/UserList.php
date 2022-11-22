<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class UserList extends Component
{
    use WithPagination;

    public $userId;

    protected $listeners = [
        'refreshParentUser' => '$refresh',
        'deleteUser',
        'editUser',
        'deleteConfirmUser'
    ];


    public function render()
    {
        return view('livewire.user.user-list');
    }

    public function createUser()
    {
        $this->emit('resetInputFields');
        $this->emit('openUserModal');
    }

    public function editUser($userId)
    {
        $this->userId = $userId;
        $this->emit('userId', $this->userId);
        $this->emit('openUserModal');
    }

    public function deleteConfirmUser($userId)
    {
        // dd($userId);
        $this->dispatchBrowserEvent('confirmUserDelete', [
            'title' => 'Are you sure?',
            'text' => "You won't be able to revert this!",
            'icon' => 'warning',
            'showCancelButton' => true,
            'confirmButtonColor' => '#3085d6',
            'cancelButtonColor' => '#d33',
            'confirmButtonText' => 'Yes, delete it!',
            'id' => $userId
        ]);
    }

    public function deleteUser($userId)
    {
        // dd($discountId);
        User::destroy($userId);
        $this->emit('refreshTable');
        $this->resetPage();
    }
}
