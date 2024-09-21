<?php

namespace App\Http\Livewire\Admin;

use App\Models\Team;
use Livewire\Component;

class TeamComponent extends Component
{
    public function render()
    {
        $teams = Team::all();
        return view('livewire.admin.team.team-component', compact('teams'))->layout('layouts.admin');
    }

    public function deleteTeam($id){
        $team = Team::find($id);
        $team->delete();
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Team deleted Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.team');
    }
}
