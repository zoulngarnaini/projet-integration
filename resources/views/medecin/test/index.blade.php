@extends('layouts.sidebarm')
@section('title', 'Teste de gestation')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{route('medecin.insemination.index')}}" class="btn btn-info btn-rounded  btn-fw">Isemiantion</a>
            <a href="{{route('medecin.synchrone.index')}}" class="btn btn-info btn-rounded  btn-fw">Synchronisation</a>
            <a href="{{route('medecin.test.index')}}" class="btn btn-info btn-rounded  btn-fw">Test de gestation</a>
            <a href="{{route('medecin.test.create')}}" class="btn btn-primary btn-rounded btn-fw">Enregistre</a>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="text-dark">
             <tr class="table-primary">
                <th>Non du docteur</th>
                <th>Numero animal</th>
                <th>Date de gestation</th>
                <th>Etat</th>
                <th class="text-end justify-content-between align-ltems-center">Actions</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($tests as $test)
                    <tr>
                        <td>{{$test->user->name}}</td>
                        <td>{{$test->animal->numero}}</td>
                        <td>{{$test->date_gestation}}</td>
                        <td>
                            @if ($test->etat == 'echec')
                                <label class="badge badge-danger">Test echouer</label>
                            @else
                                <label class="badge badge-info">Test reussit</label>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex gap-2 w-100 justify-content-end p-1 mt-2">
                                <a href="{{route('medecin.test.edit', $test)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>
                            </div>
                        </td>
                    </tr>

                @empty
                    <p class="alert alert-info text-center">Accun donnee enregistre</p>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-between">
            {{$tests->Links()}}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
