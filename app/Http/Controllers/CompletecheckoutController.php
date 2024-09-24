<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\completecheckout;
use App\Models\carddetails;
use Cart;
use Illuminate\Support\Facades\Validator;


class CompletecheckoutController extends Controller
{
   public function index(Request $request)
   {
      $model = new completecheckout;
      $payment_mode = $request->input('payment_option');
      if ($payment_mode == 'card') {

         // $validator = Validator::make($request->all(), [
         //    'cnumber' => 'required',
         //    'cexpire' => 'required',
         //    'ccvc' => 'required',
         // ]);

         // if ($validator->fails()) {
         //    $error_message = "error";
         //    return redirect()->back()->withErrors($validator)->withInput()->with('error_message', $error_message);
         // } else {
            // $card = new carddetails();
            // $card->user_id = $request->input('user_id');
            // $card->card_number = $request->input('cnumber');
            // $card->card_exp = $request->input('cexpire');
            // $card->card_cvc = $request->input('ccvc');
            // $card->save();

      // Assign form data to model properties
      $model->fname = $request->input('fname');
      $model->userid = $request->input('user_id');
      $model->username = $request->input('user_name');
      $model->user_email = $request->input('user_email');
      $model->products = $request->input('products');
      $model->qty = $request->input('qty');
      $model->lname = $request->input('lname');
      $model->phone = $request->input('phone');
      $model->email = $request->input('email');
      $model->address = $request->input('billing_address');
      $model->city = $request->input('city');
      $model->state = $request->input('state');
      $model->zipcode = $request->input('zipcode');
      $model->subtotal = $request->input('subtotal');
      $model->tax = $request->input('tax');
      $model->total = $request->input('total');
      $model->payment_option = $request->input('payment_option');
      // Save the model to the database
      $purchases_completed = $model->save();
      if ($purchases_completed) {

         Cart::instance('cart')->destroy();
         \Stripe\Stripe::setApiKey(config(key: 'stripe.sk'));
           
         $qty = $request->input('qty');
      $name = $request->input('products');
      $amount = $request->input('total');

      $session = \Stripe\Checkout\Session::create([
          'line_items' => [
              [
                  'price_data' => [
                      'currency' => 'aud',
                      'product_data' => [
                          'name' => $name,
                      ],
                      'unit_amount' => $amount * 100,
                  ],
                  'quantity' => 1,
              ],
          ],
          'mode' => 'payment',
          'success_url' => route('home.index'),
         
      ]);
      return redirect()->away($session->url)->with('success', 'Purchases Successful');

      }

         
      }
      // Assign form data to model properties
      $model->fname = $request->input('fname');
      $model->userid = $request->input('user_id');
      $model->username = $request->input('user_name');
      $model->user_email = $request->input('user_email');
      $model->products = $request->input('products');
      $model->qty = $request->input('qty');
      $model->lname = $request->input('lname');
      $model->phone = $request->input('phone');
      $model->email = $request->input('email');
      $model->address = $request->input('billing_address');
      $model->city = $request->input('city');
      $model->state = $request->input('state');
      $model->zipcode = $request->input('zipcode');
      $model->subtotal = $request->input('subtotal');
      $model->tax = $request->input('tax');
      $model->total = $request->input('total');
      $model->payment_option = $request->input('payment_option');
      // Save the model to the database
      $purchases_completed = $model->save();
      if ($purchases_completed) {

         Cart::instance('cart')->destroy();
      }
      return redirect()->route('home.index')->with('success', 'Purchases Successful');
   }
}
