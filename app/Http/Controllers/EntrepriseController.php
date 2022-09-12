<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Role;

class EntrepriseController extends Controller
{
    public function index(){
        $id_role = Role::where("name", "=", "entreprise")->get()->first()->id;
        $entreprises = User::where('role_id','=',$id_role)->get();
        return view('entreprise',compact('entreprises'));
    }
}
