<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class SettingComponent extends Component
{
    use WithFileUploads;

    public $company_name;
    public $company_logo;
    public $company_email;
    public $company_phone;
    public $company_address;
    public $company_map;
    public $facebook;
    public $twitter;
    public $instigram;
    public $linkedin;
    public $newimage;

    public function mount(){
        $settings = Setting::find(1);
        $this->company_name = $settings->company_name;
        $this->company_logo = $settings->company_logo;
        $this->company_email = $settings->company_email;
        $this->company_phone = $settings->company_phone;
        $this->company_address = $settings->company_address;
        $this->company_map = $settings->company_map;
        $this->facebook = $settings->facebook;
        $this->twitter = $settings->twitter;
        $this->instigram = $settings->instigram;
        $this->linkedin = $settings->linkedin;
    }
    public function render()
    {
        return view('livewire.admin.setting-component')->layout('layouts.admin');
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'company_name' => 'required',
            // 'company_logo' => 'required',
            'company_email' => 'required',
            'company_phone' => 'required',
            'company_address' => 'required',
            'company_map' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instigram' => 'required',
            'linkedin' => 'required'
        ]);
    }
    public function settings(){
        $this->validate([
            'company_name' => 'required',
            // 'company_logo' => 'required',
            'company_email' => 'required',
            'company_phone' => 'required',
            'company_address' => 'required',
            'company_map' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instigram' => 'required',
            'linkedin' => 'required'
        ]);
        $setting = Setting::find(1);
        $setting->company_name = $this->company_name;
        // $setting->company_logo = $this->company_logo;
        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('Settings',$imagename);
            $setting->company_logo = $imagename;
        }
        $setting->company_email = $this->company_email;
        $setting->company_phone = $this->company_phone;
        $setting->company_address = $this->company_address;
        $setting->company_map = $this->company_map;
        $setting->facebook = $this->facebook;
        $setting->twitter = $this->twitter;
        $setting->instigram = $this->instigram;
        $setting->linkedin = $this->linkedin;
        $setting->save();
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Settings updated Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
    }
}
