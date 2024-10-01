<?php

namespace App\Http\Controllers\Gestionnaire;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gestionnaire\LaitFormRequest;
use App\Models\Animal;
use App\Models\Lait;

class LaitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gestionnaire.lait.index', [
            'laits' => Lait::orderBy('created_at', 'desc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lait = new Lait();
        $animal = Animal::select('numero', 'id')->get();
        return view('gestionnaire.lait.create', [
            'lait' => $lait,
            'animals' => $animal
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LaitFormRequest $request)
    {
        Lait::create($request->validated());
        return to_route('gestionnaire.lait.index')->with('success', 'Enregistrement effectuer avec succes !');
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
    public function edit(Lait $lait)
    {
        $animal = Animal::select('numero', 'id')->get();
        return view('gestionnaire.lait.create', [
            'lait' => $lait,
            'animals' => $animal
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LaitFormRequest $request, Lait $lait)
    {
        $lait->update($request->validated());
        return to_route('gestionnaire.lait.index')->with('success', 'Modification effectuer avec succes !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lait $lait)
    {
        $lait->delete();
        return to_route('gestionnaire.lait.index')->with('success', 'Suppression effectuer avec succes !');
    }
}
