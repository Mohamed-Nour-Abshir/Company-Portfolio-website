<?php

namespace App\Http\Livewire;

use App\Models\DigialService;
use App\Models\SoftwareService;
use Livewire\Component;

class DigitalServicesComponent extends Component
{
    public function render()
    {
        $digitalservices = SoftwareService::all();
        return view('livewire.digital-services-component',compact('digitalservices'))->layout('layouts.base');
    }
}
