<?php

namespace App\Http\Livewire;
use App\Models\Product;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class ExclusivedealsComponent extends Component
{


    use WithPagination;
    public $pageSize = 12;
    public $orderBy = "Default Sorting";
    public $min_value = 0;
    public $max_value = 1000;


    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item has added in cart');
        $this->emitTo('cart-icon-component', 'refreshComponent');
        return redirect()->route('shop.cart');
    }
  
    public function changePageSize($size)
    {
        $this->pageSize = $size;
    }
    public function changeOrderBy($order)
    {
        $this->orderBy = $order;
    }
    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        $this->emitTo('wish-list-icon-component', 'refreshComponent');
    }
    public function removeFromWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wish-list-icon-component', 'refreshComponent');
                return;
            }
        }
    }
    public function render()
    {

        $products = Product::where('category_id',6)->orderBy('regular_price', 'DESC')->paginate($this->pageSize);
        $category = Category::orderBy('name', 'ASC')->get();
        $best_sells=Product::where('best_sell',1)->limit(10)->get();
        return view('livewire.exclusivedeals-component', ['products' => $products, 'categories' => $category,'best_sells'=>$best_sells]);
    }
  
}
