@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Bienvenue !</div>

                <div class="card-body">
                    <table id="ficheMembres" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Date de naissance</th>
                                <th>Promotion</th>
                                <th>Filière</th>
                                <th>Afficher</th>
                                <th>Modifier</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($membres as $membre)
                                <tr>
                                    <td>{{$membre->nom}}</td>
                                    <td>{{$membre->prenom}}</td>
                                    <td>{{$membre->date_naissance}}</td>
                                    <td>{{$membre->promotion}}</td>
                                    <td>{{$membre->filiere}}</td>
                                    <td class="text-center"><a href="/afficher/{{$membre->id}}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Voir</a></td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




