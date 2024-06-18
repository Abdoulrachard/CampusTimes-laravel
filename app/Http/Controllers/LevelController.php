<?php

namespace App\Http\Controllers;

use App\Http\Requests\LevelRequest;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        return view('admin.levels',[ 'levels' => Level::orderBy('id', 'asc')->get() ] );
    }
    public function create()
    {
        return view('admin.form.level',[ 'level' => new Level()]) ;
    }
    public function store(LevelRequest $request)
    {
        $level = new Level();
        $level = $level->create($request->validated());
        toastr()->success("Le niveau à été créer avec succès !") ;
        return redirect()->route('level.index') ;
    }
    public function edit(Level $level)
    {
        return view('admin.form.level', ['level' => $level]) ;
    }
    public function update(Level $level ,LevelRequest $request)
    {
        $level = $level->update($request->validated());
        toastr()->success("Le niveau à été mise à jour avec succès !") ;
        return redirect()->route('level.index');
    }
    public function destroy(Level $level)
    {
        $level = $level->delete();
        toastr()->success("Le niveau à été supprimer avec succès  !") ;
        return redirect()->route('level.index') ;
    }
}
