<?php

namespace App\Http\Livewire\Admin;

use App\Models\Client;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateClientsComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $image;

    public function render()
    {
        return view('livewire.admin.client.create-clients-component')->layout('layouts.admin');
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
        $banner = new Client();
        $banner->name = $this->name;
        $imagename = Carbon::now()->timestamp.".".$this->image->extension();
        $this->image->storeAs('Client',$imagename);
        $banner->image = $imagename;
        $banner->save();
        
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Client added Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.clients');

    }
}
