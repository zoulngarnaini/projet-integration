@extends('layouts.sidebar')
@section('title', 'Insemination artificiel')
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
             <tr class="table-primary">
                <th>Non du docteur</th>
                <th>Numero animal</th>
                <th>Date d'insemination</th>
                <th>Etat</th>
                <th class="d-flex justify-content-end align-ltems-between">Actions</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($inseminations as $insemination)
                    <tr>
                        <td>{{$insemination->user->name}}</td>
                        <td>{{$insemination->animal->numero}}</td>
                        <td>{{$insemination->date_insemination}}</td>
                        <td>{{$insemination->etat}}</td>
                        <td>
                            <div class="d-flex justify-content-end align-ltems-between">
                                <div class="d-flex gap-2 w-100 justify-content-end p-1 mt-2">
                                    <a href="{{route('medecin.insemination.edit', $insemination)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>
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
            {{$inseminations->Links()}}
        </div>
        </div>
      </div>
    </div>
</div>

@endsection
