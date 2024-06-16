<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Http\Requests\TeacherUpdateRequest;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Str;

class CollaboratorController extends Controller
{
    public function index()
    {
        $collaborators = User::query() ;
        $collaborators->where('role_id', '=', 1);
        $collaborators = $collaborators->paginate(5);
        return view('admin.collaborator',[ 'collaborators' =>   $collaborators] );
    }
    public function create()
    {
        return view('admin.form.collaborator',[ 'collaborator' => new User()]) ;
    }
    public function store(TeacherRequest $request)
    {
        $collaborator = new User();
        $collaborator = $collaborator->create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => 1,
            'password' => Hash::make(Str::random(8)) ,
        ]);
        /* envoyer un mail au collaborateur pour quil met a jour son compte */
        toastr()->success("Le collaborateur à été créer avec succès !") ;
        return redirect()->route('collaborator.index') ;
    }
    public function edit(User $collaborator)
    {
        return view('admin.form.collaborator', ['collaborator' => $collaborator]) ;
    }
    public function update(User $collaborator ,TeacherUpdateRequest $request)
    {
        $collaborators = $collaborator->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => 1,
            
        ]);
        toastr()->success("Le collaborateur à été mise à jour avec succès !") ;
        return redirect()->route('collaborator.index');
    }
    public function destroy(User $collaborator)
    {
        $collaborator = $collaborator->delete();
        toastr()->success("Le collaborateur à été supprimer avec succès  !") ;
        return redirect()->route('collaborator.index') ;
    }
}
