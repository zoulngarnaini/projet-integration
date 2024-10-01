@extends('layouts.sidebar')
@section('title', 'Liste des alimants consomme')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{route('gestionnaire.consomme.create')}}" class="btn btn-primary btn-rounded btn-fw">Enregistre</a>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="text-dark">
             <tr class="">
                <th>Alimant</th>
                <th>Quantite</th>
                <th>Jour</th>
                <th class="text-end d-flex justify-content-end align-ltems-between">Actions</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($consommations as $consomme)
                    <tr>
                        <td>{{$consomme->alimantation->nom}}</td>
                        <td>{{$consomme->quantite}}</td>
                        <td>{{$consomme->jour}}</td>
                        <td>
                            <div class="d-flex gap-2 w-100 justify-content-end p-1 mt-2">
                                <a href="{{route('gestionnaire.consomme.edit', $consomme)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>

                                <form action="{{route('gestionnaire.consomme.destroy', $consomme)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>

                @empty
                    <p class="alert alert-info text-center">Accun aliment consomme enregistre</p>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-between">
            {{$consommations->Links()}}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
