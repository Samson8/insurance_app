<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RequestController extends Controller
{
    public function store(Request $request){
        // dd($request);
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required',
            'solution' => 'required',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->solution = $request->solution;
        if($user->save()){
            return redirect()->back()->with('message', 'Thank you for reaching out to us, We will be in touch.');
         }else{
   
         }
    }
}
