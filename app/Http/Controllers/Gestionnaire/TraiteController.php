<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Models\Traite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gestionnaire\TraiteFormRequest;
use App\Models\Animal;
use App\Models\Lait;
use Illuminate\Http\RedirectResponse;

class TraiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gestionnaire.traite.index', [
            'traites' => Traite::orderBy('created_at', 'desc')->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $traite = new Traite();
        $animal = Animal::select('numero', 'id')->get();
        $lait = Lait::select('quantite_total', 'id')->get();
        return view('gestionnaire.traite.create', [
            'traite' => $traite,
            'animals' => $animal,
            'laits' => $lait
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'animal_id' => ['required'],
            'lait_id' => ['required'],
            'periode' => ['required'],
            'superviseur' => ['required']
        ]);

        Traite::create([
            'animal_id' => $request->animal_id,
            'lait_id' => $request->lait_id,
            'periode' => $request->periode,
            'superviseur' => $request->superviseur
        ]);

        //dd(Traite::create($request->validated()));
        return to_route('gestionnaire.traite.index')->with('success', 'Enregistrement effectuer avec succes !');
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
    public function edit(Traite $traite)
    {
        $animal = Animal::select('numero', 'id')->get();
        $lait = Lait::select('quantite_total', 'id')->get();
        return view('gestionnaire.traite.create', [
            'traite' => $traite,
            'animals' => $animal,
            'laits' => $lait
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Traite $traite)    
    {
        $validated = $request->validate([
            'animal_id' => ['required'],
            'lait_id' => ['required'],
            'periode' => ['required'],
            'superviseur' => ['required']
        ]);

        $traite->update([
            'animal_id' => $request->animal_id,
            'lait_id' => $request->lait_id,
            'periode' => $request->periode,
            'superviseur' => $request->superviseur
        ]);
        return to_route('gestionnaire.traite.index')->with('success', 'Modification effectuer avec succes !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Traite $traite)
    {
        $traite->delete();
        return to_route('gestionnaire.traite.index')->with('success', 'Suppression effectuer avec succes !');
    }
}
