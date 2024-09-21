<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;

class ContactsComponent extends Component
{
    public function render()
    {
        $contacts = Contact::all();
        return view('livewire.admin.contact.contacts-component',compact('contacts'))->layout('layouts.admin');
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
