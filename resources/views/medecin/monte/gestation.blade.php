@extends('layouts.sidebarm')
@section('title', $monte->exists ? "Montee naturelle" : "Montee naturel")
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">@yield('title')</h4>
          <p class="card-description">
            Tous les champs en <span class="text-danger">*</span> sont obligatoire
          </p>

        <form action="{{route($monte->exists ? 'medecin.monte.update' : 'medecin.monte.store', $monte)}}" enctype="multipart/form-data" class="vstack gap-3" method="post">
            @csrf
            @method($monte->exists ? 'put' : 'post')

                <div class="form-group">
                    <label for="date_nature">Date de gestation</label>
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                        <h1 class="input-group-text text-danger bg-transparent border-right-3">
                            *
                        </h1>
                        </div>
                        <input type="date" class="form-control @error('date_nature') is-invalid @enderror form-control-lg border-left-0" name="date_nature" value="{{$monte->date_nature}}" id="date_nature" placeholder="Date de gestation">
                            @error('date_nature')
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
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="etat" value="naturel">
                </div>
                <div class="p-2">
                    @if ($monte->exists)
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
