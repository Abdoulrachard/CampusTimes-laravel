@extends('base.base')
@section('title', $teacher->exists ? "Modifier un proffesseur" : "Créer un proffesseur") 
@section('content')
    <form action="{{ route($teacher->exists ? 'teacher.update' : 'teacher.store' , $teacher) }}" method="post" class="p-4">
        @method($teacher->exists ? 'PATCH' : 'POST')
        @csrf
        <h5 class="">
            @if ($teacher->exists)
            Modifier un proffesseur
         @else
            Créer un proffesseur
         @endif
        </h5>
        <div class="row ">
            <div class="col-md-6">
                <label for="teacherinput" class="mt-2">Prénom(s)</label>
                <input type="text" id="teacherinput" name="firstname" class="form-control @error('firstname') is-invalid @enderror" value="{{ old('firstname',$teacher->firstname) }}">
                <div class="invalid-feedback">
                    @error('firstname')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="teacherinput" class="mt-2">Nom</label>
                <input type="text" id="teacherinput" name="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname',$teacher->lastname) }}">
                <div class="invalid-feedback">
                    @error('lastname')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="teacherinput" class="mt-2">Email</label>
                <input type="email" id="teacherinput" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email',$teacher->email) }}">
                <div class="invalid-feedback">
                    @error('email')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="teacherinput" class="mt-2">Phone</label>
                <input type="text" id="teacherinput" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone',$teacher->phone) }}">
                <div class="invalid-feedback">
                    @error('phone')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
        </div>
            <div class="">
                <button class="btn btn-primary  mt-2">
                    @if ($teacher->exists)
                        Modifier   
                    @else
                        Créer
                    @endif
                </button>
            </div>
       
    </form>
@endsection