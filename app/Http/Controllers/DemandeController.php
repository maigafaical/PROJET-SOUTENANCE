<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\demande;
use App\Models\etudiant;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $demandes = demande::all();
        return view('Demandes.liste', compact('demandes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $etudiants = etudiant::all();
        return view('Demandes.ajouter',compact('etudiants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        demande::create([
            'code'=> $request-> code,
            'statut'=> $request-> statut,
            'date'=> $request-> date,
            'periode'=> $request-> periode,
            'etudiants_id'=> $request-> etudiants_id,
        ]);
        // $request->validate([

            

        // ]);

        // $demandes = new demande();
        // $demandes->libelle = $request->libelle;
        // $demandes->titre = $request->titre;
        // $demandes->resume = $request->resume;
        // $demandes->date = $request->date;
        // $demandes->periode = $request->periode;
        // $demandes->etudiants_id = $request->etudiants_id;
        
        // $demandes->save();

        return redirect()->route('demandes.index')->with('status', 'Une demande a  été ajoutée avec succes.');
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
        $etudiants = etudiant::all();
        $demandes = demande::find($id);
        return view('Demandes.modifier',compact('demandes', 'etudiants'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $demandes = demande::find($id);

        $demandes->update([
            'statut' => $request->statut,
            'motif' => $request->motif,
        ]);

        return redirect()->route('demandes.index')->with('status', 'Une demande a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $demandes = demande::find($id);
            $demandes->delete();
            return redirect()->route('enseignants.index')->with('status', 'Une demande a  été supprimée avec succes.');
    }
}
