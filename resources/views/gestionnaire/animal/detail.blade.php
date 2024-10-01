@extends('layouts.sidebar')
@section('content')

<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
            @if ($animal->photo)
                <img src="/storage/{{$animal->photo}}" width="" height="400" />
            @endif
        </div>
      </div>
    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                        <h2 class="card-title">Information sur le boeufs numero <span class="text-info">{{$animal->numero}}</span></h2>
                        <p class="card-description text-success">Information detaiiller</p>
                        <div class="row">
                            <div class="col-12">
                                <ul class="list-star" style="font-size: 20px">
                                    <li>{{$animal->origine}}</li>
                                    <li>{{$animal->robe}}</li>
                                    <li>{{$animal->date_nais}}</li>
                                    <li>{{$animal->date_arriv}}</li>
                                    <li>{{$animal->race}}</li>
                                    <li>{{$animal->capacite_prod}} Litres par traites</li>
                                    <li>Etat: {{$animal->etat_lactation}}</li>
                                    <li>Description: {{$animal->description}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="card-body">
                        <h2 class="card-title">Information sur la production du lait </span></h2>
                        <p class="card-description text-success">Information detaiiller</p>
                        <div class="row">
                            <div class="col-12">
                                    <table class="table " style="font-size: 10px">
                                        <thead>
                                            <th>Quatite</th>
                                            <th>Date</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($laits as $lait)
                                            <tr>
                                                <td>{{$lait->quantite_total}}</td>
                                                <td>{{$lait->date}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-end align-items-between">
                                        {{$laits->Links()}}
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title text-center text-info"><h3>Synchronisation</h3></div>
                <h6>Nombre de synchronisation: {{$nbre_synchronisations}}</h6>
                <h6>Date</h6>
                <ul class="list-arrow">
                    @forelse ($data_synchronisations as $data_synchronisation)
                        <li>{{$data_synchronisation->date_synchronisation}}</li>
                    @empty
                        <p class="text-secondary">Auccun insemination </p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title text-center text-info"><h3>Insemination</h3></div>
                <h6>Nombre d'insemination: {{$nbre_inseminations}}</h6>
                <h6>Date</h6>
                <ul class="list-arrow">
                    @forelse ($data_inseminations as $data_insemination)
                        <li>{{$data_insemination->date_insemination}}</li>
                    @empty
                        <p class="text-secondary">Auccun insemination </p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title text-center text-info"><h3>Test de gestation</h3></div>
                <h6>Nombre de test: {{$nbre_gestations}}</h6>
                <h6>Date</h6>
                <ul class="list-arrow">
                    @forelse ($data_gestations as $data_gestation)
                        <li>{{$data_gestation->date_gestation}}</li>
                    @empty
                        <p class="text-secondary">Auccun test </p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
