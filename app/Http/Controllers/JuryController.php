<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jury;

class JuryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $juries = jury::all();
        return view('Juries.liste', compact('juries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Juries.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'libelle'=>'required',
            'enseignants_id'=>'required',
            'users_id'=>'required',
            'maitre_stages_id'=>'required',
            'presidents_id'=>'required',
            'directeur_memoires_id'=>'required',


        ]);

        $juries = new jury();
        $juries->libelle = $request->libelle;
        $juries->enseignants_id = $request->enseignants_id;
        $juries->users_id = $request->users_id ;
        $juries->maitre_stages_id = $request->maitre_stages_id ;
        $juries->presidents_id = $request->presidents_id;
        $juries->directeur_memoires_id = $request->directeur_memoires_id;


        $juries->save();

        return redirect('Juries.liste')->with('status', 'Jury a  été ajouté avec succes.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
