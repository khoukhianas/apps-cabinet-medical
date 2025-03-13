<?php

namespace App\Http\Controllers;

use App\Models\livre;
use Illuminate\Http\Request;

class GerantLivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Livres=livre::all();
        return view('gerant.gestion_livre',compact('Livres'));
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
    
        $livrerecherches = Livre::where('Titre', 'like', $recherche)
           ->orWhere('Auteur', 'like', $recherche)
           ->orWhere('Categorie', 'like', $recherche)
           ->orWhere('status', 'like', $recherche)
           ->get();
        return view('gerant.resultatlivre', compact('livrerecherches'));
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
