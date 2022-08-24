<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionentreController extends Controller
{
    public function index(){
        return view('inscrire_entreprise');
    }
}
