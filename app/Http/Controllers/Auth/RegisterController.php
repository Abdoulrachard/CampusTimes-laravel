<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Level;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Auth;
use Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register' , ['levels' => Level::all()]);
    }
    public function store(RegisterRequest $request)
    {
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'level_id' => $request->level_id,
            'role_id' => 3,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user) ;
        return redirect(RouteServiceProvider::STUDENT);
    }
    
}
