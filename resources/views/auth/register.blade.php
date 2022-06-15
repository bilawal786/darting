@extends('front.layouts.layout')

@section('content')
    <div class="page-header-section style-1 login-section padding-tb">
        <div class="container">
            <div class="account-wrapper">
                <h3 class="title">S'inscrire</h3>
                <form method="POST" action="{{ route('register') }}" class="account-form">
                    @csrf
                    <div class="form-group">
                        <input placeholder="Nom et prénom" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input placeholder="Mot de passe" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmez le mot de passe">
                    </div>
                    <div class="form-group">
                        <button class="d-block lab-btn"><span>Commencez maintenant</span></button>
                    </div>
                </form>
                <div class="account-bottom">
                    <span class="d-block cate pt-10">Êtes vous membre? <a href="{{route('login')}}">Connexion</a></span>
                </div>
            </div>
        </div>
    </div>

@endsection
