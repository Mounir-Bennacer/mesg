@extends('master')

@section('title', 'Creation d\'une MESG')

@section('content')

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-md-6">
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
                <form class="kt-form" method="POST" action="/mesg">
                    {{ csrf_field() }}
                    <div class="kt-portlet__body">
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" placeholder="description du chantier" name="description">
                        </div>
                        <div class="form-group">
                            <label>Numéro</label>
                            <input type="text" class="form-control" id="num" placeholder="Numéro" name="numero">
                        </div>
                        <div class="form-group">
                            <label>Programme</label>
                            <input type="text" class="form-control" placeholder="Nom du programme" name="programme">
                        </div>
                        <div class="form-group">
                            <label>PCE</label>
                            <input type="text" class="form-control" placeholder="PCE" name="pce">
                        </div>
                        <div class="form-group">
                            <label>Nombre de PCE</label>
                            <input type="text" class="form-control" placeholder="Nombre ?" name="nb_pce">
                        </div>
                        <div class="form-group">
                            <label>Nombre de SG</label>
                            <input type="text" class="form-control" placeholder="Nombre SG ?" name="nb_sg">
                        </div>
                        <div class="form-group">
                            <label>Batiment</label>
                            <input type="text" class="form-control" placeholder="Batiment" name="batiment">
                        </div>
                        <div class="form-group">
                            <label>Adresse</label>
                            <input type="text" class="form-control" placeholder="Adresse" name="adresse">
                        </div>
                        <div class="form-group">
                            <label>Commune</label>
                            <input type="text" class="form-control" placeholder="Commune" name="commune">
                        </div>
                        <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">Date réception du Mail</label>
                            <div class="col-10">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="date_reception_mail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">Date réception de la CM</label>
                            <div class="col-10">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="date_reception_cm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Délai</label>
                            <input type="text" class="form-control" placeholder="delai" name="delai">
                        </div>
                        <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">Date souhaitée</label>
                            <div class="col-10">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="date_souhaite">
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
