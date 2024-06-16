@extends('base.base')
 @section('title') Les niveaux @endsection

 @section('content') 

 <div class="d-flex justify-content-between mb-2 align-items-center">
    <h5 class="text-center">Les niveaux</h5>
    <a class='btn btn-primary text-center' href="{{ route('level.create') }}">Ajouter</a>
 </div>
   <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Labels</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($levels as $level)
                <tr>
                <td>{{ $level->id }}</td>
                <td>{{ $level->label }}</td>
                <td>
                    <div class="d-flex justify-content-end w-100 gap-1 ">
                        <a href="{{ route('level.edit' , $level) }}" class="btn btn-primary rounded-1 text-light"><i class="bx bx-edit" style="font-size:16px;"></i></a>
                        <div>
                            <form action="{{ route('level.destroy', $level) }}" method="post">
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
   <div class="text-center">
   {{ $levels->links()}}
 </div>
 @endsection