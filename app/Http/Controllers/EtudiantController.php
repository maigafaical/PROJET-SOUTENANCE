<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = etudiant::all();
        return view('Etudiants.liste', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Etudiants.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'nom'=>'required',
            'prenom'=>'required',
            'date_naissance'=>'required',
            'sexe'=>'required',
            'phone_etudiant'=>'required',
            'filiere'=>'required',
            'niveau'=>'required',

        ]);

        $etudiants = new etudiant();
        $etudiants->nom = $request->nom;
        $etudiants->prenom = $request->prenom;
        $etudiants->date_naissance = $request->date_naissance;
        $etudiants->sexe = $request->sexe;
        $etudiants->phone_etudiant = $request->phone_etudiant;
        $etudiants->filiere = $request->filiere;
        $etudiants->niveau = $request->niveau;

        $etudiants->save();

        return redirect()->route('etudiants.index')->with('status', 'Etudiant a  été ajouté avec succes.');

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
        $etudiants = etudiant::find($id);
        return view('Etudiants.modifier',compact('etudiants'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $etudiants = etudiant::find($id);
        $etudiants->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_naissance' => $request->date_naissance,
            'sexe' => $request->sexe,
            'phone_etudiant'  => $request->phone_etudiant,
            'filiere' => $request->filiere,
            'niveau' => $request->niveau,
        ]);

        return redirect()->route('etudiants.index')->with('status', 'Etudiant a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $etudiants = etudiant::find($id);
        $etudiants->delete();
        return redirect()->route('etudiants.index')->with('status', 'Etudiant a  été supprimé avec succes.');
    }
}
