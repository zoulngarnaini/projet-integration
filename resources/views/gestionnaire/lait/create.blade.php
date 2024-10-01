@extends('layouts.sidebar')
@section('title', $lait->exists ? "Modifier un client" : "Enregistrer un nouveau client")
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">@yield('title')</h4>
          <p class="card-description">
            Tous les champs sont obligatoire
          </p>


        <form action="{{route($lait->exists ? 'gestionnaire.lait.update' : 'gestionnaire.lait.store', $lait)}}" enctype="multipart/form-data" class="vstack gap-3" method="post">
            @csrf
            @method($lait->exists ? 'put' : 'post')
                <div class="form-group">
                    <label for="quantite_total">Quantite total</label>
                    <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <h1 class="input-group-text text-danger bg-transparent border-right-3">
                            *
                        </h1>
                    </div>
                    <input type="number" class="form-control @error('quantite_total') is-invalid @enderror form-control-lg border-left-0" value="{{$lait->quantite_total}}" id="quantite_total" name="quantite_total" placeholder="Quantite total">
                        @error('quantite_total')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                <label for="quantite_veau">Quantite par veau</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                    </div>
                    <input type="number" class="form-control @error('quantite_veau') is-invalid @enderror form-control-lg border-left-0" value="{{$lait->quantite_veau}}" name="quantite_veau" id="quantite_veau" placeholder="Quantite par veau">
                        @error('quantite_veau')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="quantite_famille">Quantite familiale</label>
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                        <h1 class="input-group-text text-danger bg-transparent border-right-3">
                            *
                        </h1>
                        </div>
                        <input type="number" class="form-control @error('quantite_famille') is-invalid @enderror form-control-lg border-left-0" name="quantite_famille" value="{{$lait->quantite_famille}}" id="quantite_famille" placeholder="Quantite familiale">
                            @error('quantite_famille')
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
                        <input type="date" class="form-control @error('date') is-invalid @enderror form-control-lg border-left-0" name="date" value="{{$lait->date}}" id="date" placeholder="Date">
                            @error('date')
                                <div class="invalid-feedback">
                                        {{ $message }}
                                </div>
                            @enderror
                    </div>
                </div>

              <div class="form-group">
                <label for="animal_id">Animal</label>
                <div class="input-group">
                    <select name="animal_id" class="form-control @error('animal_id') is-invalid @enderror form-control-lg border-left-0" id="animal_id">
                        <option value="" selected>Selectionne le nom de l'animal</option>
                        @foreach ($animals as $animal)
                        <option value="{{$animal->id}}">{{$animal->numero}}</option>
                        @endforeach
                    </select>
                    @error('animal_id')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
                <div class="p-2">
                    @if ($lait->exists)
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
