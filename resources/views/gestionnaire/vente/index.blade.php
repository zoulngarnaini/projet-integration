@extends('layouts.sidebar')
@section('title', 'Laits')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{route('gestionnaire.vente.create')}}" class="btn btn-primary btn-rounded btn-fw">Enregistre</a>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="text-dark">
             <tr class="table-primary">
                <th>Client</th>
                <th>Quantite total du lait</th>
                <th>Quantite vendu</th>
                <th>Date</th>
                <th class="text-end justify-content-between align-ltems-center">Actions</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($ventes as $vente)
                    <tr>
                        <td>{{$vente->client->nom}} {{$vente->client->prenom}}</td>
                        <td>{{$vente->lait->quantite_total}} Litres</td>
                        <td>{{$vente->quantite}} Litres</td>
                        <td>{{$vente->date}}</td>
                        <td>
                            <div>
                                <div class="d-flex gap-2 w-100 justify-content-end p-1 mt-2">
                                    <a href="{{route('gestionnaire.vente.edit', $vente)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>
                                    <form action="{{route('gestionnaire.vente.destroy', $vente)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>

                @empty
                    <p class="alert alert-info text-center">Accun vente enregistre</p>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-between">
            {{$ventes->Links()}}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
