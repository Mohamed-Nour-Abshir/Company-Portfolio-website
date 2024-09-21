<?php

namespace App\Http\Livewire\Admin;

use App\Models\DigialService;
use Livewire\Component;

class CreateDigitalServicesComponent extends Component
{
    public $s_name;
    public $description;
    public $reveiws;
    public $old_price;
    public $new_price;
    public function render()
    {
        return view('livewire.admin.digital.create-digital-services-component')->layout('layouts.admin');
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            's_name'=>'required',
            'description'=>'required',
            'reveiws'=>'required',
            'old_price'=>'required',
            'new_price'=>'required'
        ]);
    }
    public function create(){
        $this->validate([
            's_name'=>'required',
            'description'=>'required',
            'reveiws'=>'required',
            'old_price'=>'required',
            'new_price'=>'required'
        ]);
        $s_service = new DigialService();
        $s_service->s_name = $this->s_name;
        $s_service->description = $this->description;
        $s_service->reviews = $this->reveiws;
        $s_service->old_price = $this->old_price;
        $s_service->new_price = $this->new_price;
        $s_service->save();
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Service added Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.digital-services');
    }

}
