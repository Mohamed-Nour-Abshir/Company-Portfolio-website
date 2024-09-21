<?php

namespace App\Http\Livewire;

use App\Models\DigialService;
use App\Models\Purchase;
use App\Models\SoftwareService;
use Livewire\Component;

class PurchaseComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $service_type;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'service_type'=>'required'
        ]);
    }

    public function orderNow(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'service_type'=>'required'
        ]);
        $order = new Purchase();
        $order->name = $this->name;
        $order->email = $this->email;
        $order->phone = $this->phone;
        $order->service_type = $this->service_type;
        $order->save();
        session()->flash('message','Thanks for your order we will contact you soon');
    }
    public function render()
    {
        $services = SoftwareService::all();
        return view('livewire.purchase-component',compact('services'))->layout('layouts.base');
    }
}
