@extends('Base.base')
 @section('title') Profile @endsection

 @section('content') 
 <form action="{{ route('profile.update')}}" method="post" class="p-4 margin-update" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="text-center">
    <label for="profil">
        <div class="  mb-4  position-relative image-ctn"title="Changer de photo" style="width: 150px; height: 150px; cursor: pointer;">
            <img src="{{ auth()->user()->storageUrl() }}" alt="logo teacher" class="w-100 h-100 border border-3 rouned-3" style="border-radius: 150px;">
            <img src="{{'/storage/image/profil.svg' }}" title="Changer de photo" alt="logo teacher" class="position-absolute border border-3 " style="height:30px ; width:30px ; border-radius:50% ; padding:5px; background-color:#dc3545;top:80% ;left:70% ; ">
        </div>
        <input type="file" id="profil" class="d-none" name="profil">
                    @error('profil')
                            <div style="color:#dc3545">
                                {{ $message }}
                            </div>
                    @enderror
    </label>
</div>
            <div class="">
                <h6 class="text-muted my-3 "> <i class='bx bxs-user-check' style="font-size: 22px;" ></i> Compte : <span style="color: #3d5ee1">{{ auth()->user()->role->label }}</span></h6>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="lastname" class=" form-label w-100 mb-1 text-muted position-relative">Lastname
                        <input type="text" id="lastname" name="lastname" class="mb-2 form-control input-customs "value="{{ old('firstname', auth()->user()->firstname) }}">
                        <span class="position-absolute position-custom-2 "><i class="bx bxs-user-circle"></i></span>
                    @error('lastname')
                            <div style="color:#dc3545">
                                {{ $message }}
                            </div>
                    @enderror
                    </label>
                </div>  
                <div class="col-md-6">
                    <label for="firstname" class=" form-label w-100 mb-1 text-muted position-relative">Firstname
                        <input type="text" id="password" name="firstname" class="mb-2 form-control input-customs " value="{{ old('lastname', auth()->user()->lastname) }}">
                        <span class="position-absolute position-custom-2 "><i class="bx bxs-user-circle"></i></span>
                        @error('firstname')
                            <div style="color:#dc3545">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>
                </div>   
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="email" class=" form-label mb-1 w-100 text-muted position-relative">Email
                        <input type="email" name="email" class="mb-2 form-control input-customs"value="{{ old('email', auth()->user()->email) }}">
                        <span class="position-absolute position-custom-2"><i class="bx bx bxs-envelope"></i></span>
                        @error('email')
                            <div style="color:#dc3545">
                                {{ $message }}
                            </div>
                    @enderror
                    </label>
                </div>
                <div class="col-md-6">
                    <label for="email" class=" form-label mb-1 w-100 text-muted position-relative">Telephone
                        <input type="text" name="phone" class="mb-2 form-control input-customs"value="{{ old('phone', auth()->user()->phone) }}">
                        <span class="position-absolute position-custom-2"><i class="bx bxs-phone"></i></span>
                    </label>
                </div>
            </div>
            <div class="d-flex justify-content-end gtb">
                <button class="btn btn-primary gta py-1 px-5 rounded-1 ">Modifier</button>
            </div>
</form>
<hr>
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