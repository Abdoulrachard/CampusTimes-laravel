@extends('Base.base')
 @section('title') Les niveaux @endsection

 @section('content') 
<div class="margin-update">
 <div class="d-flex justify-content-end mb-2 align-items-center">
    <a class='btn btn-primary text-center shadow' href="{{ route('level.create') }}">Ajouter</a>
 </div>
 <div class="table-responsive mt-5 animate__animated animate__zoomIn">
    <table class="table table-striped shadow-sm w-100" id="myTable">
        <thead class="bg-white">
            <tr>
                <th>Labels</th>
                <th class="">Actions</th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($levels as $level)
                <tr>
                <td>{{ $level->label }}</td>
                <td>
                    <div class="d-flex justify-content-center align-items-center w-100 gap-1 ">
                        <a href="{{ route('level.edit' , $level) }}" class="btn btn-primary rounded-1 text-light btn-action"><i class="bx bx-edit" style=""></i></a>
                        <button class="btn btn-danger rounded-1 btn-action delete-btn">
                            <i class="bx bx-trash"></i>
                        </button>
                    </div>
                    <form action="{{ route('level.destroy', $level) }}" method="post" class="delete-form">
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