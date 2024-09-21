<?php

namespace App\Http\Livewire;

use App\Models\Testimonial;
use Livewire\Component;

class TestimonialsComponent extends Component
{
    public function render()
    {
        $testimonials = Testimonial::all();
        return view('livewire.testimonials-component',compact('testimonials'))->layout('layouts.base');
    }
}
