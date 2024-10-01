<?php

namespace App\Http\Controllers\Medecin;

use App\Models\Animal;
use App\Models\Produit;
use App\Models\Prevention;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Controller;
use App\Http\Requests\Medecin\PreventionFormRequest;
use App\Models\User;

class PreventionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('medecin.prevention.index', [
            'preventions' => Prevention::orderBy('created_at')->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prevent = new Prevention();
        $docteur = User::select('id', 'name')->get();
        $animal = Animal::select('id', 'numero')->get();
        $produit = Produit::select('id', 'nom')->get();
        return view('medecin.prevention.create', [
            'prevent' => $prevent,
            'docteurs' => $docteur,
            'animals' => $animal,
            'produits' => $produit
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PreventionFormRequest $request)
    {
        Prevention::create($request->validated());
        return to_route('medecin.prevent.index')->with('success', 'Enregistrement effectuer avec succes !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prevention $prevent)
    {
        $docteur = User::select('id', 'nom')->get();
        $animal = Animal::select('id', 'numero')->get();
        $produit = Produit::select('id', 'nom')->get();
        return view('medecin.prevention.create', [
            'prevent' => $prevent,
            'docteurs' => $docteur,
            'animals' => $animal,
            'produits' => $produit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PreventionFormRequest $request, Prevention $prevent)
    {
        $prevent->update($request->validated());
        return to_route('medecin.prevent.index')->with('success', 'Modification effectuer avec succes !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prevention $prevent)
    {
        $prevent->delete();
        return to_route('medecin.prevent.index')->with('success', 'Suppression effectuer avec succes !');
    }
}
