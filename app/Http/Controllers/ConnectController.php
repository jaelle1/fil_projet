<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnectController extends Controller
{
    public function index()
    {
        return view('connect');
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        Auth::login([
            "email" => $email,
            "password" => $password
        ]);
        return redirect("/admin");
    }
}
