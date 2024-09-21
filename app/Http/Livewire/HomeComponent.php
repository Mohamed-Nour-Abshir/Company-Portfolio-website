<?php

namespace App\Http\Livewire;

use App\Models\Banner;
use App\Models\Client;
use App\Models\Clippingpath;
use App\Models\Service;
use App\Models\SoftwareService;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class HomeComponent extends Component
{
    
    
    public function render()
    {
        $banners = Banner::all();
        $s_services = SoftwareService::all();
        $clippingpaths = Clippingpath::all();
        $clients = Client::all();
        return view('livewire.home-component',compact('banners','s_services','clippingpaths','clients'))->layout('layouts.base');
    }
}
