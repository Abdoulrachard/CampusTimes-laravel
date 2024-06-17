@extends('Base.base')
 @section('title') Les proffesseurs @endsection

 @section('content') 
 <div class="d-flex justify-content-between mb-2 align-items-center">
    <h5 class="text-center">Les proffesseurs</h5>
    <a class='btn btn-primary text-center shadow' href="{{ route('teacher.create') }}">Ajouter</a>
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
                {{-- @dd($teachers) --}}
                @foreach ($teachers as $teacher)
                <tr>
                <td><img src="{{ $teacher->profil() }}" alt="" style="width: width: 36px;height: 36px;object-fit: cover;border-radius: 50%; "></td>
                <td>{{ $teacher->lastname }}</td>
                <td>{{ $teacher->firstname }}</td>
                <td>{{ $teacher->phone }}</td>
                <td>{{ $teacher->email }}</td>
                <td>
                    <div class="d-flex justify-content-end w-100 gap-1 ">
                        <a href="{{ route('teacher.edit', $teacher) }}" class="btn btn-primary rounded-1 text-light"><i class="bx bx-edit" style="font-size:16px;"></i></a>
                        <div>
                            <form action="{{ route('teacher.destroy', $teacher) }}" method="post">
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
   {{ $teachers->links()}}

 @endsection