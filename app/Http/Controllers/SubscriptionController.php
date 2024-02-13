<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{



    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $userExists = Subscription::where('email', $request->email)->exists();

        if ($userExists) {
            return back()->withErrors(['email' => 'This email is already subscribed.']);
        }

        Subscription::create([
            'email' => $request->email,
        ]);
        return  redirect('home');
    }
    public  function  index(){
        $listemail = Subscription::all();
        return  view('listemail',['list' => $listemail]);
    }

    public function softDelete(Subscription $subscription)
    {
       $subscription->delete();


        return redirect(route('list.email'));
    }


}
