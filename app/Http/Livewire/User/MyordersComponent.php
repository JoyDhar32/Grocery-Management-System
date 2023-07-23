<?php

namespace App\Http\Livewire\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\completecheckout;

class MyordersComponent extends Component
{
    public function render()
    {
        $id=Auth::user()->id;
        $orders=completecheckout::where('userid',$id)->get();
      
        return view('livewire.user.myorders-component',['orders'=>$orders]);
    }
}
