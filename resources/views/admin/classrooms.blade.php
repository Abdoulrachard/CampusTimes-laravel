@extends('Base.base')
 @section('title') Les salles @endsection

 @section('content') 
<div class="margin-update">
 <div class="d-flex justify-content-end mb-2 align-items-center">
    <a class='btn btn-primary text-center shadow' href="{{ route('classroom.create') }}">Ajouter</a>
 </div>
 <div class="table-responsive mt-5 animate__animated animate__zoomIn">
    <table class="table table-striped shadow-sm w-100" id="myTable">
        <thead class="bg-white text-center">
            <tr>
                <th>Labels</th>
                <th>Capacité</th>
                <th>Status</th>
                <th>Description</th>
                <th class="">Actions</th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($classrooms as $classroom)
                <tr>
                <td>{{ $classroom->label }}</td>
                <td>{{ $classroom->capacity }}</td>
                <td class="">
                    @if ($classroom->status )
                        <p class="badge text-bg-success">{{ 'Disponible' }}</p>
                    @else
                    <p class="badge text-bg-info">{{ 'Indisponible' }}</p>
                    @endif
                </td>
                <td >{{ $classroom->description }}</td>
                <td>
                    <div class="d-flex justify-content-center align-items-center w-100 gap-1 ">
                        <a href="{{ route('classroom.edit' , $classroom) }}" class="btn btn-primary rounded-1 text-light btn-action"><i class="bx bx-edit" style=""></i></a>
                        <button class="btn btn-danger rounded-1 btn-action delete-btn">
                            <i class="bx bx-trash"></i>
                        </button>
                    </div>
                    <form action="{{ route('classroom.destroy', $classroom) }}" method="post" class="delete-form">
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