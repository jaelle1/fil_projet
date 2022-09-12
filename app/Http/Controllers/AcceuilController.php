<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use TCG\Voyager\Models\Role;

class AcceuilController extends Controller
{
    public function index(){
        
        $id_role = Role::where("name", "=", "agence")->get()->first()->id;
        $agences = User::where('role_id','=',$id_role)->take(6)->get();
        $id_roleent= Role::where("name", "=", "entreprise")->get()->first()->id;
        $entreprises= User::where('role_id','=',$id_roleent)->take(6)->get();
        return view('acceuil',compact(['agences','entreprises']));
       
        
    }

    
}
