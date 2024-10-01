@extends('layouts.sidebar')
@section('title', $user->exists ? "Attribuer un role" : "Enregistrer un nouveau utilisateur")
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">@yield('title')</h4>
          <p class="card-description">
            Tous les champs sont obligatoire
          </p>


        <form action="{{route($user->exists ? 'gestionnaire.user.update' : 'gestionnaire.user.store', $user)}}" enctype="multipart/form-data" class="vstack gap-3" method="post">
            @csrf
            @method($user->exists ? 'put' : 'post')
                <div class="form-group">
                    <label for="name">Nom </label>
                    <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                        <h1 class="input-group-text text-danger bg-transparent border-right-3">
                            *
                        </h1>
                    </div>
                    <input type="text" class="form-control @error('name') is-invalid @enderror form-control-lg border-left-0" value="{{$user->name}}" id="name" name="name" placeholder="Name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                    <h1 class="input-group-text text-danger bg-transparent border-right-3">
                        *
                    </h1>
                    </div>
                    <input type="email" class="form-control @error('email') is-invalid @enderror form-control-lg border-left-0" value="{{$user->email}}" name="email" id="email" placeholder="Email">
                        @error('email')
                        <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="role">Alimant</label>
                    <div class="input-group">
                        <select name="alimantation_id" class="form-control @error('role') is-invalid @enderror form-control-lg border-left-0" id="role">
                            <option value="" selected>Selectionne l'alimant</option>
                            <option value="0">Medecin</option>
                            <option value="1">Gestionnaire</option>
                        </select>
                          @error('role')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                    </div>
                  </div>

                <div class="p-2">
                    @if ($user->exists)
                        <button type="submit" class="btn btn-rounded btn-fw btn-outline-primary">Attribuer</button>
                    @else
                        <button type="submit" class="btn btn-rounded btn-fw btn-outline-primary">Ajouter </button>
                    @endif
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
