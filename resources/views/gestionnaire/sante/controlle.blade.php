@extends('layouts.sidebar')
@section('title', 'Les fiches de controlles')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
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
                <th class="text-end d-flex justify-content-end align-ltems-between">Action</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($controlles as $controlle)
                    <tr>
                        <td>{{$controlle->user->name}}</td>
                        <td>{{$controlle->animal->numero}}</td>
                        <td>{{$controlle->symptome}}</td>
                        <td>{{$controlle->diagnostique}}</td>
                        <td>{{$controlle->traitement}}</td>
                        <td>{{$controlle->date}}</td>
                        <td>{{$controlle->etat_sante->nom}}</td>
                        <td>
                            @if ($controlle->etat_lactation == 'Lactation suspendu')
                                <label class="badge badge-danger">Synchronisation en cours</label>
                            @else
                                <label class="badge badge-info">Synchronisation en cours</label>
                            @endif
                        </td>
                        <td class="text-end d-flex justify-content-end align-ltems-between">
                            <form action="{{route('gestionnaire.destroy', $controlle)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></button>
                            </form>
                        </td>
                    </tr>

                @empty
                    <p class="alert alert-info text-center">Accun fiche de controle enregistre</p>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-between">
            {{$controlles->Links()}}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
