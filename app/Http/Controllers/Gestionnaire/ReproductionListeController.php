<?php

namespace App\Http\Controllers\Gestionnaire;

use App\Http\Controllers\Controller;
use App\Models\Insemination;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ReproductionListeController extends Controller
{
    public function insemination()
    {
        return view('gestionnaire.reproduction.insemination', [
            'inseminations' => Insemination::orderBy('created_at', 'desc')->paginate(5)
        ]);
    }
}
