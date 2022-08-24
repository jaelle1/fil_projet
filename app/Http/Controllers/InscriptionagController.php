<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agence;
class InscriptionagController extends Controller
{
    public function index(){
        return view('inscrire_agence');
    }
    public function create(){
        return view('inscrire_agence');
    }




}

