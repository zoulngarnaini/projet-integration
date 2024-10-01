@extends('layouts.sidebar')
@section('title', 'Traite')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{route('gestionnaire.traite.create')}}" class="btn btn-primary btn-rounded btn-fw">Enregistre</a>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="text-dark">
             <tr class="table-primary">
                <th>Animal</th>
                <th>Quantite du lait</th>
                <th>Periode</th>
                <th>Superviseur</th>
                <th>Date</th>
                <th class="text-end justify-content-between align-ltems-center">Actions</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($traites as $traite)
                    <tr>
                        <td>{{$traite->animal->numero}}</td>
                        <td>{{$traite->lait->quantite_total}} Litres</td>
                        <td>{{$traite->periode}}</td>
                        <td>{{$traite->superviseur}}</td>
                        <td>{{$traite->lait->date}}</td>
                        <td>
                            <div>
                                <div class="d-flex gap-2 w-100 justify-content-end p-1 mt-2">
                                    <a href="{{route('gestionnaire.traite.edit', $traite)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>
                                    <form action="{{route('gestionnaire.traite.destroy', $traite)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>

                @empty
                    <p class="alert alert-info text-center">Accun lait enregistre</p>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-between">
            {{$traites->Links()}}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
