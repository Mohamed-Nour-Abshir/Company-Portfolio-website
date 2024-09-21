<?php

namespace App\Http\Livewire\Admin;

use App\Models\Clippingpath;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateClippingPathComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $newimage;
    public $clippingpath_id;

    public function mount($id){
        $clippingpath = Clippingpath::find($id);
        $this->name = $clippingpath->name;
        $this->image = $clippingpath->image;
        $this->clippingpath_id = $clippingpath->id;
    }
    public function render()
    {
        return view('livewire.admin.clippingpath.update-clipping-path-component')->layout('layouts.admin');
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
        ]);
    }
    public function update(){
        $this->validate([
            'name'=>'required',
        ]);
        $clippingpath = Clippingpath::find($this->clippingpath_id);
        $clippingpath->name = $this->name;
        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('Clippingpath',$imagename);
            $clippingpath->image = $imagename;
        }
        $clippingpath->save();
        
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Clippingpath updated Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.clippingpath');

    }
}
