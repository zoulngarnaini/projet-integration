@extends('layouts.sidebar')
@section('title', $consomme->exists ? "Modifier " : "Enregistrer un alimant consomme")
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">@yield('title')</h4>
          <p class="card-description">
            Tous les champs en etoile <span class="text-danger">*</span> sont obligatoires
          </p>
        <form action="{{route($consomme->exists ? 'gestionnaire.consomme.update' : 'gestionnaire.consomme.store', $consomme)}}" enctype="multipart/form-data" class="vstack gap-3" method="post">
            @csrf
            @method($consomme->exists ? 'put' : 'post')
              <div class="form-group">
                <label for="quantite">Quantite</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="number" class="form-control @error('quantite') is-invalid @enderror form-control-lg border-left-0" name="quantite" value="{{$consomme->quantite}}" id="quantite" placeholder="Quantite">
                      @error('quantite')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="jour">Journee</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="date" class="form-control @error('jour') is-invalid @enderror form-control-lg border-left-0" value="{{$consomme->jour}}" name="jour" id="jour" placeholder="Journee">
                      @error('jour')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="alimentation_id">Alimant</label>
                <div class="input-group">
                    <select name="alimantation_id" class="form-control @error('alimentation_id') is-invalid @enderror form-control-lg border-left-0" id="alimentation_id">
                        <option value="" selected>Selectionne l'alimant</option>
                        @foreach ($alimants as $alimant)
                        <option value="{{$alimant->id}}">{{$alimant->nom}}</option>
                        @endforeach
                    </select>
                      @error('alimentation_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                      @enderror
                </div>
              </div>

            <div class="p-2">
                @if ($consomme->exists)
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
