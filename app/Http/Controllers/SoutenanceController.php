<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\soutenance;
use App\Models\jury;

class SoutenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soutenances = soutenance::all();
        return view('Soutenances.liste' , compact('soutenances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Soutenances.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'date'=>'required',
            'heure'=>'required',
            'statut'=>'required',
            'juries'=>'required',
            'salles'=>'required',
            'users'=>'required',


        ]);

        $soutenances = new soutenance();
        $soutenances->date = $request->date;
        $soutenances->heure = $request->heure;
        $soutenances->statut = $request->statut ;
        $soutenances->juries= $request->juries ;
        $soutenances->salles = $request->salles;
        $soutenances->users= $request->users;

        $soutenances->save();

        return redirect('Soutenances.liste')->with('status', 'Soutenance a  été ajouté avec succes.');
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
