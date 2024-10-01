<?php

namespace App\Http\Controllers\Gestionnaire;

use Illuminate\Http\Request;
use App\Models\FicheControle;
use App\Http\Controllers\Controller;
use App\Models\Prevention;

class ListeContorllePreventionController extends Controller
{
    public function controlle()
    {
        return view('gestionnaire.sante.controlle', [
            'controlles' => FicheControle::orderBy('created_at', 'desc')->paginate(7)
        ]);
    }

    public function prevention()
    {
        return view('gestionnaire.sante.prevention', [
            'preventions' => Prevention::orderBy('created_at', 'desc')->paginate(7)
        ]);
    }

    public function deletecontrolle()
    {

    }
    public function deleteprevention()
    {

    }
}
