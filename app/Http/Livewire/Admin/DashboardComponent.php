<?php

namespace App\Http\Livewire\Admin;

use App\Models\Client;
use App\Models\Contact;
use App\Models\DigialService;
use App\Models\SoftwareService;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        $contacts = Contact::all();
        $s_services = SoftwareService::all();
        $d_services = DigialService::all();
        $clients = Client::all();
        return view('livewire.admin.dashboard-component',compact('contacts','s_services','d_services','clients'))->layout('layouts.admin');
    }
    public function deleteContact($id){
        $contact = Contact::find($id);
        $contact->delete();
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'contact deleted Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.contacts');
    }
}
