<?php

namespace App\Http\Livewire\Admin;

use App\Models\Client;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateClientsComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $newimage;
    public $clippingpath_id;

    public function mount($id){
        $clippingpath = Client::find($id);
        $this->name = $clippingpath->name;
        $this->image = $clippingpath->image;
        $this->clippingpath_id = $clippingpath->id;
    }
    public function render()
    {
        return view('livewire.admin.client.update-clients-component')->layout('layouts.admin');
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
        $clippingpath = Client::find($this->clippingpath_id);
        $clippingpath->name = $this->name;
        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('Client',$imagename);
            $clippingpath->image = $imagename;
        }
        $clippingpath->save();
        
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Client updated Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.clients');

    }
}
