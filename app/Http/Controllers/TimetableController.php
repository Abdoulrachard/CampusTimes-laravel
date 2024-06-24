<?php

namespace App\Http\Controllers;

use App\Http\Requests\TimestableRequest;
use App\Models\Classroom;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Timetable;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.timetable', ['timetables' => Timetable::all()]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = User::query() ;
        $teachers->where('role_id', '=', 2);
        return view('admin.form.timetable',['timetable' => new Timetable(),'teachers' => $teachers->get(), 'classrooms' => Classroom::all(),'levels' => Level::all(), 'subjects' => Subject::all() ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TimestableRequest $request )
    {
        $timetable = new Timetable();
        $startformat = new DateTime($request->start_time);
        $endformat = new DateTime($request->end_time);

        $start = $startformat->format('Y-m-d H:i');
        $end = $endformat->format('Y-m-d H:i');

        $week = $startformat->format('W');
        
        $timetable->create([
            'week' => $week,
            'user_id' => $request->teacher,
            'subject_id' => $request->subject,
            'classroom_id' => $request->classroom,
            'level_id' => $request->level,
            'start_time' => $start,
            'end_time' => $end,
        ]);
        toastr()->success("L'emploi du temps à été créer avec succès !") ;
        return redirect()->route('timetable.index') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Timetable $timetable)
    {
        return view('admin.timetableshow', compact('timetable'));
    }

    public function edit(Timetable $timetable)
    {
        $teachers = User::query() ;
        $teachers->where('role_id', '=', 2);
        return view('admin.form.timetable',['timetable' => $timetable,'teachers' => $teachers->get(), 'classrooms' => Classroom::all(),'levels' => Level::all(), 'subjects' => Subject::all() ]) ;
    }
    public function update(Timetable $timetable ,TimestableRequest $request)
    {
        $startformat = new DateTime($request->start_time);
        $endformat = new DateTime($request->end_time);

        $start = $startformat->format('Y-m-d H:i');
        $end = $endformat->format('Y-m-d H:i');

        $week = $startformat->format('W');

        $timetable->update([
            'week' => $week,
            'teacher' => $request->teacher,
            'subject' => $request->subject,
            'classroom' => $request->classroom,
            'level' => $request->level,
            'start_time' => $start,
            'end_time' => $end,
        ]);
        toastr()->success("L'emploi du temps à été mise à jour avec succès !") ;
        return redirect()->route('timetable.index');
    }
    public function destroy(Timetable $timetable)
    {
        $timetable = $timetable->delete();
        toastr()->success("L'emploi du temps à été supprimer avec succès  !") ;
        return redirect()->route('timetable.index') ;
    }
}
