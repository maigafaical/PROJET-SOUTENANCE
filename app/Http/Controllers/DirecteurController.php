<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\directeur_memoire;

class DirecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directeurs = directeur_memoire::all();
        return view('Directeurs_memoire.liste', compact('directeurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Directeurs_memoire.ajouter');
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

        $directeurs = new directeur_memoire();
        $directeurs->nom = $request->nom;
        $directeurs->prenom = $request->prenom;
        $directeurs->adresse = $request->adresse;
        $directeurs->telephone = $request->telephone;
        $directeurs->fonction = $request->fonction;


        $directeurs->save();

        return redirect()->route('directeurs.index')->with('status', 'Directeur a  été ajouté avec succes.');

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
        $directeurs = directeur_memoire::find($id);
        return view('Directeurs_memoire.modifier',compact('directeurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $directeurs = directeur_memoire::find($id);
        
        $directeurs->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'fonction' => $request->fonction,
        ]);

        return redirect()->route('directeurs.index')->with('status', 'Un directeur de mémoire a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
