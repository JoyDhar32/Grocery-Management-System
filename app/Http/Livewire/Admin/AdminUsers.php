<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUsers extends Component
{
    use WithPagination;
    public function delete($id){
        User::where('id',$id)->delete();
        session()->flash('message', 'Account has been removed successfully!!!');

    }
    public function render()
    {
        $users=User::orderBy('id','Asc')->paginate(15);
        return view('livewire.admin.admin-users',['users'=>$users]);
    }
}
