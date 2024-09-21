<?php

namespace App\Http\Livewire\Admin;

use App\Models\SoftwareService;
use Livewire\Component;

class UpdateSoftwareServicesComponent extends Component
{
    public $s_name;
    public $type;
    public $description;
    public $reveiws;
    public $old_price;
    public $new_price;
    public $s_service_id;

    public function mount($id){
        $s_service = SoftwareService::find($id);
        $this->s_name = $s_service->s_name;
        $this->type = $s_service->type;
        $this->description = $s_service->description;
        $this->reveiws = $s_service->reviews;
        $this->old_price = $s_service->old_price;
        $this->new_price = $s_service->new_price;
        $this->s_service_id = $s_service->id;
    }
    public function render()
    {
        return view('livewire.admin.software.update-software-services-component')->layout('layouts.admin');
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            's_name'=>'required',
            'type'=>'required',
            'description'=>'required',
            'reveiws'=>'required',
            'old_price'=>'required',
            'new_price'=>'required'
        ]);
    }
    public function update(){
        $this->validate([
            's_name'=>'required',
            'type'=>'required',
            'description'=>'required',
            'reveiws'=>'required',
            'old_price'=>'required',
            'new_price'=>'required'
        ]);
        $s_service = SoftwareService::find($this->s_service_id);
        $s_service->s_name = $this->s_name;
        $s_service->type = $this->type;
        $s_service->description = $this->description;
        $s_service->reviews = $this->reveiws;
        $s_service->old_price = $this->old_price;
        $s_service->new_price = $this->new_price;
        $s_service->save();
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Service updated Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.software-services');
    }
}
