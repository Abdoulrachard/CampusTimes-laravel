<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Storage;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function edit(){
        return view('Profil.profil');
    }
    
    public function update(Request $request)
    {
        // Récupérer l'utilisateur authentifié
        $user = Auth::user();
    
        // Valider les données entrantes
        $data = $request->validate([
            'firstname' => ['nullable', 'string', 'min:2'],
            'lastname' => ['nullable', 'string', 'min:2'],
            'email' => ['nullable', 'email', 'unique:users,email,' . $user->id],
            'profil' => ['nullable', 'image'],
            'phone' => ['nullable']
        ]);
    
        // Gérer le téléchargement de l'image de profil
        if ($request->hasFile('profil')) {
            $profil = $request->file('profil');
    
            // Supprimer l'ancienne image de profil si elle existe
            if ($user->profil) {
                Storage::disk('public')->delete($user->profil);
            }
    
            // Stocker la nouvelle image et obtenir son chemin
            $data['profil'] = $profil->store('image', 'public');
        }
    
        // Mettre à jour les informations de l'utilisateur uniquement si elles sont fournies
        $user->update(array_filter($data));
    
        // Rediriger avec un message de succès
        toastr()->success("Profile updated successfully");
        return to_route('profile.edit');
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
