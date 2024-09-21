<?php

namespace App\Http\Livewire\Admin;

use App\Models\Testimonial;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateTestimonialsComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $name;
    public $comment;
    public $image;
    public $newimage;
    public $team_id;
    public function render()
    {
        return view('livewire.admin.testimonials.update-testimonials-component')->layout('layouts.admin');
    }

    public function mount($id){
        $team = Testimonial::find($id);
        $this->title = $team->title;
        $this->name = $team->name;
        $this->comment = $team->comment;
        $this->image = $team->image;
        $this->team_id = $team->id;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'title'=>'required',
            'name'=>'required',
            'comment'=>'required',
            // 'image'=>'required'
        ]);
    }
    public function update(){
        $this->validate([
            'title'=>'required',
            'name'=>'required',
            'comment'=>'required',
            // 'image'=>'required'
        ]);
        $team = Testimonial::find($this->team_id);
        $team->title = $this->title;
        $team->name = $this->name;
        $team->comment = $this->comment;
        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('Testimonial',$imagename);
            $team->image = $imagename;
        }
        $team->save();
        
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Testimonial updated Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.testimonails');

    }
}
