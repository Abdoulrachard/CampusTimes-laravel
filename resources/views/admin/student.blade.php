@extends('Base.base')
 @section('title') Les étudiants @endsection

 @section('content') 
 <div class="d-flex justify-content-between mb-2 align-items-center">
    <h5 class="text-center">Les étudiants</h5>
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
                @foreach ($students as $student)
                <tr>
                <td><img src="{{ $student->profil() }}" alt="" style="width: width: 36px;height: 36px;object-fit: cover;border-radius: 50%; "></td>
                <td>{{ $student->lastname }}</td>
                <td>{{ $student->firstname }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    <div class="d-flex justify-content-end w-100 gap-1 ">
                        <div>
                            <form action="{{ route('student.blocked', $students) }}" method="post">
                                @csrf
                                
                                @if ($student->blocked)
                                <button class="btn btn-danger rounded-1">Unlock <i class="bx bxs"></i></button>
                                @else
                                <button class="btn btn-primary">Lock</button>
                                @endif
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
                @endforeach
            
        </tbody>
   </table>
   {{ $students->links()}}

 @endsection