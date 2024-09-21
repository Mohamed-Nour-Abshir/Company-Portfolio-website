<?php

namespace App\Http\Livewire\Admin;

use App\Models\SoftwareService;
use Livewire\Component;

class SoftwareServicesComponent extends Component
{
    public function render()
    {
        $s_services = SoftwareService::all();
        return view('livewire.admin.software.software-services-component',compact('s_services'))->layout('layouts.admin');
    }

    public function deleteService($id){
        $s_service = SoftwareService::find($id);
        $s_service->delete();
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Service deleted Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.software-services');
    }
}
