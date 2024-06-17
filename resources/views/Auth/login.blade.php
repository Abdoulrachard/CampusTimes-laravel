@extends('Base.baseRl')
@section('title') Connexion @endsection

@section('content')
    <div class="container  ">
        <div class="row shadow">
            <div class=" col-md-6 p-none none">
                <img src="{{ asset('/storage/image/cover.jpg') }}" class="cover_login" alt="">
            </div>
            <div class="col-md-6  p-none">
                <form action="" method="post" class="p-5 custom-p bg-white h-100">
                    @csrf
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="img"><img src="{{ asset('/storage/image/logouac.png') }}" class="logouac"
                                alt=""></div>
                    </div>
                    <div class="entete">
                        <h3 class="fw-medium ">Bienvenu sur Campustimes</h3>
                        <span class="colorize">Besoin d'un compte ?</span>
                        <span><a href="{{ route('auth.register') }}">Créer un compte</a></span>
                        <h4 class="mt-3 mb-3">Se connecter</h4>
                    </div>
                    @error('email')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="form-group">
                        <label for="email" class=" form-label mb-1 w-100 text-muted position-relative">Email
                            <input type="email" name="email" class="mb-2 form-control input-custom">
                            <span class="position-absolute position-custom-2"><i class="bx bxs-user-circle"></i></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="password" class=" form-label w-100 mb-1 text-muted position-relative">Mot de passe
                            <input type="password" name="password" class="mb-2 form-control input-custom">
                            <span class="position-absolute position-custom-2 "><i class="bx bxs-show"></i></span>
                        </label>
                    </div>

                    <button class="btn btn-custom w-100 mt-3 shadow">Se connecter</button>
                    <div class="d-flex span-custom justify-content-between mt-3">
                        <span class="form-check">
                            <input type="checkbox" name="remenber" id="" class=" form-check-input">
                            <label for="" class="form-check-label text-muted">Se souvenir de moi</label>
                        </span>
                        <span><a href="">Mot de passe oublié ?</a></span>
                    </div>
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
