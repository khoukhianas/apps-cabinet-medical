<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('admin', 0)->with('locations')->get();

foreach ($users as $user) {
    foreach ($user->locations as $loc) {
        if ($loc->status == "depasser la date limite") {
            $user->statut = "liste noire";
            break; // Sortir de la boucle si un utilisateur est ajouté à la liste noire
        }
       
    }

    $user->save(); // Sauvegarder chaque utilisateur après avoir mis à jour son statut
}

return view('gerant.gestion_adherant', compact('users'));
// dd($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'recherche' => 'required|string',
        ]);
    
        $recherche = '%' . $validatedData['recherche'] . '%';
    
        $livrescherches = User::where('name', 'like', $recherche)
           ->orWhere('name', 'like', $recherche)
           ->orWhere('email', 'like', $recherche)
           ->get();
        return view('gerant.resultadherant', compact('livrescherches'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
