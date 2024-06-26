<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Auth;
use Illuminate\Http\Request;
use Route;

class LoginController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function doLogin(LoginRequest $request)
    {
        $credentials = $request->validated() ;
        
        $remenber = $request->has('remenber');
        if(Auth::attempt($credentials, $remenber))
        {
            session()->regenerate() ;
            if(Auth::user()->isblocked()){
                Auth::logout() ;
                return redirect()->route('auth.login')->withErrors(
                    [ 'email' =>  "Les identifiants sont incorrectes"] 
                 )->onlyInput('email') ; ;
            }else{
            $user = Auth::user() ;
            if($user->role_id === 1 ){
                return redirect()->intended(RouteServiceProvider::HOME) ;
            }else{
                return redirect()->intended(RouteServiceProvider::STUDENT) ;
            }
            }
        } 
        return  back()->withErrors(
            [ 'email' =>  "Les identifiants sont incorrectes"] 
         )->onlyInput('email') ;
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
