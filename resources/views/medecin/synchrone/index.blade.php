@extends('layouts.sidebarm')
@section('title', 'Synchronique')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{route('medecin.insemination.index')}}" class="btn btn-info btn-rounded  btn-fw">Isemiantion</a>
            <a href="{{route('medecin.synchrone.index')}}" class="btn btn-info btn-rounded  btn-fw">Synchronisation</a>
            <a href="{{route('medecin.test.index')}}" class="btn btn-info btn-rounded  btn-fw">Test de gestation</a>
            <a href="{{route('medecin.synchrone.create')}}" class="btn btn-primary btn-rounded btn-fw">Synchronise</a>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="text-dark">
             <tr class="table-primary">
                <th>Non du docteur</th>
                <th>Numero animal</th>
                <th>Date d'insemination</th>
                <th>Etata de la synchronisation</th>
                <th class="text-end justify-content-between align-ltems-center">Actions</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($synchrones as $synchrone)
                    <tr>
                        <td>{{$synchrone->user->name}}</td>
                        <td>{{$synchrone->animal->numero}}</td>
                        <td>{{$synchrone->date_synchronisation}}</td>
                        <td>
                            @if ($synchrone->etat == '0')
                                <label class="badge badge-info">Synchronisation en cours</label>
                            @else
                                <label class="badge badge-success">Synchronisation reussit</label>
                            @endif
                        </td>
                        <td>
                            <div>
                                <div class="d-flex gap-2 w-100 justify-content-end p-1 mt-2">
                                    <a href="{{route('medecin.synchrone.edit', $synchrone)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>
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
            {{$synchrones->Links()}}
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
