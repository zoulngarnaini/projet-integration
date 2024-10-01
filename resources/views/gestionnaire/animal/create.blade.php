@extends('layouts.sidebar')
@section('title', $animal->exists ? "Modifier un animal" : "Enregistrer un nouveau animal")
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">@yield('title')</h4>
          <p class="card-description">
            Tous les champs en etoile <span class="text-danger">*</span> sont obligatoire
          </p>


        <form action="{{route($animal->exists ? 'gestionnaire.animal.update' : 'gestionnaire.animal.store', $animal)}}" enctype="multipart/form-data" class="vstack gap-3" method="post">
            @csrf
            @method($animal->exists ? 'put' : 'post')

            <div class="form-group">
                <label for="numero">Numero</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="text" class="form-control @error('numero') is-invalid @enderror form-control-lg border-left-0" value="{{$animal->numero}}" id="numero" name="numero" placeholder="Numero">
                      @error('numero')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="origine">Origine</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="text" class="form-control @error('origine') is-invalid @enderror form-control-lg border-left-0" value="{{$animal->origine}}" name="origine" id="origine" placeholder="Origine">
                      @error('origine')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="robe">Robe</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="text" class="form-control @error('robe') is-invalid @enderror form-control-lg border-left-0" name="robe" value="{{$animal->robe}}" id="robe" placeholder="Robe">
                      @error('robe')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="date_nais">Date naissance</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="date" class="form-control @error('date_nais') is-invalid @enderror form-control-lg border-left-0" name="date_nais" value="{{$animal->date_nais}}" id="date_nais" placeholder="Date naissance">
                      @error('date_nais')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="date_arriv">Date arrivee</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                      </h1>
                  </div>
                  <input type="date" class="form-control @error('date_arriv') is-invalid @enderror form-control-lg border-left-0" name="date_arriv" value="{{$animal->date_arrivRace}}" id="date_arriv" placeholder="Sate arrivee">
                      @error('date_arriv')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="race">Race</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                      *
                    </h1>
                  </div>
                  <input type="text" class="form-control @error('race') is-invalid @enderror form-control-lg border-left-0" name="race" value="{{$animal->race}}" id="race" placeholder="Race">
                      @error('race')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="capacite_prod">Poids</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="text" class="form-control @error('capacite_prod') is-invalid @enderror form-control-lg border-left-0" value="{{$animal->capacite_prod}}" name="capacite_prod" id="capacite_prod" placeholder="Poids">
                      @error('capacite_prod')
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
                  <textarea class="form-control @error('description') is-invalid @enderror form-control-lg border-left-0" name="description" id="description" placeholder="Description">{{$animal->description}}</textarea>
                      @error('description')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="photo">Photo</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror form-control-lg border-left-0" id="photo" placeholder="Photo">
                      @error('photo')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="etat_lactation">Etat de lactaion</label>
                <div class="input-group">
                    <select name="etat_lactation" class="form-control @error('etat_lactation') is-invalid @enderror form-control-lg border-left-0" id="etat_lactation">
                        <option disabled  selected>Selectionne l'etat de laction</option>
                       <option >Lactation suspendu</option>
                       <option >Lactation continu</option>
                    </select>
                       @error('etat_lactation')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
            <div class="p-2">
                @if ($animal->exists)
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
