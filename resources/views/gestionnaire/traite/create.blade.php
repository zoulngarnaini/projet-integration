@extends('layouts.sidebar')
@section('title', $traite->exists ? "Modifier " : "Enregistrer un traite ")
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">@yield('title')</h4>
          <p class="card-description">
            Tous les champs sont obligatoire
          </p>


        <form action="{{route($traite->exists ? 'gestionnaire.traite.update' : 'gestionnaire.traite.store', $traite)}}" class="vstack gap-3" method="post">
            @csrf
            @method($traite->exists ? 'put' : 'post')

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

              <div class="form-group">
                <label for="lait_id">Quatite du lait</label>
                <div class="input-group">
                    <select name="lait_id" class="form-control @error('lait_id') is-invalid @enderror form-control-lg border-left-0" id="lait_id">
                        <option value="" selected>Selectionne la quantite du lait</option>
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
            <div class="form-group">
            <label for="periode">Periode</label>
            <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                <h1 class="input-group-text text-danger bg-transparent border-right-3">
                    *
                </h1>
                </div>
                <input type="text" class="form-control @error('periode') is-invalid @enderror form-control-lg border-left-0" value="{{$traite->periode}}" name="periode" id="periode" placeholder="Periode">
                    @error('periode')
                    <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="superviseur">Superviseur</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                    </div>
                    <input type="text" class="form-control @error('superviseur') is-invalid @enderror form-control-lg border-left-0" name="superviseur" value="{{$traite->superviseur}}" id="superviseur" placeholder="Superviseur">
                        @error('superviseur')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
            </div>
            <div class="p-2">
                @if ($traite->exists)
                    <button type="submit" class="btn btn-rounded btn-fw btn-outline-primary">Modifier</button>
                @else
                    <button type="submit" class="btn btn-rounded btn-fw btn-outline-primary">Enregistre</button>
                @endif
            </div>
            </form>

        </div>
    </div>
</div>
@endsection
