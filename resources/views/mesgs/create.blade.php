@extends('master')

@section('title', 'Creation d\'une MESG')

@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-md-12">
            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Nouvelle Mise En Service Groupée
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="kt-form kt-form--label-right" method="POST" action="/mesg">
                    {{ csrf_field() }}
                    <div class="kt-portlet__body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Programme</label>
                                <input type="text" class="form-control" placeholder="Nom du programme" name="programme">
                            </div>
                            <div class="col-lg-6">
                                <label>Numéro</label>
                                <input type="text" class="form-control" id="num" placeholder="Numéro" name="numero">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Nombre de PCE</label>
                                <input type="text" class="form-control" placeholder="Nombre ?" name="nb_pce">
                            </div>
                            <div class="col-lg-6">
                                <label>Nombre de SG</label>
                                <input type="text" class="form-control" placeholder="Nombre SG ?" name="nb_sg">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Adresse</label>
                                <input type="text" class="form-control" placeholder="Adresse" name="adresse">
                            </div>
                            <div class="col-lg-6">
                                <label>Code Postal</label>
                                <input type="text" class="form-control" placeholder="Code Postal" name="code_postal">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Commune</label>
                                <input type="text" class="form-control" placeholder="Commune" name="commune">
                            </div>
                            <div class="col-lg-6">
                                <label>Adresse</label>
                                <input type="text" class="form-control" placeholder="Adresse" name="adresse">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Délai</label>
                                <input type="text" class="form-control" placeholder="delai" name="delai">
                            </div>
                            <div class="col-lg-6">
                                <label>Groupe Technique</label>
                                <input type="text" class="form-control" placeholder="Groupe Technique" name="groupe_technique">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Date réception de la CM</label>
                                <input class="form-control" type="date" id="date_reception_cm" name="date_reception_cm">
                            </div>
                            <div class="col-lg-6">
                                <label>Date réception du Mail</label>
                                <input class="form-control" type="date" id="date_reception_mail" name="date_reception_mail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Date souhaitée</label>
                                <input class="form-control" type="date" id="date_souhaite" name="date_souhaite">
                            </div>
                            <div class="col-lg-6">
                                <label>Chargé d'affaires</label>
                                    <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                                        <option value="">Select</option>
                                        @foreach ($chargeAffaires as $responsable)
                                            <option value="{{ $responsable->id }}" data-toggle="tooltip" title="Fixe: {{ $responsable->telephone_fixe }} | Portable: {{ $responsable->telephone_portable }}" id="responsable">{{ $responsable->prenom }} {{ $responsable->nom }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="form-group-row">
                            <div id="commentaire" style="height: 325px">
                            </div>
                        </div>
                        <div class="form-group" id="mesg-dropzone">
                            <div class="dropzone dropzone-default dropzone-brand" id="kt_dropzone">
                                <div class="dropzone-msg dz-message needsclick">
                                    <h3 class="dropzone-msg-title">Déposez vos fichiers ici pour les sauvegarder.</h3>
                                    <span class="dropzone-msg-desc">Sauvegarder jusqu'à 10 fichiers simultanément</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                            <button type="reset" class="btn btn-secondary">Annuler</button>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
    </div>
</div>

@endsection
