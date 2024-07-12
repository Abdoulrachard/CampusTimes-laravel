@extends('Base.base')
 @section('title') Les emploi du temps @endsection

 @section('content') 
 <div class="margin-update">
 <div class="d-flex justify-content-end mb-2 align-items-center">
    <a class='btn btn-primary text-center shadow' href="{{ route('timetable.create') }}">Ajouter</a>
 </div>
 <div class="table-responsive mt-5 animate__animated animate__zoomIn">
    <table class="table table-striped shadow-sm w-100" id="myTable">
        <thead class="bg-white text-center">
            <tr>
                <th>Semaines</th>
                <th>classes</th>
                <th>Visualiser</th>
                <th class="">Actions</th>
            </tr>
        </thead>
        <tbody>
                {{-- @dd($teachers) --}}
                @foreach ($timetables as $timetable)
                <tr>
                <td>Emploi du Temps de la Semaine {{ $timetable->week }}</td>
                <td>{{ $timetable->level->label}}</td>
                <td><a class="btn btn-primary rounded-pill" href="{{ route('timetable.show',$timetable) }}">voir emploi</a></td>
                <td class="">
                    <div class="d-flex justify-content-center align-items-center w-100 gap-1 ">
                        <a href="{{ route('timetable.edit', $timetable) }}" class="btn btn-primary rounded-1 text-light btn-action "><i class="bx bx-edit" style=""></i></a>
                        <button class="btn btn-danger rounded-1 btn-action delete-btn">
                            <i class="bx bx-trash"></i>
                        </button>
                    </div>
                    <form action="{{ route('timetable.destroy', $timetable) }}" method="post" class="delete-form">
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
                @endforeach
        </tbody>
   </table>
 </div>
 </div>
 @endsection