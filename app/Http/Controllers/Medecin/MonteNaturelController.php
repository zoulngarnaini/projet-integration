<?php

namespace App\Http\Controllers\Medecin;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Models\Testgestation;
use App\Http\Controllers\Controller;
use App\Http\Requests\Medecin\TestFormRequest;
use App\Http\Requests\Medecin\NaturelFormRequest;
use App\Models\Gestation;

class MonteNaturelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lists = Gestation::orderByDesc('id')->paginate(5);
        return view('medecin.monte.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $monte = new Gestation();
        $animal = Animal::select('numero', 'id')->get();
        return view('medecin.monte.gestation', [
            'monte' => $monte,
            'animals' => $animal
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NaturelFormRequest $request)
    {
        Gestation::create($request->validated());
        return to_route('medecin.monte.index')->with('success', 'Teste enregistrer avec succes !');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NaturelFormRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
