<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Role;

class AgenceController extends Controller
{
    public function index(){

        $id_role = Role::where("name", "=", "agence")->get()->first()->id;
        $agences = User::where('role_id','=',$id_role)->get();
        return view('agence',compact('agences'));
}
}