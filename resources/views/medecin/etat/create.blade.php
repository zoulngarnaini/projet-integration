@extends('layouts.sidebarm')
@section('title', 'Les etats des santes')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title d-flex p-2 mt-2 justify-content-between align-items-center">@yield('title')</h4>
            <a href="{{route('medecin.etat.index')}}" class="btn btn-primary btn-rounded btn-fw">Ajouter un animal</a>
          <p class="card-description">
            Tous les champs en etoile <span class="text-danger">*</span> sont obligatoire
          </p>


        <form action="{{route($etat->exists ? 'medecin.etat.update' : 'medecin.etat.store', $etat)}}" enctype="multipart/form-data" class="vstack gap-3" method="post">
            @csrf
            @method($etat->exists ? 'put' : 'post')

              <div class="form-group">
                <label for="nom">Nom</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="text" class="form-control @error('nom') is-invalid @enderror form-control-lg border-left-0" value="{{$etat->nom}}" name="nom" id="nom" placeholder="Origine">
                      @error('nom')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="date_deb">Date debut</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                  </div>
                  <input type="date" class="form-control @error('date_deb') is-invalid @enderror form-control-lg border-left-0" name="date_deb" value="{{$etat->date_deb}}" id="date_deb" placeholder="Date naissance">
                      @error('date_deb')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="date_sort">Date sortie</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                      </h1>
                  </div>
                  <input type="date" class="form-control @error('date_sort') is-invalid @enderror form-control-lg border-left-0" name="date_sort" value="{{$etat->date_sort}}" id="date_sort" placeholder="Sate arrivee">
                      @error('date_sort')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                      @enderror
                </div>
              </div>

            <div class="p-2">
                @if ($etat->exists)
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
