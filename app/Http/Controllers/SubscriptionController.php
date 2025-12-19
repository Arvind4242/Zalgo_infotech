<?php

namespace App\Http\Controllers;
use App\Mail\SubscriptionMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
  
    
    public function subscribe(Request $request)
    {
        $user = auth()->user(); // Get logged-in user
    
        // Store subscription in the database (if required)
        // Subscription::create([...]);
    
        // Send email to the user
        Mail::to($user->email)->send(new SubscriptionMail($user, 'user'));
    
        // Send email to the admin
        Mail::to('arvindsinghsikarwar52@gmail.com')->send(new SubscriptionMail($user, 'admin'));
    
        return response()->json(['message' => 'Subscription successful, emails sent.']);
    }
    
}
