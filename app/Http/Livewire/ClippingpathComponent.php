<?php

namespace App\Http\Livewire;

use App\Models\Clippingpath;
use Livewire\Component;

class ClippingpathComponent extends Component
{
    public function render()
    {
        $clippingpaths = Clippingpath::all();
        return view('livewire.clippingpath-component',compact('clippingpaths'))->layout('layouts.base');
    }
}
