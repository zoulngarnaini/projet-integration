<?php

namespace App\Http\Controllers\Medecin;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Synchronisation;
use App\Http\Controllers\Controller;
use App\Http\Requests\SychronisationFormRequest;

class SynchronisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('medecin.synchrone.index', [
            'synchrones' => Synchronisation::orderBy('id', 'desc')->paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $synchene = new Synchronisation();
        $animal = Animal::select('numero', 'id')->get();
        return view('medecin.synchrone.create', [
            'synchrone' => $synchene,
            'animals' => $animal
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SychronisationFormRequest $request)
    {
        Synchronisation::create($request->validated());
        return to_route('medecin.synchrone.index')->with('success', 'Enregistrement effectuer avec succes !');
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
    public function edit(Synchronisation $synchrone)
    {
        $animal = Animal::select('numero', 'id')->get();
        return view('medecin.synchrone.create', [
            'synchrone' => $synchrone,
            'animals' => $animal
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SychronisationFormRequest $request, Synchronisation $synchrone)
    {
        $synchrone->update($request->validated());
        return to_route('medecin.synchrone.index')->with('success', 'Modification effectuer avec succes !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Synchronisation $synchrone)
    {
        $synchrone->delete();
        return to_route('medecin.synchrone.index')->with('success', 'Suppression effectuer avec succes !');
    }
}
