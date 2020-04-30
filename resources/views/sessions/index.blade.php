@extends('layouts.auth')

@section('content')
    <div class="kt-login__signin">
        <div class="kt-login__head">
            <h3 class="kt-login__title">Authentification</h3>
        </div>
        <form class="kt-form" method="POST" action="login">
            {{ csrf_field() }}
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
            </div>
            <div class="input-group">
                <input class="form-control" type="password" placeholder="Mot de Passe" name="password">
            </div>
            <div class="row kt-login__extra">
                <div class="col">
                    <a href="{{ url('register') }}" id="kt_login_forgot" class="kt-link
                        kt-login__link">S'enregistrer</a>
                            <span></span>
                </div>
                <div class="col kt-align-right">
                    <a href="{{ url('forgot') }}" id="kt_login_forgot" class="kt-link kt-login__link">Mot de passe oublié ?</a>
                </div>
            </div>
            <div class="kt-login__actions">
                <button id="kt_login_signin_submit" class="btn
                btn-pill
                kt-login__btn-primary">Authentification</button>
            </div>
        </form>
    </div>
@endsection()
