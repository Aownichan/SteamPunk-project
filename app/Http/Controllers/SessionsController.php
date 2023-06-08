<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\signlog;
// use App\Http\Controllers\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionsController extends Controller
{
    // public function store()
    // {
    //     $attributes = request()->validate([
    //         'Email' => ['required','email'],
    //         'Password' => ['required']
    //     ]);

    //     if(auth()->attempt($attributes)){
    //         return redirect ('/');
    //     }

    //     return back()->withInput()->withErrors(['Email'=>'Invalid Credentials']);

    // }

    // public function store(Request $request)
    // {

    //     $user = signlog::where(['Email' => $request->Email])->first();

        
    //     if ($user && !Hash::check($request->Password, $user->Password)) {

    //         return back()->withInput()->withErrors(['Email'=>'Invalid Credentials.']);
    //     } 
        
    //     else {

    //         auth()->login($user);
    //         return redirect('/');
    //     }
    // }

    public function store(Request $request)
    {

        $user = signlog::where(['Email' => $request->Email])->first();

        
        if ($user && !Hash::check($request->Password, $user->Password)) {

            return back()->withInput()->withErrors(['Email'=>'Invalid Credentials.']);
        } else {
            $request->session()->put('user', $user);
            $data = compact('user');
            return redirect('/');
   
        }
    }

    public function destroy(){
        auth()->logout();
        return redirect('/');
    }
}
