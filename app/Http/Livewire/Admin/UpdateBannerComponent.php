<?php

namespace App\Http\Livewire\Admin;

use App\Models\Banner;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateBannerComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $image;
    public $newimage;
    public $banner_id;
    public function render()
    {
        return view('livewire.admin.banner.update-banner-component')->layout('layouts.admin');
    }

    public function mount($id){
        $banner = Banner::find($id);
        $this->title = $banner->title;
        $this->description = $banner->description;
        $this->image = $banner->image;
        $this->banner_id = $banner->id;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'title'=>'required',
            'description'=>'required',
            // 'image'=>'required'
        ]);
    }
    public function update(){
        $this->validate([
            'title'=>'required',
            'description'=>'required',
            // 'image'=>'required'
        ]);
        $banner = Banner::find($this->banner_id);
        $banner->title = $this->title;
        $banner->description = $this->description;
        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('Banner',$imagename);
            $banner->image = $imagename;
        }
        $banner->save();
        
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Banner updated Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.banner');

    }
}
