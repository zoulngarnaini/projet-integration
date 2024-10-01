@extends('layouts.sidebarm')
@section('title', 'Les etats des santes')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{route('medecin.etat.create')}}" class="btn btn-primary btn-rounded btn-fw">Ajouter un animal</a>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="text-dark">
             <tr class="">
                <th>Nom</th>
                <th>Date debut</th>
                <th>Date sortie</th>
                <th class="text-end justify-content-between align-ltems-center">Actions</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($etats as $etat)
                    <tr>
                        <td>{{$etat->nom}}</td>
                        <td>{{$etat->date_deb}}</td>
                        <td>{{$etat->date_sort}}</td>
                        <td>
                            <div class="d-flex gap-2 w-100 justify-content-end p-1 mt-2">
                                <a href="{{route('medecin.etat.edit', $etat)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>
                            </div>
                        </td>
                    </tr>

                @empty
                    <p class="alert alert-info text-center">Accun etat sante animal enregistre</p>
                @endforelse
            </tbody>
          </table>
          <div class="justify-content-end align-items-between">
            {{$etats->Links()}}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
