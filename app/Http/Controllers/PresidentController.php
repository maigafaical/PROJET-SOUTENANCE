<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\president;

class PresidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presidents = President::all();
        return view('Presidents.liste', compact('presidents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Presidents.ajouter');
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

        $presidents = new president();
        $presidents->nom = $request->nom;
        $presidents->prenom = $request->prenom;
        $presidents->adresse = $request->adresse;
        $presidents->telephone = $request->telephone;
        $presidents->fonction = $request->fonction;
        $presidents->save();

        return redirect()->route('presidents.index')->with('status', 'president a  été ajouté avec succes.');

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
        $presidents = president::find($id);
        return view('Presidents.modifier',compact('presidents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $presidents = president::find($id);
        
        $presidents->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'fonction' => $request->fonction,
        ]);

        return redirect()->route('presidents.index')->with('status', 'Un President de jury a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
