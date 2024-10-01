<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    public function index()
    {
        return view('gestionnaire.utilisateur.index', [
            'users' => User::orderBy('created_at', 'desc')->paginate(5)
        ]);
    }

    public function create(User $user)
    {
        $user = new User();
        return view('gestionnaire.utilisateur.create', [
           'user' => $user
        ]);
    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function edit(User $user)
    {
        return view('gestionnaire.utilisateur.create', [
           'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

         $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);
        return to_route('gestionnaire.user.index')->with('success', 'Role attribuer avec succes');

        //dd($data);
    }

    public function destroy()
    {

    }
}
