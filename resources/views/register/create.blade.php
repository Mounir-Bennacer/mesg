@extends('layouts.auth')

@section('content')
    <div>
        <div class="kt-login__head">
            <h3 class="kt-login__title">Enregistrement</h3>
        </div>
        <form class="kt-login__form kt-form" method="POST" action="register">
            {{ csrf_field() }}
            <div class="input-group">
                <input class="form-control" type="text" placeholder="nom" name="nom">
            </div>
            <div class="input-group">
                <input class="form-control" type="text" placeholder="prenom" name="prenom">
            </div>
            <div class="input-group">
                <input class="form-control" type="text" placeholder="nni" name="nni">
            </div>
            <div class="input-group">
                <input class="form-control" type="text" placeholder="gaia" name="gaia">
            </div>
            <div class="input-group">
                <input class="form-control" type="email" placeholder="Email" name="email" autocomplete="off">
            </div>
            <div class="input-group">
                <input class="form-control" type="password" placeholder="Mot de passe" name="password">
            </div>
            <div class="input-group">
                <input class="form-control" type="password" placeholder="Confirmation du mot de passe" name="rpassword">
            </div>
            <div class="kt-login__actions">
                <button type="submit" id="kt_login_signup_submit" class="btn
                btn-pill kt-login__btn-primary">Authentifier</button>&nbsp;&nbsp;
            <button id="kt_login_signup_cancel" class="btn
            btn-pill kt-login__btn-secondary">Annuler</button>
            </div>
        </form>
    </div>
@endsection
