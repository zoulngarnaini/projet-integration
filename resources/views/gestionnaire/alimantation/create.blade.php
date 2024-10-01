@extends('layouts.sidebar')
@section('title', $alimant->exists ? "Modifier un alimant" : "Enregistrer un alimant")
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">@yield('title')</h4>
          <p class="card-description">
            Tous les champs en etoile <span class="text-danger">*</span> sont obligatoire
          </p>
        <form action="{{route($alimant->exists ? 'gestionnaire.alimant.update' : 'gestionnaire.alimant.store', $alimant)}}" enctype="multipart/form-data" class="vstack gap-3" method="post">
            @csrf
            @method($alimant->exists ? 'put' : 'post')

              <div class="form-group">
                <label for="nom">Nom</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="text" class="form-control @error('nom') is-invalid @enderror form-control-lg border-left-0" value="{{$alimant->nom}}" name="nom" id="nom" placeholder="Nom">
                      @error('nom')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="quantite">Quantite</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="text" class="form-control @error('quantite') is-invalid @enderror form-control-lg border-left-0" name="quantite" value="{{$alimant->quantite}}" id="quantite" placeholder="Quantite">
                      @error('quantite')
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
                  <textarea  class="form-control @error('description') is-invalid @enderror form-control-lg" cols="8" rows="8" name="description" id="description" placeholder="Description">{{$alimant->description}}</textarea>
                      @error('description')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>


            <div class="p-2">
                @if ($alimant->exists)
                    <button type="submit" class="btn btn-rounded btn-fw btn-outline-primary">Modifier</button>
                @else
                    <button type="submit" class="btn btn-rounded btn-fw btn-outline-primary">Ajouter un animal</button>
                @endif
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
