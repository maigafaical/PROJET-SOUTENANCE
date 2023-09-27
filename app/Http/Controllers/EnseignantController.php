<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\enseignant;
use Illuminate\Support\Facades\Redirect;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enseignants = enseignant::all();
        return view('Enseignants.liste', compact('enseignants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Enseignants.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'email'=>'required',



        ]);

        $enseignants = new enseignant();
        $enseignants->nom = $request->nom;
        $enseignants->prenom = $request->prenom;
        $enseignants->telephone = $request->telephone;
        $enseignants->email = $request->email;
        $enseignants->save();

        return redirect()->route('enseignants.index')->with('status', 'Enseignant a  été ajouté avec succes.');

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
        $enseignants = enseignant::find($id);
        return view('Enseignants.modifier',compact('enseignants'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enseignants = enseignant::find($id);

        $enseignants->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]);

        return redirect()->route('enseignants.index')->with('status', 'Un enseignant a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $enseignants = enseignant::find($id);
            $enseignants->delete();
            return redirect()->route('enseignants.index')->with('status', 'Enseignant a  été supprimé avec succes.');
        }
    }
}
