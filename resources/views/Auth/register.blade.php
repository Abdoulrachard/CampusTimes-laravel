@extends('Base.baseRl')
@section('title') Inscription @endsection

@section('content') 
   <div class="container  ">
    <div class="row shadow ">
        <div class=" col-md-6 p-none none">
                <img src="{{asset("/storage/image/cover.jpg") }}" class="cover_login"  alt="">
        </div>
        <div class="col-md-6  p-none">
            <form action="{{ route('auth.register') }}" method="post" class="px-5 py-3 bg-white h-100">
                @csrf
                <div class="d-flex justify-content-center align-items-center">
                    <div class="img"><img src="{{asset('/storage/image/logouac.png')}}" class="logouac" alt=""></div>
                </div>
                <div class="entete">
                    <h3 class="fw-medium ">Bienvenu sur Campustimes</h3>
                    <span class="colorize">Avez déja un compte ?</span>
                    <span><a href="{{route('auth.login') }}">Se connecter</a></span>
                    <h4 class="mt-2 mb-2">Inscription</h4>
                </div>
                <div class="row ">
                    <div class="col-md-6 form-group">
                        <label for="firstname" class="form-label w-100 mb-1 text-muted position-relative">Prénom(s)
                        <input type="text" name="firstname" class="mb-2 form-control input-custom @error('firstname') is-invalid @enderror" value="{{ old('firstname')}}">
                        <span class="position-absolute position-custom "><i class="bx bxs-user-circle"></i></span>
                        </label>
                        @error('firstname')
                            <div class="invalid-feedback">
                                {{ $message}}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="lastname" class="form-label w-100 mb-1 text-muted position-relative">Nom
                        <input type="text" name="lastname" class="mb-2 form-control input-custom @error('lastname') is-invalid @enderror" value="{{ old('lastname')}}">
                        <span class="position-absolute position-custom "><i class="bx bxs-user-circle"></i></span>
                        </label>
                        @error('lastname')
                            <div class="invalid-feedback">
                                {{ $message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6 form-group">
                        <label for="email" class=" form-label w-100 mb-1 text-muted position-relative">Email
                        <input type="email" name="email" class="mb-2 form-control input-custom @error('email') is-invalid @enderror">
                        <span class="position-absolute position-custom "><i class="bx bxs-envelope"></i></span>
                        </label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message}}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="classe" class="form-label w-100 mb-1 text-muted position-relative" >Télephone
                            <input name="phone" id="classe" class="mb-2 form-control input-custom @error('phone') is-invalid @enderror" value="{{ old('phone')}}">
                        <span class="position-absolute position-custom "><i class="bx bxs-phone"></i></span>
                        </label>
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message}}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="classe" class="form-label w-100 mb-1 text-muted position-relative" >Classe
                        <select name="level_id" id="classe" class="mb-2 form-control input-custom @error('level_id') is-invalid @enderror">
                            <option value="">Selectioner  classe</option>
                            @foreach ($levels as $level)
                                <option value="{{$level->id}}"> {{ $level->label }}</option>
                            @endforeach
                        </select>
                        <span class="position-absolute position-custom "><i class="bx  bxs-chevron-down"></i></span>
                        </label>
                        @error('level_id')
                            <div class="invalid-feedback">
                                {{ $message}}
                            </div>
                        @enderror
                    </div>
                    
                </div>
                <div class="row ">
                    <div class="col-md-6 form-group">
                        <label for="password" class=" form-label w-100 mb-1 text-muted position-relative">Mot de passe
                            <input type="password" name="password" class="mb-2 form-control input-custom @error('password') is-invalid @enderror">
                        <span class="position-absolute position-custom "><i class="bx bxs-show"></i></span>
                        </label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="classe" class="form-label w-100 mb-1 text-muted position-relative" >Confirmer mot de passe
                        <input name="password_confirmation" type="password" id="classe" class="mb-2 form-control input-custom @error('password_confirm') is-invalid @enderror">
                        <span class="position-absolute position-custom "><i class="bx bxs-show"></i></span>    
                    </label>
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message}}
                            </div>
                        @enderror
                    </div>
                </div>
                    
                    <button class="btn btn-custom w-100 mt-3 shadow">S'inscrire</button>
                    <div>
                        <p class="mt-3 text-center">OU</p>
                    </div>
                    <div class="socialink text-center">
                        <ul>
                            <li><i class="bx bxl-google-plus"></i></li>
                            <li><i class="bx bxl-facebook-circle"></i></li>
                            <li><i class="bx bxl-twitter"></i></li>
                            <li><i class="bx bxl-instagram"></i></li>
                        </ul>
                    </div>
            </form>
        </div>
   </div>
   </div>
@endsection
