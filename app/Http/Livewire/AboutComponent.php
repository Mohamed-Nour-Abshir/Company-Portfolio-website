<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Team;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $teams = Team::all();
        $clients = Client::all();
        return view('livewire.about-component',compact('clients','teams'))->layout('layouts.base');
    }
}
