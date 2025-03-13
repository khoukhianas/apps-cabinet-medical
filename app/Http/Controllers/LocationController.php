<?php

namespace App\Http\Controllers;

use App\Models\livre;
use App\Models\Location;
use App\Http\Requests\StoreLocationRequest;
use App\Http\Requests\UpdateLocationRequest;
use Illuminate\Http\Request;
use App\Models\User;
class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $locations=Location::latest()->paginate(6);
        $livres=livre::where('Quantite','>', 1)->get();
       
        foreach($locations as $location ){
           if($location->date_fin < now() && $location->user->statut === "live" ){
            $location->status="depasser la date limite";
            $location->user->statut="liste noire";
            $location->user->save();
            $location->save();
           }}
           $users = User::where('statut', 'normal')->where('admin', 0)->get();
        return view('gerant.gestion_location',compact('locations','livres','users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $recherche = $request->input('recherche');
        $livres=livre::where('Quantite','>', 1)->get();
        $users=User::where('statut','normal')->where('admin',0);
        $locations = Location::join('users', 'locations.user_id', '=', 'users.id')
            ->where(function($query) use ($recherche) {
                $query->where('users.name', 'like', "%$recherche%")
                      ->orWhere('users.massar', 'like', "%$recherche%");
            })
            ->orWhere('locations.status', 'like', "%$recherche%")
            ->orWhere('locations.date_fin', 'like', "%$recherche%")
            ->paginate(6);
            $useers=User::where('statut','normal')->where('admin',0);
        return view('gerant.resultlocation', compact('locations','livres','users','useers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLocationRequest $request)
{
    // Création d'une nouvelle instance de Location
    $location = new Location();
    $location->date_fin = now()->addDays(7);
    $location->livre_id = $request->idlivre;
    $location->user_id = $request->user_id;
    $location->save();

    // Mise à jour du statut de l'utilisateur
    $user = User::findOrFail($request->user_id);
    $user->statut = "live";
    $user->save();

    // Mise à jour de la quantité et du nombre de locations du livre
    $livre = Livre::findOrFail($request->idlivre);
    $livre->Quantite -= 1;
    $livre->nombrelouer += 1;
    $livre->save();

    return redirect(url('/Location'))->with([
        'success' => 'La Location a été ajoutée avec succès'
    ]);
}


    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        // $location->status = "retourne";
        // $location->save();
        // return redirect(url('/Location'))->with([
        //     'success'=> 'La status est bien ajouteé'
        // ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        //$Livre=Livre::get()->all();
        // $users=User::get()->all();
        // return view('gerant.gestion_location',compact('Livre','users','Location'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Location $Location)
    {
        //

     
        $Location->status= "retourne";
        $Location->save();
        $Location->user->statut="normal";
        $Location->user->save();


        $Location->livre->Quantite=($Location->livre->Quantite)+1;
        $Location->livre->save();
        return redirect(url('/Location'))->with([
            'success'=> 'La status est bien ajouteé'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        //
    }
}
