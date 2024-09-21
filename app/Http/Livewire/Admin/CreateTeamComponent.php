<?php

namespace App\Http\Livewire\Admin;

use App\Models\Team;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateTeamComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $name;
    public $image;
    public function render()
    {
        return view('livewire.admin.team.create-team-component')->layout('layouts.admin');
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'title'=>'required',
            'name'=>'required',
            'image'=>'required'
        ]);
    }
    public function create(){
        $this->validate([
            'title'=>'required',
            'name'=>'required',
            'image'=>'required'
        ]);
        $team = new Team();
        $team->title = $this->title;
        $team->name = $this->name;
        $imagename = Carbon::now()->timestamp.".".$this->image->extension();
        $this->image->storeAs('Team',$imagename);
        $team->image = $imagename;
        $team->save();
        
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Team added Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.team');

    }
}
