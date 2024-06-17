@extends('Base.base')
 @section('title') Les matières @endsection

 @section('content') 
 <div class="margin-update">
 <div class="d-flex justify-content-end mb-2 align-items-center">
    <a class='btn btn-primary text-center shadow' href="{{ route('subject.create') }}">Ajouter</a>
 </div>
 <div class="table-responsive">
   <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>code</th>
                <th>label</th>
                <th>Heure total</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($subjects as $subject)
                <tr>
                <td>{{ $subject->id }}</td>
                <td>{{ $subject->code }}</td>
                <td>{{ $subject->label }}</td>
                <td>{{ $subject->total_time }}</td>
                <td>
                    <div class="d-flex justify-content-end w-100 gap-1 ">
                        <a href="{{ route('subject.edit', $subject) }}" class="btn btn-primary rounded-1 text-light"><i class="bx bx-edit" style="font-size:16px;"></i></a>
                        <div>
                            <form action="{{ route('subject.destroy', $subject) }}" method="post">
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
   {{ $subjects->links()}}
 </div>
 @endsection