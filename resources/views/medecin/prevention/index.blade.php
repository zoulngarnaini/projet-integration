@extends('layouts.sidebarm')
@section('title', 'Les fiches de controle')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{route('medecin.prevent.create')}}" class="btn btn-primary btn-rounded btn-fw">Enregistre un fiche de controle</a>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="text-dark">
             <tr class="">
                 <th>Docteur</th>
                 <th>Animal</th>
                 <th>Nom</th>
                 <th>Etat</th>
                <th>Produit</th>
                <th class="text-end justify-content-between align-ltems-center">Action</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($preventions as $prevent)
                    <tr>
                        <td>{{$prevent->user->name}}</td>
                        <td>{{$prevent->animal->numero}}</td>
                        <td>{{$prevent->nom}}</td>
                        <td>
                            @if ($prevent->etat == 0)
                                <label class="badge badge-danger">En cours </label>
                            @else
                                <label class="badge badge-info">Pending</label>
                            @endif
                        </td>
                        <td>{{$prevent->produit->nom}}</td>
                        <td>
                            <div class="d-flex gap-2 w-100 justify-content-end p-1 mt-2">
                                <a href="{{route('medecin.prevent.edit', $prevent)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>
                            </div>
                        </td>
                    </tr>

                @empty
                    <p class="alert alert-info text-center">Accun prevention animal enregistre</p>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-between">
            {{$preventions->Links()}}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
