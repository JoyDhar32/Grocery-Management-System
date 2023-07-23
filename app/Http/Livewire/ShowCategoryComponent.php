<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;

class ShowCategoryComponent extends Component
{
    public function render()
    {
        $categories = Category::orderBy('id','ASC')->get();
        $products=Product::inRandomOrder()->limit(15)->get();
        $products1=Product::inRandomOrder()->limit(15)->get();

        return view('livewire.show-category-component',['categories'=>$categories,'products'=>$products,'products1'=>$products1]);
    }
}
