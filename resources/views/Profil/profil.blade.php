@extends('Base.base')
 @section('title') Profile @endsection

 @section('content') 
 <form action="{{ route('profile.password.update')}}" method="post" class="p-4 margin-update">
    @method('PUT')
    @csrf
        
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="current_password" class=" form-label w-100 mb-1 text-muted position-relative">Mot de passe actuel
                        <input type="password" id="current_password" name="current_password" class="mb-2 form-control input-customs  @error('current_password') is-invalid @enderror">
                        <span class="position-absolute position-custom-2 "><i class="bx bxs-show"></i></span>
                    
                    @error('current_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
                </label>
                </div>  
                <div class="col-md-4">
                    <label for="password" class=" form-label w-100 mb-1 text-muted position-relative">Nouveau mot de passe
                        <input type="password" id="password" name="password" class="mb-2 form-control input-customs @error('password') is-invalid @enderror">
                        <span class="position-absolute position-custom-2 "><i class="bx bxs-show"></i></span>
                    
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>
                </div>  
                <div class="col-md-4">
                    <label for="passwordconf" class=" form-label w-100 mb-1 text-muted position-relative">Confirmer mot de passe
                        <input type="password" id="passwordconf" name="password_confirmation" class="mb-2 form-control input-customs @error('password_confirmation') is-invalid @enderror">
                        <span class="position-absolute position-custom-2 "><i class="bx bxs-show"></i></span>
    
                    @error('passwordconf')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>
                </div>  
            </div>
            <div class="d-flex justify-content-end gtb">
                <button class="btn btn-primary gta py-1 px-5 rounded-1 ">Modifier</button>
            </div>
</form>
 @endsection