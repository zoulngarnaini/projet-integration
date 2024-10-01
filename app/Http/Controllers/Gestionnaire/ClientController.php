<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Gestionnaire\ClientFormRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gestionnaire.client.index', [
            'clients' => Client::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $client = new Client();
        return view('gestionnaire.client.create', [
            'client' => $client
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientFormRequest $request)
    {
        Client::create($request->validated());
        return to_route('gestionnaire.client.index')->with('success', 'Enregistrement effectuer avec succes !');
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
    public function edit(Client $client)
    {
        return view('gestionnaire.client.create', [
            'client' => $client
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientFormRequest $request, Client $client)
    {
        $client->update($request->validated());
        return to_route('gestionnaire.client.index')->with('success', 'Modification effectuer avec succes !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return to_route('gestionnaire.client.index')->with('success', 'Suppression effectuer avec succes !');
    }
}
