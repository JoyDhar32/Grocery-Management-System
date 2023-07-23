<?php

namespace App\Http\Controllers;

use App\Models\CustomerSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Newsletter;

class CustomerSubscriptionController extends Controller
{
        public function subscribe(Request $request)
        {

                $validator = Validator::make($request->all(), [
                        'email' => 'required|unique:customer_subscriptions,email',
                ]);

                if ($validator->fails()) {
                        // Handle validation failure
                        return redirect()->back()->with('already_subscribed','already subscribed');
                }

                // Validation passed, continue with your logic
                $subscribe = new CustomerSubscription();
                $subscribe->email = $request->email;
                $subscribe->save();
                return redirect()->back()->with('subscribe', 'Subscription Completed');
        }
}
