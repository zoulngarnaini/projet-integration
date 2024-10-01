<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Models\Animal;
use Illuminate\Http\Request;
use App\Models\FicheControle;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Gestionnaire\AnimalFormRequst;
use App\Models\Insemination;
use App\Models\Lait;
use App\Models\Synchronisation;
use App\Models\Testgestation;
use App\Models\Traite;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gestionnaire.animal.index', [
            'animaux' => Animal::orderBy('id', 'desc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $animal = new Animal();
        return view('gestionnaire.animal.create', [
            'animal' => $animal
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnimalFormRequst $request)
    {
        $animal = new Animal();
        Animal::create($this->extractData($animal, $request));
        return to_route('gestionnaire.animal.index')->with('success', 'Enregistrement effectuer avec succes !');
    }

    private function extractData(Animal $animal, AnimalFormRequst $request)
    {
        $data = $request->validated();
        /** @var UploadedFile|null $image  */
        $image = $request->validated('photo');
        if($image === null || $image->getError()){
            return $data;
        }
        if ($animal->photo) {
            Storage::disk('public')->delete($animal->photo);
        }
        $data['photo'] = $image->store('image', 'public');
        return $data;
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        $nbre_synchronisation = Synchronisation::where('animal_id', '=', $animal->id)->count();
        $nbre_insemination = Insemination::where('animal_id', '=', $animal->id)->count();
        $nbre_gestation = Testgestation::where('animal_id', '=', $animal->id)->count();

        $data_synchronisation = Synchronisation::where('animal_id', '=', $animal->id)->get();
        $data_insemination = Insemination::where('animal_id', '=', $animal->id)->get();
        $data_gestation = Testgestation::where('animal_id', '=', $animal->id)->get();

        $lait = Lait::where('animal_id', '=', $animal->id)
            ->orderBy('id', 'desc')
            ->paginate(4);
        //dd($lait);

        return view('gestionnaire.animal.detail', [
            'animal' => $animal,
            'nbre_synchronisations' => $nbre_synchronisation,
            'nbre_inseminations' => $nbre_insemination,
            'nbre_gestations' => $nbre_gestation,
            'data_synchronisations' => $data_synchronisation,
            'data_inseminations' => $data_insemination,
            'data_gestations' => $data_gestation,
            'laits' => $lait
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('gestionnaire.animal.create', [
            'animal' => $animal
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnimalFormRequst $request, Animal $animal)
    {
        $animal->update($this->extractData($animal, $request));
        return to_route('gestionnaire.animal.index')->with('success', 'Suppression effectuer avec succes !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return to_route('gestionnaire.animal.index')->with('success', 'Suppression effectuer avec succes !');
    }
}
