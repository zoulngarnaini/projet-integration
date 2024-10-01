@extends('layouts.sidebarm')
@section('title', 'Enregistre un nouveau produit')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title d-flex p-2 mt-2 justify-content-between align-items-center">@yield('title')</h4>
            <a href="{{route('medecin.produit.index')}}" class="btn btn-primary btn-rounded btn-fw">Ajouter un animal</a>
          <p class="card-description">
            Tous les champs en etoile <span class="text-danger">*</span> sont obligatoire
          </p>


        <form action="{{route($produit->exists ? 'medecin.produit.update' : 'medecin.produit.store', $produit)}}" enctype="multipart/form-data" class="vstack gap-3" method="post">
            @csrf
            @method($produit->exists ? 'put' : 'post')


              <div class="form-group">
                <label for="nom">Nom du produit</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="text" class="form-control @error('nom') is-invalid @enderror form-control-lg border-left-0" name="nom" value="{{$produit->nom}}" id="nom" placeholder="Nom du produit">
                      @error('nom')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <textarea type="text" class="form-control @error('description') is-invalid @enderror form-control-lg border-left-0" name="description" id="description" placeholder="Description">{{$produit->description}}</textarea>
                      @error('description')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>

            <div class="p-2">
                @if ($produit->exists)
                    <button type="submit" class="btn btn-rounded btn-fw btn-outline-primary">Modifier</button>
                @else
                    <button type="submit" class="btn btn-rounded btn-fw btn-outline-primary">Ajouter un nouveau produit</button>
                @endif
            </div>
        </form>
        </div>
    </div>
</div>

@endsection
