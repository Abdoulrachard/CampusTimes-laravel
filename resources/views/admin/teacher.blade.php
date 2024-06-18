@extends('Base.base')
 @section('title') Les proffesseurs @endsection

 @section('content') 
 <div class="margin-update">
 <div class="d-flex justify-content-end mb-2 align-items-center">
    <a class='btn btn-primary text-center shadow' href="{{ route('teacher.create') }}">Ajouter</a>
 </div>
 <div class="table-responsive mt-5">
    <table class="table table-striped shadow-sm " id="myTable">
        <thead class="bg-white text-center">
            <tr>
                <th>Profile</th>
                <th>Nom</th>
                <th>Prénom(s)</th>
                <th>Phone</th>
                <th>Email</th>
                <th class="">Actions</th>
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
                <td class="">
                    <div class="d-flex justify-content-center align-items-center w-100 gap-1 ">
                        <a href="{{ route('teacher.edit', $teacher) }}" class="btn btn-primary rounded-1 text-light btn-action "><i class="bx bx-edit" style=""></i></a>
                        <div>
                            <form action="{{ route('teacher.destroy', $teacher) }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger rounded-1 btn-action "><i class="bx bx-trash" style=""></i></button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
                @endforeach
            
        </tbody>
   </table>
 </div>
   {{ $teachers->links()}}
 </div>
 @endsection