<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Category;
use Livewire\Component;
use Cart;

class HomeComponent extends Component
{



    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item has added in cart');
        $this->emitTo('cart-icon-component', 'refreshComponent');
        return redirect()->route('shop.cart');
    }
  
    public function render()
    {
     $products=Product::where('best_sell',1)->limit(12)->get();
     $featured=Product::where('featured',1)->limit(12)->get();
     $populars=Product::orderBy('name', 'ASC')->limit(12)->get();
     $category = Category::orderBy('name', 'ASC')->get();
     $new_arrivals=Product::orderBy('id','DESC')->limit(20)->get();
    // dd($populars);
        return view('livewire.home-component', ['products' => $products,'populars'=>$populars,'category' => $category,'new_arrivals'=>$new_arrivals,'featured'=>$featured]);
    }
}
