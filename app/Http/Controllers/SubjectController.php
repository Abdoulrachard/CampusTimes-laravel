<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectRequest;
use App\Models\Level;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        return view('admin.subjects',[ 'subjects' => Subject::all() ] );
    }
    public function create()
    {
        return view('admin.form.subject',[ 'subject' => new Subject(), 'levels' => Level::all()]) ;
    }
    public function store(SubjectRequest $request)
    {
        $subject = new Subject();
        $subject = $subject->create($request->validated());
        toastr()->success("La matière à été créer avec succès !") ;
        return redirect()->route('subject.index');
    }
    public function edit(Subject $subject)
    {
        return view('admin.form.subject', ['subject' => $subject , 'levels' => Level::all()]) ;
    }
    public function update(Subject $subject ,SubjectRequest $request)
    {
        $subject = $subject->update($request->validated());
        toastr()->success("La matière à été mise à jour avec succès !") ;
        return redirect()->route('subject.index');
    }
    public function destroy(Subject $subject)
    {
        $subject = $subject->delete();
        toastr()->success("La matière à été mise à été supprimer avec succès !") ;

        return redirect()->route('subject.index');
    }
}
