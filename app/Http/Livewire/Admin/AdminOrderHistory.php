<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\completecheckout;
use Livewire\WithPagination;

class AdminOrderHistory extends Component
{
    use WithPagination;
    public function render()
    {
        $orders=completecheckout::where('status',1)->paginate(15);
        return view('livewire.admin.admin-order-history',['orders'=>$orders]);
    }
}
