@extends('layouts.sidebarm')
@section('title', 'Monte naturel')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{route('medecin.monte.create')}}" class="btn btn-primary btn-rounded btn-fw">Ajouter</a>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="text-dark">
             <tr class="table-primary">
                <th>Non du docteur</th>
                <th>Numero animal</th>
                <th>Date de la monte</th>
                <th>Etat</th>
                <th class="text-end justify-content-end align-ltems-between d-flex">Actions</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($lists as $list)
                    <tr>
                        <td>{{$list->user->name}}</td>
                        <td>{{$list->animal->numero}}</td>
                        <td>{{$list->date_nature}}</td>
                        <td>
                            @if ($list->etat == 'naturel')
                                <label class="badge badge-info">Monte naturel</label>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex gap-2 w-100 justify-content-end align-ltems-between p-1 mt-2">
                                <a href="{{route('medecin.monte.edit', $list)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>
                            </div>
                        </td>
                    </tr>
                @empty

                @endforelse
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-between">

          </div>
        </div>
      </div>
    </div>
</div>

@endsection
