@extends('layouts.sidebar')
@section('title', 'Liste des alimants')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{route('gestionnaire.alimant.create')}}" class="btn btn-primary btn-rounded btn-fw">Enregistre</a>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="text-dark">
             <tr class="">
                <th>Nom</th>
                <th>Quantite</th>
                <th>Description</th>
                <th class="text-end justify-content-between align-ltems-center">Actions</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($alimants as $alimant)
                    <tr>
                        <td>{{$alimant->nom}}</td>
                        <td>{{$alimant->quantite}}</td>
                        <td>{{$alimant->description}}</td>
                        <td>
                            <div class="d-flex gap-2 w-100 justify-content-end p-1 mt-2">
                                <a href="{{route('gestionnaire.alimant.edit', $alimant)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>

                                <form action="{{route('gestionnaire.alimant.destroy', $alimant)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>

                @empty
                    <p class="alert alert-info text-center">Accun aliment enregistre</p>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-between">
            {{$alimants->Links()}}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
