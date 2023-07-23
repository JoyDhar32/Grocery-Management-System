<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\Category;
use Livewire\WithPagination;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AdminProductComponent extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $ids;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $old_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $popular;
    public $best_sell;
    public $quantity;
    public $images;
    public $images_1;
    public $category_id;

    public function delete($id)
    {
        if ($id) {
            Product::where('id', $id)->delete();
            session()->flash('message', 'Product deleted successfully');
        }
    }

    public function store()
    {
    //    $this->validate([

    //         'name' => 'required',
    //         'slug' => 'required',
    //         'short_description' => 'required',
    //         'description' => 'required',
    //         'regular_price' => 'required',
    //         'old_price' => 'required',
    //         'SKU' => 'required',
    //         'stock_status' => 'required',
    //         'featured' => 'required',
    //         'popular' => 'required',
    //         'best_sell' => 'required',
    //         'quantity' => 'required',
    //         'images' => 'required',
    //         'category_id' => 'required',

    //     ]);
    
        $product = new Product;
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->old_price = $this->old_price;
        $product->SKU = $this->SKU;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->popular = $this->popular;
        $product->best_sell = $this->best_sell;
        $product->stock_status = $this->stock_status;
        $product->quantity = $this->quantity;
        $product->category_id = $this->category_id;
      

        $SKU = $this->SKU; // Assuming the product name is available in the $product object
        $imageName = $this->images->getClientOriginalName(); // Get the original image name    
        // Get the file extension
        $fileExtension = $this->images->getClientOriginalExtension();
        $fileExtension1 = $this->images_1->getClientOriginalExtension();   
        // Create a new file name using the product name and the file extension
        $newFileName = $SKU . '-1.' . $fileExtension;
        $newFileName1 = $SKU . '-2.' . $fileExtension1;
        $fileDatabase = $SKU;
        // Store the image locally with the new file name
        $this->images->storeAs('assets/imgs/shop/', $newFileName, 'public');
        $this->images_1->storeAs('assets/imgs/shop/', $newFileName1, 'public');
        // Save the image name to the database
        $product->images = $fileDatabase;
        $product->save();

        session()->flash('message', 'Product has been created successfully');
        $this->emit('productAdded');

    }

    public function render()
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        $products = Product::orderBy('category_id', 'ASC')->paginate(12);
        return view('livewire.admin.admin-product-component', ['products' => $products, 'categories' => $categories]);
    }
}
