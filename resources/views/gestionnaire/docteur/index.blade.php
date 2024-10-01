@extends('layouts.sidebar')
@section('title', 'Liste des docteurs')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{route('gestionnaire.docteur.create')}}" class="btn btn-primary btn-rounded btn-fw">Enregistre un docteur</a>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="text-dark">
             <tr class="table-primary">
                <th>Nom</th>
                <th>Prenom</th>
                <th>Specialite</th>
                <th class="text-end justify-content-between align-ltems-center">Actions</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($docteurs as $docteur)
                    <tr>
                        <td>{{$docteur->nom}}</td>
                        <td>{{$docteur->prenom}}</td>
                        <td>{{$docteur->specialite}}</td>>
                        <td>
                            <div>

                            </div>
                        </td>
                    </tr>

                @empty
                    <p class="alert alert-info text-center">Accun docteur enregistre</p>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-between">
            {{$docteurs->Links()}}
        </div>
        </div>
      </div>
    </div>
</div>

@endsection
