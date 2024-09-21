<?php

namespace App\Http\Livewire\Admin;

use App\Models\DigialService;
use Livewire\Component;

class DigitalServicesComponent extends Component
{
    public function render()
    {
        $s_services = DigialService::all();
        return view('livewire.admin.digital.digital-services-component',compact('s_services'))->layout('layouts.admin');
    }

    public function deleteService($id){
        $s_service = DigialService::find($id);
        $s_service->delete();
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Service deleted Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.digital-services');
    }

}
