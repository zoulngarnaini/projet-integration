<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Models\Lait;
use App\Models\Vente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gestionnaire\VenteFormRequest;
use App\Models\Client;

class VenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gestionnaire.vente.index', [
            'ventes' => Vente::orderBy('id', 'desc')->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vente = new Vente();
        $client = Client::select('nom', 'id')->get();
        $lait = Lait::select('quantite_total', 'id')->get();
        return view('gestionnaire.vente.create', [
            'vente' => $vente,
            'clients' => $client,
            'laits' => $lait
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VenteFormRequest $request)
    {
        Vente::create($request->validated());
        return to_route('gestionnaire.vente.index')->with('success', 'Enregistrement effectuer avec succes !');
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
    public function edit(Vente $vente)
    {
        $client = Client::select('nom', 'id')->get();
        $lait = Lait::select('quantite_total', 'id')->get();
        return view('gestionnaire.vente.create', [
            'vente' => $vente,
            'clients' => $client,
            'laits' => $lait
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VenteFormRequest $request, Vente $vente)
    {
        $vente->update($request->validated());
        return to_route('gestionnaire.vente.index')->with('success', 'Modification effectuer avec succes !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vente $vente)
    {
        $vente->delete();
        return to_route('gestionnaire.vente.index')->with('success', 'Suppression effectuer avec succes !');
    }
}
