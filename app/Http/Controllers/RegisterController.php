<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Models\signlog;

class RegisterController extends Controller
{
    public function create(){
        return view('Signup');
    }

    public function store(){


        $attributes = request()->validate([
            'Username' => ['required','min:3','unique:users,Username'],
            'Email' => ['required','email','unique:users,Email'],
            'Password' => ['required','min:7']
        ]);

        $attributes['Password'] = bcrypt($attributes['Password']);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/');
        
    }

    public function view(){

        // if(auth()->guest()){
        //     abort(403);
        // }

        // if(auth()->user()->Username != 'Aown'){
        //     abort(403);
        // }

        $login = signlog::all();
        $data = compact('login');
        return view('admin')->with($data);
    }

    public function delete($id)
    {

        $customer = signlog::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect()->back();
    }

    public function edit($id)
    {

        $person = signlog::find($id);
        if (!is_null($customer)) {
            $person->Username = 'ABC';
            $person->save();
        }
        return redirect()->back();
    }


}
