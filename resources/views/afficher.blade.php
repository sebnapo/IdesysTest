@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center"><a href="{{ url()->previous() }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Retour</a>Fiche de {{$membre->prenom}} {{$membre->nom}}</div>

                    <div class="card-body">
                        <h5 class="card-title text-center">Information personnelles</h5>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nom</span>
                            </div>
                            <input type="text" class="form-control" value="{{$membre->nom}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Prenom</span>
                            </div>
                            <input type="text" class="form-control" value="{{$membre->prenom}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Date de Naissance</span>
                            </div>
                            <input type="text" class="form-control" value="{{$membre->date_naissance}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Telephone</span>
                            </div>
                            <input type="text" class="form-control" value="{{$membre->telephone}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Poste Actuel</span>
                            </div>
                            <input type="text" class="form-control" value="{{$membre->poste_actuel}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Entreprise</span>
                            </div>
                            <input type="text" class="form-control" value="{{$membre->entreprise}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Notes Generales</span>
                            </div>
                            <textarea type="text" class="form-control" aria-describedby="basic-addon1" readonly>{{$membre->notes_generales}}</textarea>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Promotion</span>
                            </div>
                            <input type="text" class="form-control" value="{{$membre->promotion}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Filiere</span>
                            </div>
                            <input type="text" class="form-control" value="{{$membre->filiere}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        </div>
                        <h5 class="card-title text-center">Information sur le(s) mandat(s)</h5>
                        @foreach($membre->mandats as $mandat)
                            <h6 class="card-title text-center">Mandant numéro : {{ $loop->iteration }}</h6>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Année</span>
                                </div>
                                <input type="text" class="form-control" value="{{$mandat->annee}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Poste</span>
                                </div>
                                <input type="text" class="form-control" value="{{$mandat->poste}}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




