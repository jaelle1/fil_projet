<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\User;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Role;
use Illuminate\Support\Facades\Hash;

class InscrireagenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inscrire_agence');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles_id = Role::where("name", "=", "agence")->get()->first()->id;
        return view('inscrire_agence')->with("roles_id", $roles_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_agence(Request $request)
    {
        $request->validate([
            'role_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'logo' => 'required|image',
            'password' => 'required',
            'entite' => 'required',
            'description' => 'required',


        ]);

        $input=$request->all();
         $input['logo'] = $request->logo->store("public/logo");
            
        $input['password'] = Hash::make($input['password']);
        

        User::create($input);
        
        $roles_id = Role::where("name", "=", "agence")->get()->first()->id;
        
        return view('acceuil', compact("roles_id"))->with('success', 'votre inscription est reussie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */  
    public function show(Request $request)
    {
       $agence =  User::find($request->id);
        return view('voirplus', compact('agence'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
