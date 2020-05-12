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
                                <label>Description</label>
                                <input type="text" class="form-control" placeholder="description du chantier" name="description">
                            </div>
                            <div class="col-lg-6">
                                <label>Numéro</label>
                                <input type="text" class="form-control" id="num" placeholder="Numéro" name="numero">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Programme</label>
                                <input type="text" class="form-control" placeholder="Nom du programme" name="programme">
                            </div>
                            <div class="col-lg-6">
                                <label>PCE</label>
                                <input type="text" class="form-control" placeholder="PCE" name="pce">
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
                                <label>Batiment</label>
                                <input type="text" class="form-control" placeholder="Batiment" name="batiment">
                            </div>
                            <div class="col-lg-6">
                                <label>Adresse</label>
                                <input type="text" class="form-control" placeholder="Adresse" name="adresse">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Commune</label>
                                <input type="text" class="form-control" placeholder="Commune" name="commune">
                            </div>
                            <div class="col-lg-6">
                                <label>Délai</label>
                                <input type="text" class="form-control" placeholder="delai" name="delai">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="date_reception_cm">Date réception de la CM</label>
                                <div class="col-12">
                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="date_reception_cm">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="example-date-input">Date réception du Mail</label>
                                <div class="col-12">
                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="date_reception_mail">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label for="example-date-input">Date souhaitée</label>
                                <div class="col-12">
                                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="date_souhaite">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Chargé d'affaires</label>
                                <div class="col-12">
                                    <select class="form-control kt-selectpicker" data-size="7" data-live-search="true">
                                        <option value="">Select</option>
                                        @foreach ($chargeAffaires as $responsable)
                                            <option value="{{ $responsable->id }}">{{ $responsable->prenom }} {{ $responsable->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div id="commentaire" style="height: 325px">
                            </div>
                        </div>
                        <div class="form-group" id="mesg-dropzone">
                            <div class="col-lg-12">
                                <div class="dropzone dropzone-default dropzone-brand" id="kt_dropzone">
                                    <div class="dropzone-msg dz-message needsclick">
                                        <h3 class="dropzone-msg-title">Déposez vos fichiers ici pour les sauvegarder.</h3>
                                        <span class="dropzone-msg-desc">Sauvegarder jusqu'à 10 fichiers simultanément</span>
                                    </div>
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