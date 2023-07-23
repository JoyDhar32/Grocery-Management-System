<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoriesComponent extends Component
{
    public $ids;
    public $name;
    public $slug;
    use WithPagination;
    public function store()
    {
        $validateData = $this->validate([

            'name' => 'required|unique:categories',
            'slug' => 'required|unique:categories'
            
        ]);
        Category::create($validateData);
        session()->flash('message', 'Category has been created successfully');
        $this->emit('productAdded');
    }

    public function edit($id){
        $category = Category::where('id',$id)->first();
        $this->ids=$category->id;
        $this->name=$category->name;
        $this->slug=$category->slug;
    }
    public function update(){
        $this->validate([
            
            'name' => 'required|unique:categories',
            'slug' => 'required|unique:categories'
        ]);
        if($this->ids){
            $category = Category::find($this->ids);
            $category->update([
'name'=>$this->name,
'slug'=>$this->slug
            ]);
         session()->flash('message','Category updated successfully');
        $this->emit('productUpdated');
         
        }
    }
    public function delete($id){
        if($id){
            Category::where('id',$id)->delete();
         session()->flash('message','Category deleted successfully');

        }
    }
    public function render()
    {
        $categories = Category::orderBy('name', 'ASC')->paginate(4);
        return view('livewire.admin.admin-categories-component', ['categories' => $categories]);
    }
}
