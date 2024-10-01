<?php

namespace App\Http\Controllers\Medecin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Medecin\InseminationFormRequest;
use App\Models\Animal;
use App\Models\Insemination;
use App\Models\Synchronisation;
use App\Models\User;
use Illuminate\Pagination\Paginator;

class InseminationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('medecin.insemination.index', [
            'inseminations' => Insemination::orderBy('created_at')->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $insemination = new Insemination();
        $animal = Synchronisation::with('animal')->get();
        //dd($animal);
        return view('medecin.insemination.create', [
            'insemination' => $insemination,
            'animals' => $animal
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InseminationFormRequest $request)
    {
        Insemination::create($request->validated());
        return to_route('medecin.insemination.index')->with('success', 'Enregistrement effectuer avec succes !');
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
    public function edit(Insemination $insemination)
    {
        $animal = Animal::select('numero', 'id')->get();
        return view('medecin.insemination.create', [
            'insemination' => $insemination,
            'animals' => $animal
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InseminationFormRequest $request, Insemination $insemination)
    {
        $insemination->update($request->validated());
        return to_route('medecin.insemination.index')->with('success', 'Modification effectuer avec succes !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Insemination $insemination)
    {
        $insemination->delete();
        return to_route('medecin.insemination.index')->with('success', 'Suppression effectuer avec succes !');
    }
}
