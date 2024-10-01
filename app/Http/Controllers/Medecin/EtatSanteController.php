<?php

namespace App\Http\Controllers\Medecin;

use App\Models\EtatSante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\Medecin\EtatFormRequest;

class EtatSanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('medecin.etat.index', [
            'etats' => EtatSante::orderBy('id', 'desc')->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $etat = new EtatSante();
        return view('medecin.etat.create', [
            'etat' => $etat
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EtatFormRequest $request)
    {
        EtatSante::create($request->validated());
        return to_route('medecin.etat.index')->with('success', 'Enregistrement effectuer avec succes !');
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
    public function edit(EtatSante $etat)
    {
        return view('medecin.etat.create', [
            'etat' => $etat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EtatFormRequest $request, EtatSante $etat)
    {
        $etat->update($request->validated());
        return to_route('medecin.etat.index')->with('success', 'Modification effectuer avec succes !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EtatSante $etat)
    {
        $etat->delete();
        return to_route('medecin.etat.index')->with('success', 'Suppression effectuer avec succes !');
    }
}
