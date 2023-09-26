<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\maitre_stage;

class MaitreStageController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maitres = maitre_stage::all();
        return view('maitre_stage.liste', compact('maitres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('maitre_stage.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'nom'=>'required',
            'prenom'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',
            'fonction'=>'required',


        ]);

        $maitres = new maitre_stage();
        $maitres->nom = $request->nom;
        $maitres->prenom = $request->prenom;
        $maitres->adresse = $request->adresse;
        $maitres->telephone = $request->telephone;
        $maitres->fonction = $request->fonction;


        $maitres->save();

        return redirect()->route('maitres.index')->with('status', 'Maitre de stage a  été ajouté avec succes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $maitres = maitre_stage::find($id);
        return view('Maitre_stage.modifier',compact('maitres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $maitres = maitre_stage::find($id);
        
        $maitres->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'fonction' => $request->fonction,
        ]);

        return redirect()->route('maitres.index')->with('status', 'Un Maitre de stage a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
