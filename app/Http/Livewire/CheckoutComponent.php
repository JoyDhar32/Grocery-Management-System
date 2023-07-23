<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use App\Models\Order;
use App\Models\completecheckout;
use App\Models\OrderItem;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class CheckoutComponent extends Component
{

    // public $firstname;
    // public $lastname;
    // public $email;
    // public $mobile;
    // public $line1;
    // public $line2;
    // public $city;
    // public $state;
    // public $zipcode;
    // public $paymentmode;
    // public $subtotal;
    // public $tax;
    // public $total;
    // public function updated($fields)
    // {
    //     $this->validateOnly($fields, [
    //         'firstname' => 'required',
    //         'lastname' => 'required',
    //         'email' => 'required',
    //         'mobile' => 'required',
    //         'line1' => 'required',
    //         'city' => 'required',
    //         'state' => 'required',
    //         'zipcode' => 'required'
    //     ]);
    // }
    // public function placeOrder()
    // {
    //     $this->validate([
    //         'firstname' => 'required',
    //         'lastname' => 'required',
    //         'email' => 'required',
    //         'mobile' => 'required',
    //         'line1' => 'required',
    //         'city' => 'required',
    //         'state' => 'required',
    //         'zipcode' => 'required',
    //         'paymentmode' => 'required'
    //     ]);
    //     $order = new completecheckout();
    //     $order->user_id = Auth::user()->id;

    //     $order->firstname = $this->firstname;
    //     $order->lastname = $this->lastname;
    //     $order->email = $this->email;
    //     $order->mobile = $this->mobile;
    //     $order->line1 = $this->line1;
    //     $order->line2 = $this->line2;
    //     $order->city = $this->city;
    //     $order->state = $this->state;
    //     $order->zipcode = $this->zipcode;
    //     $order->subtotal = Cart::instance('cart')->subtotal();
    //     $order->tax = Cart::instance('cart')->tax();
        
    //     $order->total = Cart::instance('cart')->total();
    //     $order->status = 'ordered';
    //     $order->save();
    //     foreach (Cart::instance('cart')->content() as $item) {
    //         $orderItem = new OrderItem();
    //         $orderItem->product_id = $item->id;
    //         $orderItem->order_id = $order->id;
    //         $orderItem->price = $item->price;
    //         $orderItem->quantity = $item->qty;
    //         $orderItem->save();
    //     }
    //     if ($this->paymentmode == 'cod') {
    //         $transaction = new Transaction();
    //         $transaction->user_id = Auth::user()->id;
    //         $transaction->order_id = $order->id;
    //         $transaction->mode = 'cod';
    //         $transaction->status = 'pending';
    //         $transaction->save();
    //     }
    //     Cart::instance('cart')->destroy();
    //     session()->forget('checkout');
    //     return redirect()->route('home.index')->with('success', 'Purchases Successful');
    // }

    public function render()
    {
        $cartItems = Cart::instance('cart')->content();
        $productNames = $cartItems->pluck('name')->all();
        $productname = implode(", ", $productNames);
        $qtys = $cartItems->pluck('qty')->all();
        $qty = implode(", ", $qtys);
        return view('livewire.checkout-component',['productname'=>$productname,'qty'=>$qty]);
    }
}
