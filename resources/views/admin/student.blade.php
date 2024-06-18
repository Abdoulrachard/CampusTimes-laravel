@extends('Base.base')
 @section('title') Les étudiants @endsection

 @section('content') 
 <div class="margin-update">
 <div class="table-responsive mt-5 animate__animated animate__zoomIn">
    <table class="table table-striped shadow-sm w-100" id="myTable">
        <thead class="bg-white">
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
                @foreach ($students as $student)
                <tr>
                <td><img src="{{ $student->profil() }}" alt="" style="width: width: 36px;height: 36px;object-fit: cover;border-radius: 50%; "></td>
                <td>{{ $student->lastname }}</td>
                <td>{{ $student->firstname }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    <div class="d-flex justify-content-center align-items-center w-100 gap-1 ">
                        <div>
                            <form action="{{ route('student.blocked', $student) }}" method="post">
                                @csrf
                                
                                @if ($student->blocked)
                                <button class="btn btn-danger rounded-1"><i class="bx bxs-lock "></i></button>
                                @else
                                <button class="btn btn-primary"><i class="bx  bxs-lock-open"></i></button>
                                @endif
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
                @endforeach
            
        </tbody>
   </table>
 </div>
 @endsection