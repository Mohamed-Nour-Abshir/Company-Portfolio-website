<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateTeamComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $name;
    public $image;
    public $newimage;
    public $team_id;
    public function render()
    {
        return view('livewire.admin.team.update-team-component')->layout('layouts.admin');
    }

    public function mount($id){
        $team = Team::find($id);
        $this->title = $team->title;
        $this->name = $team->name;
        $this->image = $team->image;
        $this->team_id = $team->id;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'title'=>'required',
            'name'=>'required',
            // 'image'=>'required'
        ]);
    }
    public function update(){
        $this->validate([
            'title'=>'required',
            'name'=>'required',
            // 'image'=>'required'
        ]);
        $team = Team::find($this->team_id);
        $team->title = $this->title;
        $team->name = $this->name;
        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('Team',$imagename);
            $team->image = $imagename;
        }
        $team->save();
        
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Team updated Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.team');

    }
}
