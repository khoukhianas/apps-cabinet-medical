<?php

namespace App\Http\Controllers;

use App\Models\livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        $Livres = livre::orderByDesc('nombrelouer')
        ->get();
        return view('recherche_livre',compact('Livres'));
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'recherche' => 'required|string',
        ]);
    
        $recherche = '%' . $validatedData['recherche'] . '%';
    
        $livrerecherches = livre::where('Titre', 'like', $recherche)
           ->orWhere('Auteur', 'like', $recherche)
           ->orWhere('Categorie', 'like', $recherche)
           ->get();
        return view('resultat', compact('livrerecherches'));
    }
    public function afficher($livre_id) {
        $livre=livre::find($livre_id);
        return view('detaillelivre',compact('livre'));
      }
      public function home()
      {
          if (Auth::check()) { // Vérifiez si l'utilisateur est connecté
              if (Auth::user()->admin == 1) { // Si l'utilisateur a admin = 1, renvoyer cette vue
                  return view('gerant.acceuil');
              } else { // Sinon, renvoyer cette vue
                  return view('acceuil');
              }
          } else { // Si l'utilisateur n'est pas connecté, redirigez-le vers la page de connexion
              return redirect('/');
          }
   
}
}
