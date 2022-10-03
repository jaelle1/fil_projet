<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
    public function store(Request $request){
        Contact::create([
            "nom" => $request->nom,
            "email" => $request->email,
            "message" => $request->message,
        ]);
        return back();
    }
}
