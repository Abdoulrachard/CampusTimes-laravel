@extends('Base.base')
 @section('title') Les collaborateurs @endsection

 @section('content') 
 <div class="margin-update">
 <div class="d-flex justify-content-end mb-2 align-items-center">
    <a class='btn btn-primary text-center shadow' href="{{ route('collaborator.create') }}">Ajouter</a>
 </div>
 <div class="table-responsive mt-5 animate__animated animate__zoomIn">
   <table class="table table-striped shadow-sm w-100" id="myTable">
        <thead class="bg-white ">
            <tr>
                <th class="text-center">Profile</th>
                <th >Nom</th>
                <th>Prénom(s)</th>
                <th>Phone</th>
                <th>Email</th>
                <th class="">Actions</th>
            </tr>
        </thead>
        <tbody>
                {{-- @dd($collaborators) --}}
                @foreach ($collaborators as $collaborator)
                <tr>
                <td><img src="{{ $collaborator->profil() }}" alt="" style="width: width: 36px;height: 36px;object-fit: cover;border-radius: 50%; "></td>
                <td>{{ $collaborator->lastname }}</td>
                <td>{{ $collaborator->firstname }}</td>
                <td>{{ $collaborator->phone }}</td>
                <td>{{ $collaborator->email }}</td>
                <td>
                    <div class="d-flex justify-content-center align-items-center gap-1 ">
                        <a href="{{ route('collaborator.edit', $collaborator) }}" class="btn btn-primary rounded-1 text-light btn-action"><i class="bx bx-edit" style=""></i></a>
                        <button class="btn btn-danger rounded-1 btn-action delete-btn">
                            <i class="bx bx-trash"></i>
                        </button>
                    </div>
                    <form action="{{ route('collaborator.destroy', $collaborator) }}" method="post" class="delete-form">
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
                @endforeach
            
        </tbody>
   </table>

 @endsection