@extends('layouts.sidebarm')
@section('title', 'Enregistre un nouveau fiche de controle')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title d-flex p-2 mt-2 justify-content-between align-items-center">@yield('title')</h4>
            <a href="{{route('medecin.fiche.index')}}" class="btn btn-primary btn-rounded btn-fw">Ajouter un animal</a>
          <p class="card-description">
            Tous les champs en etoile <span class="text-danger">*</span> sont obligatoire
          </p>

        <form action="{{route($fiche->exists ? 'medecin.fiche.update' : 'medecin.fiche.store', $fiche)}}" enctype="multipart/form-data" class="vstack gap-3" method="post">
            @csrf
            @method($fiche->exists ? 'put' : 'post')

              <div class="form-group">
                <label for="symptome">Symptome</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="text" class="form-control @error('symptome') is-invalid @enderror form-control-lg border-left-0" value="{{$fiche->symptome}}" name="symptome" id="symptome" placeholder="symptome">
                      @error('symptome')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="diagnostique">Diagnostique</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="text" class="form-control @error('diagnostique') is-invalid @enderror form-control-lg border-left-0" name="diagnostique" value="{{$fiche->diagnostique}}" id="diagnostique" placeholder="Diagnostique">
                      @error('diagnostique')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="traitement">Traitement</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="text" class="form-control @error('traitement') is-invalid @enderror form-control-lg border-left-0" name="traitement" value="{{$fiche->traitement}}" id="traitement" placeholder="Traitement">
                      @error('traitement')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="date">Date </label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="date" class="form-control @error('date') is-invalid @enderror form-control-lg border-left-0" name="date" value="{{$fiche->date}}" id="date" placeholder="Date ">
                      @error('date')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="etat_sante_id">Etat de sante</label>
                <div class="input-group">
                  <select name="etat_sante_id" class="form-control @error('etat_sante_id') is-invalid @enderror form-control-lg border-left-0" id="etat_sante_id">
                    <option value="" selected>Selectionne l'etat de sante</option>
                    @foreach ($etats as $etat)
                    <option value="{{$etat->id}}">{{$etat->nom}}</option>
                    @endforeach
                  </select>
                      @error('etat_sante_id')
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
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
              </div>
              </div>
              <div class="form-group">
                <label for="etat_lactation">Etat de lactaion</label>
                <div class="input-group">
                    <select name="etat_lactation    " class="form-control @error('etat_lactation') is-invalid @enderror form-control-lg border-left-0" id="etat_lactation">
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
                @if ($fiche->exists)
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
