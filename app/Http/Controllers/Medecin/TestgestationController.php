<?php

namespace App\Http\Controllers\Medecin;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Models\Testgestation;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\Medecin\TestFormRequest;
use App\Models\Insemination;

class TestgestationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('medecin.test.index', [
            'tests' => Testgestation::orderBy('created_at', 'desc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $test = new Testgestation();
        $animal = Insemination::with('animal')->get();
        return view('medecin.test.create', [
            'test' => $test,
            'animals' => $animal
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestFormRequest $request)
    {
        $data = $request->validated();
        Testgestation::create($data);
        return to_route('medecin.test.index')->with('success', 'Enregistrement effectuer avec succes !');
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
