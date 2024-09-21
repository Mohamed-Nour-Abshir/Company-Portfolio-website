<?php

namespace App\Http\Livewire\Admin;

use App\Models\Banner;
use Livewire\Component;

class AdminBannerComponent extends Component
{

    public function deleteBanner($id){
        $banner = Banner::find($id);
        if($banner){
            $banner->delete();
            $this->dispatchBrowserEvent('success-message', [
                'type' => 'success',  
                'message' => 'Banner deleted Successfully!', 
                'text' => 'It will list on the users table soon.'
            ]);
        }
        return redirect()->route('admin.banner');
    }
    
    public function render()
    {
        $banners = Banner::all();
        return view('livewire.admin.banner.admin-banner-component',compact('banners'))->layout('layouts.admin');
    }

}
