@extends('Base.base')
 @section('title') Les collaborateurs @endsection

 @section('content') 
 <div class="margin-update">
 <div class="d-flex justify-content-end mb-2 align-items-center">
    <a class='btn btn-primary text-center shadow' href="{{ route('collaborator.create') }}">Ajouter</a>
 </div>
 <div class="table-responsive">
   <table class="table table-striped shadow-sm " id="myTable">
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
                        <div>
                            <form action="{{ route('collaborator.destroy', $collaborator) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger rounded-1 btn-action"><i class="bx bx-trash" style=""></i></button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
                @endforeach
            
        </tbody>
   </table>
 </div>
   {{ $collaborators->links()}}
 </div>
 @endsection