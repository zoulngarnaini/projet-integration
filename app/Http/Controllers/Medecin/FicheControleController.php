<?php

namespace App\Http\Controllers\Medecin;

use App\Models\Animal;
use App\Models\EtatSante;
use Illuminate\Http\Request;
use App\Models\FicheControle;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\Medecin\FicheFormRequest;
use App\Models\User;

class FicheControleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('medecin.fiche.index', [
            'fiches' => FicheControle::orderBy('created_at', 'desc')->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $etat = EtatSante::select('nom','id')->get();
        $animal = Animal::select('numero', 'id')->get();
        $fiche = new FicheControle();
        return view('medecin.fiche.create', [
            'fiche' => $fiche,
            'etats' => $etat,
            'animals' => $animal
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FicheFormRequest $request)
    {
        FicheControle::create($request->validated());
       /* $animal = Animal::find($request->animal_id)->firt();
        dd($animal);
        $animal->update([
            'etat_lactation' => $request->etat_lactation
        ]);*/
        return to_route('medecin.fiche.index')->with('success', 'Enregistrement effectuer avec succes !');
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
    public function edit(FicheControle $fiche)
    {
        $etat = EtatSante::select('nom','id')->get();
        $docteru = User::select('name','id')->get();
        $animal = Animal::select('numero', 'id')->get();
        return view('medecin.fiche.create', [
            'fiche' => $fiche,
            'etats' => $etat,
            'docteurs' => $docteru,
            'animals' => $animal
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FicheFormRequest $request, FicheControle $fiche)
    {
        $fiche->update($request->validated());
        return to_route('medecin.fiche.index')->with('success', 'Modification effectuer avec succes !');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FicheControle $fiche)
    {
        $fiche->delete();
        return to_route('medecin.fiche.index')->with('success', 'Suppression effectuer avec succes !');
    }
}
