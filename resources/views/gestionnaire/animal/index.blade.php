@extends('layouts.sidebar')
@section('title', 'Liste des animaux')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{route('gestionnaire.animal.create')}}" class="btn btn-primary btn-rounded btn-fw">Ajouter un animal</a>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="text-dark">
             <tr class="">
                <th>Image</th>
                <th>Numero</th>
                <th>Origine</th>
                <th>Robe</th>
                <th>Date naissance</th>
                <th>Date d'arrivee</th>
                <th>Race</th>
                <th>Poids</th>
                <th>Description</th>
                <th class="text-end justify-content-between align-ltems-center">Actions</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($animaux as $animal)
                    <tr>
                        <td>
                            @if ($animal->photo)
                                <img src="/storage/{{$animal->photo}}" width="45" height="40" alt="">
                            @endif
                        </td>
                        <td>{{$animal->numero}}</td>
                        <td>{{$animal->origine}}</td>
                        <td>{{$animal->robe}}</td>
                        <td>{{$animal->date_nais}}</td>
                        <td>{{$animal->date_arriv}}</td>
                        <td>{{$animal->race}}</td>
                        <td><{{$animal->capacite_prod}}/td>
                        <td>{{$animal->description}}</td>
                        <td>
                            <div>
                                <div class="d-flex gap-2 w-100 justify-content-end p-1 mt-2">
                                    <a href="{{route('gestionnaire.animal.show', $animal)}}" class="btn btn-info btn-sm"><i class="mdi mdi-eye"></i></a>
                                    <a href="{{route('gestionnaire.animal.edit', $animal)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>

                                    <form action="{{route('gestionnaire.animal.destroy', $animal)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>

                @empty
                    <p class="alert alert-info text-center">Accun animal enregistre</p>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-between">
              {{$animaux->Links()}}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
