<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class EmailContacts extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;
    public function render()
    {
        return view('livewire.email-contacts');
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);
    }

    public function contact(){
        $this->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->subject = $this->subject;
        $contact->message = $this->message;
        $contact->save();
        session()->flash('message','Thanks for your contact we will reply soon');
    }
}
