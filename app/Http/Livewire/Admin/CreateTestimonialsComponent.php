<?php

namespace App\Http\Livewire\Admin;

use App\Models\Testimonial;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateTestimonialsComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $name;
    public $image;
    public $comment;
    public function render()
    {
        return view('livewire.admin.testimonials.create-testimonials-component')->layout('layouts.admin');
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'title'=>'required',
            'name'=>'required',
            'comment'=>'required',
            'image'=>'required'
        ]);
    }
    public function create(){
        $this->validate([
            'title'=>'required',
            'name'=>'required',
            'comment'=>'required',
            'image'=>'required'
        ]);
        $team = new Testimonial();
        $team->title = $this->title;
        $team->name = $this->name;
        $team->comment = $this->comment;
        $imagename = Carbon::now()->timestamp.".".$this->image->extension();
        $this->image->storeAs('Testimoinal',$imagename);
        $team->image = $imagename;
        $team->save();
        
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Testimonials added Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.testimonails');

    }
}
