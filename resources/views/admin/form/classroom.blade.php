@extends('base.base')
@section('title', $classroom->exists ? "Modifier une salle de classe" : "Créer une salle de classe") 
@section('content')
    <form action="{{ route($classroom->exists ? 'classroom.update' : 'classroom.store' , $classroom) }}" method="post" class="p-4">
        @method($classroom->exists ? 'PATCH' : 'POST')
        @csrf
        <h5 class="">
            @if ($classroom->exists)
            Modifier une salle de classe
         @else
            Créer une salle de classe
         @endif
        </h5>
            <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <label for="classroominput" class="mt-2">Label</label>
                <input type="text" id="classroominput" name="label" class="form-control @error('label') is-invalid @enderror" value="{{ old('label',$classroom->label) }}">
                <div class="invalid-feedback">
                    @error('label')
                       {{ $message }} 
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                    <label for="classroominput" class="mt-2">Capacité</label>
                    <input type="number" id="classroominput" name="capacity" class="form-control @error('capacity') is-invalid @enderror" value="{{ old('capacity',$classroom->capacity) }}">
                    <div class="invalid-feedback">
                        @error('capacity')
                           {{ $message }} 
                        @enderror
                    </div>
                </div>
            </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <label for="classroominput" class="mt-2">Descriptions</label>
                        <textarea type="text" id="classroominput" name="description" class="form-control @error('description') is-invalid @enderror" >{{ old('description',$classroom->description)  }}</textarea>
                        <div class="invalid-feedback">
                            @error('description')
                               {{ $message }} 
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-check form-switch mt-2">
                    <input type="checkbox" name="status"  class="form-check-input "  @checked(old('status',$classroom->status)) >
                    <label for="" class="form-check-label " > Disponible ou non </label>
                </div>
            <div class="">
                <button class="btn btn-primary  mt-4">
                    @if ($classroom->exists)
                        Modifier   
                    @else
                        Créer
                    @endif
                </button>
            </div>
        
        </div>
    </form>
@endsection