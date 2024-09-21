<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\Setting;
use Livewire\Component;

class ContactComponent extends Component
{

    public function render()
    {
        $settings = Setting::find(1);
        return view('livewire.contact-component',compact('settings'))->layout('layouts.base');
    }
}
