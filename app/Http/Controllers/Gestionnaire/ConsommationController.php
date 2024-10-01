<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Models\Consommation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gestionnaire\ConsommationFormRequest;
use App\Models\Alimantation;

class ConsommationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gestionnaire.consommation.index', [
            'consommations' => Consommation::orderBy('created_at')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $consomme = new Consommation();
        $alimant = Alimantation::select('id', 'nom')->get();
        return view('gestionnaire.consommation.create', [
            'consomme' => $consomme,
            'alimants' => $alimant
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ConsommationFormRequest $request)
    {
        $data = $request->validated();
        //dd(Consommation::create($data));
        Consommation::create($data);
        return to_route('gestionnaire.consomme.index')->with('success', 'Enregistrement effectuer avec succes !');

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
    public function update(Request $request, string $id)
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
