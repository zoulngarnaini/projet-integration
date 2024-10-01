@extends('layouts.sidebarm')
@section('title', $test->exists ? "Teste de gestation" : "Teste de gestation")
@section('content')

<div class="row justify-content-center">
    <div class="col-md-10 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
            <h4 class="card-title">@yield('title')</h4>
          <p class="card-description">
            Tous les champs en <span class="text-danger">*</span> sont obligatoire
          </p>

        <form action="{{route($test->exists ? 'medecin.test.update' : 'medecin.test.store', $test)}}" enctype="multipart/form-data" class="vstack gap-3" method="post">
            @csrf
            @method($test->exists ? 'put' : 'post')

                <div class="form-group">
                    <label for="date_gestation">Teste de gestation</label>
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                        <h1 class="input-group-text text-danger bg-transparent border-right-3">
                            *
                        </h1>
                        </div>
                        <input type="date" class="form-control @error('date_gestation') is-invalid @enderror form-control-lg border-left-0" name="date_gestation" value="{{$test->date_gestation}}" id="date_gestation" placeholder="Date de gestation">
                            @error('date_gestation')
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
                            <option value="{{$animal->id}}">{{$animal->animal->numero}} (En insemination depuis {{$animal->date_insemination}})</option>
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
                </div>
                <div class="form-group">
                    <label for="etat">Etat</label>
                    <div class="input-group">
                        <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" name="etat" id="etat" value="1" class="form-check-input">
                              Etat de la synchronisation
                            </label>
                          </div>
                    </div>
                </div>
                <div class="p-2">
                    @if ($test->exists)
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
