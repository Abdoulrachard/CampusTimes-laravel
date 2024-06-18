<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Http\Requests\TeacherUpdateRequest;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Str;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = User::query() ;
        $teachers->where('role_id', '=', 2);
        return view('admin.teacher',[ 'teachers' =>   $teachers->get()] );
    }
    public function create()
    {
        return view('admin.form.teacher',[ 'teacher' => new User()]) ;
    }
    public function store(TeacherRequest $request)
    {
        $teacher = new User();
        $teacher = $teacher->create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => 2,
            'password' => Hash::make(Str::random(8)) ,
        ]);
        /* envoyer un mail au proffesseur pour quil met a jour son compte */
        toastr()->success("Le proffesseur à été créer avec succès !") ;
        return redirect()->route('teacher.index') ;
    }
    public function edit(User $teacher)
    {
        return view('admin.form.teacher', ['teacher' => $teacher]) ;
    }
    public function update(User $teacher ,TeacherUpdateRequest $request)
    {
        $teacher = $teacher->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => 2,
            
        ]);
        toastr()->success("Le proffesseur à été mise à jour avec succès !") ;
        return redirect()->route('teacher.index');
    }
    public function destroy(User $teacher)
    {
        $teacher = $teacher->delete();
        toastr()->success("Le proffesseur à été supprimer avec succès  !") ;
        return redirect()->route('teacher.index') ;
    }
}
