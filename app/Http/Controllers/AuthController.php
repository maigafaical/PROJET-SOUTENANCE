<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function accueil()
    {
        return view('Auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['username'=>$request->username, 'password'=>$request->password])){
            return view('dashboard');
        }

        return view('Auth.login')->with('status', 'Identifiant ou mot de passe incorrect.');

    }

    public function logout()
    {
        Auth::logout();
        return view('Auth.login')->with('status', 'Vous etes déconnecté.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storage()
    {

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
