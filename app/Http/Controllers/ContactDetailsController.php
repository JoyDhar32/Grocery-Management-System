<?php

namespace App\Http\Controllers;

use App\Models\ContactDetails;
use Illuminate\Http\Request;

class ContactDetailsController extends Controller
{
    public function index(Request $request){
       $contact = new ContactDetails();
       $contact->name=$request->name;
       $contact->email=$request->email;
       $contact->mobile=$request->telephone;
       $contact->subject=$request->subject;
       $contact->message=$request->message;
       $contact->save();
       return redirect()->back()->with('contact', 'Message sent successfully');

    }
}
