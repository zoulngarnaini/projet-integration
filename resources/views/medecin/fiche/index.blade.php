@extends('layouts.sidebarm')
@section('title', 'Les fiches de controle')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{route('medecin.fiche.create')}}" class="btn btn-primary btn-rounded btn-fw">Enregistre un fiche de controle</a>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="text-dark">
             <tr class="">
                 <th>Docteur</th>
                 <th>Animal</th>
                <th>Symtome</th>
                <th>Diagnostique</th>
                <th>Traitement</th>
                <th>Date</th>
                <th>Etat sante</th>
                <th>Etat de lactation</th>
                <th class="text-end justify-content-between align-ltems-center">Action</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($fiches as $fiche)
                    <tr>
                        <td>{{$fiche->user->name}}</td>
                        <td>{{$fiche->animal->numero}}</td>
                        <td>{{$fiche->symptome}}</td>
                        <td>{{$fiche->diagnostique}}</td>
                        <td>{{$fiche->traitement}}</td>
                        <td>{{$fiche->date}}</td>
                        <td>{{$fiche->etat_sante->nom}}</td>
                        <td>
                            {{$fiche->etat_lactation}}
                        </td>
                        <td>
                            <div class="d-flex gap-2 w-100 justify-content-end p-1 mt-2">
                                <a href="{{route('medecin.fiche.edit', $fiche)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>
                            </div>
                        </td>
                    </tr>

                @empty
                    <p class="alert alert-info text-center">Accun fiche de controle enregistre</p>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-between">
            {{$fiches->Links()}}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
