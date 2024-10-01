@extends('layouts.sidebar')
@section('title', 'Les utilisateurs')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="d-flex p-2 mt-2 justify-content-between align-items-center">
            <h4 class="card-title">@yield('title')</h4>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="text-dark">
             <tr class="">
                <th>Nom</th>
                <th>Email</th>
                <th>Role</th>
                <th class="text-end d-flex justify-content-end align-ltems-between">Action</th>
             </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if ($user->role == '0')
                                <label class="badge badge-info">Medecin</label>
                            @else
                                <label class="badge badge-secondary">Gestionnaire</label>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex justify-content-end align-ltems-between">
                                <a href="{{route('gestionnaire.user.edit', $user)}}" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil"></i></a>
                                <form action="{{route('gestionnaire.user.destroy', $user)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm "><i class="mdi mdi-delete"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>

                @empty
                    <p class="alert alert-info text-center">Accun fiche de controle enregistre</p>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex justify-content-end align-items-between">
            {{$users->Links()}}
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
