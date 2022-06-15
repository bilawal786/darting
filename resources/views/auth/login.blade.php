@extends('front.layouts.layout')

@section('content')

    <!-- ==========login Section start Here========== -->
    <div class="page-header-section style-1 login-section padding-tb">
        <div class=" container">
            <div class="account-wrapper">
                <h3 class="title">Connexion</h3>
                <form method="POST" action="{{ route('login') }}" class="account-form">
                    @csrf
                    <div class="form-group">
                        <input placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                            <div class="checkgroup">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">Souviens-toi de moi</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="d-block lab-btn"><span>Login</span></button>
                    </div>
                </form>

                <div class="account-bottom">
                    <span class="d-block cate pt-10">Vous n'avez pas de compte? <a href="{{route('register')}}"> S'inscrire</a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Login Section ends Here========== -->

@endsection
