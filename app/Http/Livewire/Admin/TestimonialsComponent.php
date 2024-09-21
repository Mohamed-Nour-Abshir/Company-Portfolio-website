<?php

namespace App\Http\Livewire\Admin;

use App\Models\Testimonial;
use Livewire\Component;

class TestimonialsComponent extends Component
{
    public function render()
    {
        $testimonials = Testimonial::all();
        return view('livewire.admin.testimonials.testimonials-component',compact('testimonials'))->layout('layouts.admin');
    }
}
