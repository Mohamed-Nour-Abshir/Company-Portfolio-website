<?php

namespace App\Http\Livewire\Admin;

use App\Models\Purchase;
use Livewire\Component;

class OrdersComponent extends Component
{
    public function render()
    {
        $orders = Purchase::all();
        return view('livewire.admin.orders.orders-component',compact('orders'))->layout('layouts.admin');
    }

    public function deleteOrder($id){
        $order = Purchase::find($id);
        $order->delete();
        $this->dispatchBrowserEvent('success-message', [
            'type' => 'success',  
            'message' => 'Order deleted Successfully!', 
            'text' => 'It will list on the users table soon.'
        ]);
        return redirect()->route('admin.orders');
    }
}
