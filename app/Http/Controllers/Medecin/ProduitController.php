<?php

namespace App\Http\Controllers\Medecin;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Controller;
use App\Http\Requests\Medecin\ProduitFormRequest;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('medecin.produit.index', [
            'produits' => Produit::orderBy('created_at', 'desc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produit = new Produit();
        return view('medecin.produit.create', [
            'produit' => $produit
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProduitFormRequest $request)
    {
        Produit::create($request->validated());
        return to_route('medecin.produit.index')->with('success', 'Enregistrement effectuer avec succes !');
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
    public function edit(Produit $produit)
    {
        return view('medecin.produit.create', [
            'produit' => $produit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProduitFormRequest $request, Produit $produit)
    {
        $produit->update($request->validated());
        return to_route('medecin.produit.index')->with('success', 'Modification effectuer avec succes !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return to_route('medecin.produit.index')->with('success', 'Suppression effectuer avec succes !');
    }
}
