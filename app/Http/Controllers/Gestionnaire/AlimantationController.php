<?php

namespace App\Http\Controllers\Gestionnaire;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gestionnaire\AlimantFormRequest;
use App\Models\Alimantation;

class AlimantationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gestionnaire.alimantation.index', [
            'alimants' => Alimantation::orderBy('created_at', 'desc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alimant = new Alimantation();
        return view('gestionnaire.alimantation.create', [
            'alimant' => $alimant
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlimantFormRequest $request)
    {
        Alimantation::create($request->validated());
        return to_route('gestionnaire.alimant.index')->with('success', 'Enregistrement effectuer avec succes');
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
    public function edit(Alimantation $alimant)
    {
        return view('gestionnaire.alimantation.create', [
            'alimant' => $alimant
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlimantFormRequest $request, Alimantation $alimant)
    {
        $alimant->update($request->validated());
        return to_route('gestionnaire.alimant.index')->with('success', 'Modifcation effectuer avec succes ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alimantation $alimant)
    {
        $alimant->delete();
        return to_route('gestionnaire.alimant.index')->with('success', 'Suppression effectuer avec succes ');
    }
}
