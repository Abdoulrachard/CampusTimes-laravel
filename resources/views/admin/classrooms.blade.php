@extends('Base.base')
 @section('title') Les salles @endsection

 @section('content') 
<div class="margin-update">
 <div class="d-flex justify-content-end mb-2 align-items-center">
    <a class='btn btn-primary text-center shadow' href="{{ route('classroom.create') }}">Ajouter</a>
 </div>
 <div class="table-responsive">
   <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Labels</th>
                <th>Capacité</th>
                <th>Status</th>
                <th>Description</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($classrooms as $classroom)
                <tr>
                <td>{{ $classroom->id }}</td>
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
                    <div class="d-flex justify-content-end w-100 gap-1 ">
                        <a href="{{ route('classroom.edit' , $classroom) }}" class="btn btn-primary rounded-1 text-light"><i class="bx bx-edit" style="font-size:16px;"></i></a>
                        <div>
                            <form action="{{ route('classroom.destroy', $classroom) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger rounded-1"><i class="bx bx-trash" style="font-size:16px;"></i></button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
                @endforeach
            
        </tbody>

   </table>
</div>

   <div class="text-center">
   {{ $classrooms->links()}}
 </div>
</div>
 @endsection