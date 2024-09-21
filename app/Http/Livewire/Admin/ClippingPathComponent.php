<?php

namespace App\Http\Livewire\Admin;

use App\Models\Clippingpath;
use Livewire\Component;

class ClippingPathComponent extends Component
{
    public function render()
    {
        $clippingpaths = Clippingpath::all();
        return view('livewire.admin.clippingpath.clipping-path-component',compact('clippingpaths'))->layout('layouts.admin');
    }

    public function deleteClippingpath($id){
        $clippingpath = Clippingpath::find($id);
        $clippingpath->delete();
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Clippingpath deleted Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.clippingpath');
    }
}
