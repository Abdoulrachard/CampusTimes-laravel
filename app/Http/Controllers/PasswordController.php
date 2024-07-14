<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function edit(){
        return view('Profil.profil');
    }

    public function update(){

    }

    public function updatePass(Request $request): RedirectResponse
    {
        $validated = $request->validate( [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);
        if(!Hash::check($validated['current_password'],$request->user()->password)){
            return back() ;
        }

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);
        toastr()->success("Mot de passe changer avec success") ;
        return back();
    }
}
