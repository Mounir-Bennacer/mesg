@extends('layouts.auth')

@section()
<div class="kt-login__forgot">
    <div class="kt-login__head">
        <h3 class="kt-login__title">Mot de passe oublié ?</h3>
        <div class="kt-login__desc">Veuiller saisir votre
            email pour renouveler votre mot de passe:</div>
    </div>
    <form class="kt-form" method="POST" action="forgot">
        {{ csrf_field() }}
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
        </div>
        <div class="kt-login__actions">
            <button id="kt_login_forgot_submit" class="btn btn-pill kt-login__btn-primary">Demander</button>&nbsp;&nbsp;
            <button id="kt_login_forgot_cancel" class="btn
            btn-pill kt-login__btn-secondary">Annuler</button>
        </div>
    </form>
</div>
@endsection()
