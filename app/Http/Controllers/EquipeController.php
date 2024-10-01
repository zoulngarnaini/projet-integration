<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function equipe()
    {
        return view('team');
    }

    public function contact()
    {
        return view('contact');
    }
    public function testes()
    {
        return view('test');
    }
}
