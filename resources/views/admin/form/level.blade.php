@extends('base.base')
@section('title', $level->exists ? "Modifier un niveau" : "Créer un niveau") 
@section('content')
    <form action="{{ route($level->exists ? 'level.update' : 'level.store' , $level) }}" method="post" class="p-4">
        @method($level->exists ? 'PATCH' : 'POST')
        @csrf
        <h5 class="">
            @if ($level->exists)
            Modifier un niveau
         @else
            Créer un niveau
         @endif
        </h5>
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 ">
                <label for="levelinput" class="mt-2">Level</label>
                <input type="text" id="levelinput" name="label" class="form-control @error('label'): is-invalid @enderror" value="{{ old('label',$level->label) }}">
                <div class="invalid-feedback">
                    @error('label')
                       {{ $message }} 
                    @enderror
                </div>
            
            <div class="">
                <button class="btn btn-primary shadow  mt-2">
                    @if ($level->exists)
                        Modifier   
                    @else
                        Créer
                    @endif
                </button>
            </div>
        </div>
        </div>
    </form>
@endsection