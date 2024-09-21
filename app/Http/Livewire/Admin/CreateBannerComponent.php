<?php

namespace App\Http\Livewire\Admin;

use App\Models\Banner;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
class CreateBannerComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $image;
    public function render()
    {
        return view('livewire.admin.banner.create-banner-component')->layout('layouts.admin');
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);
    }
    public function create(){
        $this->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);
        $banner = new Banner();
        $banner->title = $this->title;
        $banner->description = $this->description;
        $imagename = Carbon::now()->timestamp.".".$this->image->extension();
        $this->image->storeAs('Banner',$imagename);
        $banner->image = $imagename;
        $banner->save();
        
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Banner added Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.banner');

    }

    
}
