@extends('layouts.sidebar')
@section('title', 'Liste des clients')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{route('gestionnaire.client.create')}}" class="btn btn-primary btn-rounded btn-fw">Enregistre un docteur</a>
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
                @forelse ($clients as $client)
                    <tr>
                        <td>{{$client->nom}}</td>
                        <td>{{$client->prenom}}</td>
                        <td>{{$client->adresse}}</td>>
                        <td>
                            <div>
                                <div class="d-flex gap-2 w-100 justify-content-end p-1 mt-2">
                                    <a href="{{route('gestionnaire.client.edit', $client)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>
                                    <form action="{{route('gestionnaire.client.destroy', $client)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>

                @empty
                    <p class="alert alert-info text-center">Accun docteur enregistre</p>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-between">
            {{$clients->Links()}}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
