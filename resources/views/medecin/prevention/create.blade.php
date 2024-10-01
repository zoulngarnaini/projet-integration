@extends('layouts.sidebarm')
@section('title', 'Les preventions ')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title d-flex p-2 mt-2 justify-content-between align-items-center">@yield('title')</h4>
            <a href="{{route('medecin.prevent.index')}}" class="btn btn-primary btn-rounded btn-fw">Ajouter un animal</a>
          <p class="card-description">
            Tous les champs en etoile <span class="text-danger">*</span> sont obligatoire
          </p>

        <form action="{{route($prevent->exists ? 'medecin.prevent.update' : 'medecin.prevent.store', $prevent)}}" class="vstack gap-3" method="post">
            @csrf
            @method($prevent->exists ? 'put' : 'post')

              <div class="form-group">
                <label for="nom">Nom </label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="text" class="form-control @error('nom') is-invalid @enderror form-control-lg border-left-0" name="nom" value="{{$prevent->nom}}" id="nom" placeholder="Nom">
                      @error('nom')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="etat">Etat</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  @include('formulaire.check', ['label' => 'Etat', 'name' => 'etat', 'value' => $prevent->etat])
                      @error('etat')
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
              <div class="form-group">
                <label for="user_id">Docteur</label>
                <div class="input-group">
                    <select name="user_id" class="form-control @error('user_id') is-invalid @enderror form-control-lg border-left-0" id="user_id">
                        <option value="" selected>Selectionne le nom du docteur</option>
                        @foreach ($docteurs as $docteur)
                        <option value="{{$docteur->id}}">{{$docteur->name}}</option>
                        @endforeach
                    </select>
                       @error('user_id')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>

              <div class="form-group">
                <label for="produit_id">Produit</label>
                <div class="input-group">
                  <select name="produit_id" class="form-control @error('produit_id') is-invalid @enderror form-control-lg border-left-0" id="produit_id">
                    <option value="" selected>Selectionne un produit</option>
                    @foreach ($produits as $produit)
                    <option value="{{$produit->id}}">{{$produit->nom}}</option>
                    @endforeach
                  </select>
                      @error('produit_id')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
            <div class="p-2">
                @if ($prevent->exists)
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
