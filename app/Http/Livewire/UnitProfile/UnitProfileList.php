<?php

namespace App\Http\Livewire\UnitProfile;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\RealEstateProfile;

class UnitProfileList extends Component
{
    public $profileId;
    protected $paginationTheme = 'bootstrap';
    public $search = '';

    protected $listeners = [
        'refreshParentProfile' => '$refresh',
        'deleteProfile',
        'editProfile',
        'deleteConfirmProfile'
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if (empty($this->search)) {
            $profiles  = RealEstateProfile::paginate(10);
        } else {
            $profiles  = RealEstateProfile::where('model_name', 'LIKE', '%' . $this->search . '%')
                ->orWhere('real_estate_type_id', 'LIKE', '%' . $this->search . '%')
                ->orWhere('real_estate_company_id', 'LIKE', '%' . $this->search . '%')
                ->orWhere('location_id', 'LIKE', '%' . $this->search . '%')
                ->paginate(10);
        }

        return view('livewire.unit-profile.unit-profile-list',[
            'profiles' => $profiles
        ]);
    }

    public function createProfile()
    {
        $this->emit('resetInputFields');
        $this->emit('openProfileModal');
    }

    public function editProfile($profileId)
    {
        $this->profileId = $profileId;
        $this->emit('profileId', $this->profileId);
        $this->emit('openProfileModal');
    }

    public function deleteConfirmProfile($profileId)
    {
        // dd($profileId);
        $this->dispatchBrowserEvent('confirmProfileDelete', [
            'title' => 'Are you sure?',
            'text' => "You won't be able to revert this!",
            'icon' => 'warning',
            'showCancelButton' => true,
            'confirmButtonColor' => '#3085d6',
            'cancelButtonColor' => '#d33',
            'confirmButtonText' => 'Yes, delete it!',
            'id' => $profileId
        ]);
    }

    public function deleteProfile($profileId)
    {
        // dd($discountId);
        RealEstateProfile::destroy($profileId);
        $this->emit('refreshTable');
        $this->resetPage();
    }
}

