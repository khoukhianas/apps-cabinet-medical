<?php

namespace App\Http\Controllers;

use App\Models\livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
//     public function index()
//     {
//         $Livres = livre::orderByDesc('nombrelouer')
//         ->get();
//         return view('recherche_livre',compact('Livres'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create(Request $request)
// {
//     $validatedData = $request->validate([
//         'recherche' => 'required|string',
//     ]);

//     $recherche = '%' . $validatedData['recherche'] . '%';

//     $livrerecherches = Livre::where('Titre', 'like', $recherche)
//        ->orWhere('Auteur', 'like', $recherche)
//        ->orWhere('Categorie', 'like', $recherche)
//        ->get();
//     return view('resultat', compact('livrerecherches'));
// }
// public function afficher($livre_id) {
//     $livre=livre::find($livre_id);
//     return view('detaillelivre',compact('livre'));
//   }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Livre= new livre();
            $Livre->titre =$request->title;
            
            $Livre->description =$request->description;
            $Livre->auteur =$request->auteur;
            $Livre->Categorie=$request->Categorie;
            $Livre->Quantite =$request->Quantite;
            
            if($request->has('image')){
                $file =$request->image;
                $image_name = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('/image'),$image_name);
                $Livre->image =$image_name;
              }
            $Livre->save();
            return redirect(url('/gerant/gestion_livre'));
    }

    /**
     * Display the specified resource.
     */
    public function show(livre $livre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $livre = Livre::find($id);
        return view('gerant.editlivre', compact('livre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $livre=livre::where('id',$id)->first();
        if($request->has('image')){
            $file =$request->image;
            $image_name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('image'),$image_name);
            unlink(public_path('image') . '/' . $livre->image);
            $livre->Image =$image_name;
           
          }
            $livre->titre =$request->title;
            $livre->description =$request->description;
            $livre->auteur =$request->auteur;
            $livre->Categorie=$request->categorie;
            $livre->Quantite =$request->Quantite;
        
          
        $livre->save();
        return redirect(url('/gerant/gestion_livre'));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $livre = Livre::findOrFail($id);
        $image_path = public_path('image') . '/' . $livre->Image;
    
        if(file_exists($image_path)) {
            unlink($image_path);
        }
    
        $livre->delete();
    
        return redirect(url('/gerant/gestion_livre'))->with([
            'success' => 'Le livre a été supprimé.'
        ]);
    }
    
    
    
}
