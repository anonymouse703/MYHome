<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Client;

class ClientList extends Component
{
    use WithPagination;

    public $clientId;
    protected $paginationTheme = 'bootstrap';
    public $search = '';

    protected $listeners = [
        'refreshParentClient' => '$refresh',
        'deleteClient',
        'editClient',
        'deleteConfirmClient'
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.client.client-list',[
            'clients' => Client::all()
        ]);
    }

    public function createClient()
    {
        $this->emit('resetInputFields');
        $this->emit('openClientModal');
    }

    public function editClient($clientId)
    {
        $this->clientId = $clientId;
        $this->emit('clientId', $this->clientId);
        $this->emit('openClientModal');
    }

    public function deleteConfirmClient($clientId)
    {
        // dd($clientId);
        $this->dispatchBrowserEvent('confirmClientDelete', [
            'title' => 'Are you sure?',
            'text' => "You won't be able to revert this!",
            'icon' => 'warning',
            'showCancelButton' => true,
            'confirmButtonColor' => '#3085d6',
            'cancelButtonColor' => '#d33',
            'confirmButtonText' => 'Yes, delete it!',
            'id' => $clientId
        ]);
    }

    public function deleteClient($clientId)
    {
        // dd($discountId);
        Client::destroy($clientId);
        $this->emit('refreshTable');
        $this->resetPage();
    }
}
