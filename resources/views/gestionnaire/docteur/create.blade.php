@extends('layouts.sidebar')
@section('title', $docteur->exists ? "Modifier un docteur" : "Enregistrer un nouveau docteur")
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">@yield('title')</h4>
          <p class="card-description">
            Tous les champs sont obligatoire
          </p>


        <form action="{{route($docteur->exists ? 'gestionnaire.docteur.update' : 'gestionnaire.docteur.store', $docteur)}}" enctype="multipart/form-data" class="vstack gap-3" method="post">
            @csrf
            @method($docteur->exists ? 'put' : 'post')
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <h1 class="input-group-text text-danger bg-transparent border-right-3">
                            *
                        </h1>
                    </div>
                    <input type="text" class="form-control @error('nom') is-invalid @enderror form-control-lg border-left-0" value="{{$docteur->nom}}" id="nom" name="nom" placeholder="Nom">
                        @error('nom')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                <label for="prenom">Prenom</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                    </div>
                    <input type="text" class="form-control @error('prenom') is-invalid @enderror form-control-lg border-left-0" value="{{$docteur->prenom}}" name="prenom" id="prenom" placeholder="Origine">
                        @error('prenom')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                <label for="specialite">Specialite</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                    </div>
                    <input type="text" class="form-control @error('specialite') is-invalid @enderror form-control-lg border-left-0" name="specialite" value="{{$docteur->specialite}}" id="Specialite" placeholder="specialite">
                        @error('specialite')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                </div>
                <div class="p-2">
                    @if ($docteur->exists)
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
