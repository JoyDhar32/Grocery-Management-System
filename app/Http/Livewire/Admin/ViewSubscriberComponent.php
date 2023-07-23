<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;

use App\Models\CustomerSubscription;
use Livewire\Component;

class ViewSubscriberComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $subscribers=CustomerSubscription::latest()->paginate(10);
        return view('livewire.admin.view-subscriber-component',['subscribers'=>$subscribers]);
    }
}
