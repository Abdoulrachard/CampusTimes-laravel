@extends('Base.base')
@section('title', $timetable->exists ? "Modifier un empoi du temps" : "Créer un empoi du temps") 
@section('content')
    <form action="{{ route($timetable->exists ? 'timetable.update' : 'timetable.store' , $timetable) }}" method="post" class="p-4 margin-update">
        @method($timetable->exists ? 'PATCH' : 'POST')
        @csrf
        <h5 class="">
            @if ($timetable->exists)
            Modifier un emploi du temps
         @else
            Créer un emploi du temps
         @endif
        </h5>
        <div class="row ">
            <div class="col-md-6">
                <label for="timetableinput" class="mt-2">Classe</label>
                <select  id="timetableinput" name="level" class="form-control @error('level') is-invalid @enderror">
                    <option value="" >Choisi une classe</option>
                    @foreach($levels as $level )
<<<<<<< HEAD
                    <option value="{{ $level->id }}"  @selected(old('level', $timetable->level_id === $level->id))>{{ $level->label }}</option>
=======
                    <option value="{{ $level->id }}"  @selected(old('level', $timetable->level === $level->id))>{{ $level->label }}</option>
>>>>>>> aedb544907549f8df0790b40af1a71722d98d9fc
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    @error('level')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="timetableinput" class="mt-2">Cours</label>
                <select  id="timetableinput" name="subject" class="form-control @error('subject') is-invalid @enderror">
                    <option value="">Choisi une matière</option>
                    @foreach($subjects as $subject )
<<<<<<< HEAD
                     <option value="{{ $subject->id }}" @selected( old('subject',$timetable->subject_id === $subject->id))>{{ $subject->label }}</option>
=======
                     <option value="{{ $subject->id }}" @selected( old('subject',$timetable->subject === $subject->id))>{{ $subject->label }}</option>
>>>>>>> aedb544907549f8df0790b40af1a71722d98d9fc
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    @error('subject')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="timetableinput" class="mt-2">Professeur</label>
                <select  id="timetableinput" name="teacher" class="form-control @error('teacher') is-invalid @enderror">
                    <option value="">Choisi un proff</option>
                    @foreach($teachers as $teacher )
<<<<<<< HEAD
                    <option value="{{ $teacher->id }}" @selected(old('teacher',$timetable->user_id === $teacher->id))>{{ $teacher->lastname }} {{ $teacher->firstname }}</option>
=======
                    <option value="{{ $teacher->id }}" @selected(old('teacher',$timetable->teacher === $teacher->id))>{{ $teacher->lastname }} {{ $teacher->firstname }}</option>
>>>>>>> aedb544907549f8df0790b40af1a71722d98d9fc
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    @error('teacher')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="timetableinput" class="mt-2">Salle</label>
                <select id="timetableinput" name="classroom" class="form-control @error('classroom') is-invalid @enderror">
                    <option value="">Choisi une salle</option>
                    @foreach($classrooms as $classroom) 
<<<<<<< HEAD
                        <option value="{{ $classroom->id }}" @selected(old('classroom',$timetable->classroom_id === $classroom->id))>{{ $classroom->label }}</option>
=======
                        <option value="{{ $classroom->id }}" @selected(old('classroom',$timetable->classroom === $classroom->id))>{{ $classroom->label }}</option>
>>>>>>> aedb544907549f8df0790b40af1a71722d98d9fc
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    @error('classroom')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="timetableinput" class="mt-2">Heure de début</label>
                <input type="datetime-local" id="timetableinput" name="start_time" class="form-control @error('start_time') is-invalid @enderror" value="{{ old('start_time',$timetable->start_time) }}">
                <div class="invalid-feedback">
                    @error('start_time')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="timetableinput" class="mt-2">Heure de fin</label>
                <input type="datetime-local" id="timetableinput" name="end_time" class="form-control @error('end_time') is-invalid @enderror" value="{{ old('end_time',$timetable->end_time) }}">
                <div class="invalid-feedback">
                    @error('end_time')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
            
        </div>
            <div class="">
                <button class="btn btn-primary shadow mt-2">
                    @if ($timetable->exists)
                        Modifier   
                    @else
                        Créer
                    @endif
                </button>
            </div>
       
    </form>
@endsection