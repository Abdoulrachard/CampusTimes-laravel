@extends('Base.base')
 @section('title') Les collaborateurs @endsection

 @section('content') 
 <div class="d-flex justify-content-between mb-2 align-items-center">
    <h5 class="text-center">Les collaborateurs</h5>
    <a class='btn btn-primary text-center shadow' href="{{ route('collaborator.create') }}">Ajouter</a>
 </div>
   <table class="table table-striped">
        <thead>
            <tr>
                <th>Profile</th>
                <th>Nom</th>
                <th>Prénom(s)</th>
                <th>Phone</th>
                <th>Email</th>
                <th class="text-end">Actions</th>
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
                    <div class="d-flex justify-content-end w-100 gap-1 ">
                        <a href="{{ route('collaborator.edit', $collaborator) }}" class="btn btn-primary rounded-1 text-light"><i class="bx bx-edit" style="font-size:16px;"></i></a>
                        <div>
                            <form action="{{ route('collaborator.destroy', $collaborator) }}" method="post">
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
   {{ $collaborators->links()}}

 @endsection