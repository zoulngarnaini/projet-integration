@extends('layouts.sidebarm')
@section('title', 'Les fiches de controle')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
            <a href="{{route('medecin.produit.create')}}" class="btn btn-primary btn-rounded btn-fw">Enregistre un nouveau produit</a>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="text-dark ">
             <tr class="">
                 <th>Nom de la produit</th>
                 <th>Description</th>
                <th class="text-end justify-content-between align-ltems-end">Action</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($produits as $produit)
                    <tr>
                        <td>{{$produit->nom}}</td>
                        <td>{{$produit->description}}</td>
                        <td>
                            <div class="d-flex gap-2 w-100 justify-content-end p-1 mt-2">
                                <a href="{{route('medecin.produit.edit', $produit)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>
                            </div>
                        </td>
                    </tr>

                @empty
                    <p class="alert alert-info text-center">Accun produits enregistre</p>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-between">
            {{$produits->Links()}}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
