<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Role;
use   App\Models\User;
use Illuminate\Support\Facades\Hash;

class InsentrepriseController extends Controller
{
   public function index(){
    return view('inscrire_entreprise');
   }
   public function create()
    {
        $roles_id = Role::where("name", "=", "entreprise")->get();
        return view('inscrire_entreprise', compact('roles_id'));
    }

    
    public function store_entreprise (Request $request)
    {
        $request->validate([
            'role_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'avatar' => 'required',
            'password' => 'required',
            'entite' => 'required',
            'description' => 'required',
        ]);
        $input=$request->all();
         $input['avatar'] = $request->avatar->store('avatar');
            
        $input['password'] = Hash::make($input['password']);
        

        User::create($input);
        
        
    }
}
