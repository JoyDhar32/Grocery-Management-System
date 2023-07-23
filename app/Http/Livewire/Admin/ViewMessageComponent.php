<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithPagination;

use App\Models\ContactDetails;
use Livewire\Component;

class ViewMessageComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $messages=ContactDetails::latest()->paginate(10);
        return view('livewire.admin.view-message-component',['messages'=>$messages]);
    }
}
