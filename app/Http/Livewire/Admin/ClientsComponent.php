<?php

namespace App\Http\Livewire\Admin;

use App\Models\Client;
use Livewire\Component;

class ClientsComponent extends Component
{
    public function render()
    {
       $clients = Client::all();
        return view('livewire.admin.client.clients-component',compact('clients'))->layout('layouts.admin');
    }

    public function deleteClient($id){
        $clippingpath = Client::find($id);
        $clippingpath->delete();
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Client deleted Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.clients');
    }
}
