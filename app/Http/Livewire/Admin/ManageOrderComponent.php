<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\completecheckout;
class ManageOrderComponent extends Component
{
    use WithPagination;
public function delete($id){
    if ($id) {
        completecheckout::where('id', $id)->delete();
        session()->flash('message', 'Order has been removed successfully');
    }
}
public function approve($id){
    $order=completecheckout::find($id);
    $order->status = 1;
    $order->save();
         session()->flash('message','Order has been approved successfully');
}
    public function render()
    {
        $orders=completecheckout::where('status',0)->orderBy('id','DESC')->paginate(10);
        
        return view('livewire.admin.manage-order-component',['orders'=>$orders]);
    }
}
