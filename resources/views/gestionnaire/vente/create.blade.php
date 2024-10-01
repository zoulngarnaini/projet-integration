@extends('layouts.sidebar')
@section('title', $vente->exists ? "Modifier un client" : "Enregistrer un nouveau client")
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">@yield('title')</h4>
          <p class="card-description">
            Tous les champs sont obligatoire
          </p>


        <form action="{{route($vente->exists ? 'gestionnaire.vente.update' : 'gestionnaire.vente.store', $vente)}}" enctype="multipart/form-data" class="vstack gap-3" method="post">
            @csrf
            @method($vente->exists ? 'put' : 'post')
                <div class="form-group">
                    <label for="quantite">Quantite </label>
                    <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <h1 class="input-group-text text-danger bg-transparent border-right-3">
                            *
                        </h1>
                    </div>
                    <input type="number" class="form-control @error('quantite') is-invalid @enderror form-control-lg border-left-0" value="{{$vente->quantite}}" id="quantite" name="quantite" placeholder="Quantite">
                        @error('quantite')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                        <h1 class="input-group-text text-danger bg-transparent border-right-3">
                            *
                        </h1>
                        </div>
                        <input type="date" class="form-control @error('date') is-invalid @enderror form-control-lg border-left-0" name="date" value="{{$vente->date}}" id="date" placeholder="Date">
                            @error('date')
                                <div class="invalid-feedback">
                                        {{ $message }}
                                </div>
                            @enderror
                    </div>
                </div>

              <div class="form-group">
                <label for="client_id">Client</label>
                <div class="input-group">
                    <select name="client_id" class="form-control @error('client_id') is-invalid @enderror form-control-lg border-left-0" id="client_id">
                        <option value="" selected>Selectionne le nom du client</option>
                        @foreach ($clients as $client)
                        <option value="{{$client->id}}">{{$client->nom}}</option>
                        @endforeach
                    </select>
                    @error('client_id')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="lait_id">Lait</label>
                <div class="input-group">
                    <select name="lait_id" class="form-control @error('lait_id') is-invalid @enderror form-control-lg border-left-0" id="vente">
                        <option value="" selected>Selectionne le nom de l'animal</option>
                        @foreach ($laits as $lait)
                        <option value="{{$lait->id}}">{{$lait->quantite_total}}</option>
                        @endforeach
                    </select>
                    @error('lait_id')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
                <div class="p-2">
                    @if ($vente->exists)
                        <button type="submit" class="btn btn-rounded btn-fw btn-outline-primary">Modifier</button>
                    @else
                        <button type="submit" class="btn btn-rounded btn-fw btn-outline-primary">Ajouter un client</button>
                    @endif
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
