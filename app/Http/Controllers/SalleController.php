<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\salle;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salles = Salle::all();
        return view('salles.liste', compact('salles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salles.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'nom_salle'=>'required',
            'capacite'=>'required',




        ]);

        $salles = new salle();
        $salles->nom_salle = $request->nom_salle;
        $salles->capacite = $request->capacite;

        $salles->save();

        return redirect()->route('salles.index')->with('status', 'salle a  été ajouté avec succes.');

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
        $salles = salle::find($id);
        return view('Salles.modifier',compact('salles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $salles = salle::find($id);

        $salles->update([
            'nom_salle' => $request->nom_salle,
            'capacite' => $request->capacite,

        ]);

        return redirect()->route('salles.index')->with('status', 'Une salle a  été modifiée avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        {
            $salles = salle::find($id);
            $salles->delete();
            return redirect()->route('salles.index')->with('status', 'Salle a  été supprimé avec succes.');
        }
    }
}
