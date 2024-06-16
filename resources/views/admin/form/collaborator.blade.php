@extends('base.base')
@section('title', $collaborator->exists ? "Modifier un collaborateur" : "Créer un collaborateur") 
@section('content')
    <form action="{{ route($collaborator->exists ? 'collaborator.update' : 'collaborator.store' , $collaborator) }}" method="post" class="p-4">
        @method($collaborator->exists ? 'PATCH' : 'POST')
        @csrf
        <h5 class="">
            @if ($collaborator->exists)
            Modifier un collaborateur
         @else
            Créer un collaborateur
         @endif
        </h5>
        <div class="row ">
            <div class="col-md-6">
                <label for="collaboratorinput" class="mt-2">Prénom(s)</label>
                <input type="text" id="collaboratorinput" name="firstname" class="form-control @error('firstname') is-invalid @enderror" value="{{ old('firstname',$collaborator->firstname) }}">
                <div class="invalid-feedback">
                    @error('firstname')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="collaboratorinput" class="mt-2">Nom</label>
                <input type="text" id="collaboratorinput" name="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{ old('lastname',$collaborator->lastname) }}">
                <div class="invalid-feedback">
                    @error('lastname')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="collaboratorinput" class="mt-2">Email</label>
                <input type="email" id="collaboratorinput" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email',$collaborator->email) }}">
                <div class="invalid-feedback">
                    @error('email')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="collaboratorinput" class="mt-2">Phone</label>
                <input type="text" id="collaboratorinput" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone',$collaborator->phone) }}">
                <div class="invalid-feedback">
                    @error('phone')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
        </div>
            <div class="">
                <button class="btn btn-primary shadow  mt-2">
                    @if ($collaborator->exists)
                        Modifier   
                    @else
                        Créer
                    @endif
                </button>
            </div>
       
    </form>
@endsection