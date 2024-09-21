<?php

namespace App\Http\Livewire\Admin;

use App\Models\Clippingpath;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateClippingPathComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $image;

    public function render()
    {
        return view('livewire.admin.clippingpath.create-clipping-path-component')->layout('layouts.admin');
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'image'=>'required'
        ]);
    }
    public function create(){
        $this->validate([
            'name'=>'required',
            'image'=>'required'
        ]);
        $banner = new Clippingpath();
        $banner->name = $this->name;
        $imagename = Carbon::now()->timestamp.".".$this->image->extension();
        $this->image->storeAs('Clippingpath',$imagename);
        $banner->image = $imagename;
        $banner->save();
        
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Clippingpath added Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.clippingpath');

    }
}
