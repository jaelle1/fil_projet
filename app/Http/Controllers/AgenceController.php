<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agence;

class AgenceController extends Controller
{
    public function index(){

       $al =  Agence::all();

        return view('agence', compact('al'));
    }
}
