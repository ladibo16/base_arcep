<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Localite;
use App\Models\Site;

class SitesController extends Controller
{
    public function index(){
        $site = Site::all();
        return view('admin.site.index', compact('site'));
    }

    public function create(){
        $site = Site::all();
        return view('admin.site.create', compact('site'));
    }


    
    public function store(Request $request){
        $sites = new Site;

        $sites->create([
            'longitude' => $request -> longitude, 
            'latitude'  => $request -> latitude,
            'id_site'  => $request -> id_site,
            'dossier'  => $request -> dossier,
            'proprietaire'  => $request -> proprietaire,
            'emplacement'  => $request -> emplacement,
            'type'  => $request -> type,
            'objet'  => $request -> objet,
            'statut'  => $request -> statut,
            'autorisation'  => $request -> autorisation,
            'camouflage'  => $request -> camouflage,
            'observation'  => $request -> observation,
            'description'  => $request -> description,
            'date'  => $request -> date,
            'localite'  => $request -> localite,
        ]);

        return redirect('admin/sites')->with('status', 'Vous avez ajouter un site avec succès!');

    }

    public function edit($sites_id){

        $site= Site::find($sites_id);
        return view('admin.site.edit', compact('site'));

    }


    public function update(Request $request, $sites_id){

        $sites = Site::find($sites_id);

        $sites->update([
            'longitude' => $request -> longitude, 
            'latitude'  => $request -> latitude,
            'id_site'  => $request -> id_site,
            'dossier'  => $request -> dossier,
            'proprietaire'  => $request -> proprietaire,
            'emplacement'  => $request -> emplacement,
            'type'  => $request -> type,
            'objet'  => $request -> objet,
            'statut'  => $request -> statut,
            'autorisation'  => $request -> autorisation,
            'camouflage'  => $request -> camouflage,
            'observation'  => $request -> observation,
            'description'  => $request -> description,
            'date'  => $request -> date,
            'localite'  => $request -> localite,
        ]);
        //     $site->longitude = $request->longitude;
        //     $site->latitude = $request->latitude;
        //     $site->id_site = $request->id_site;
        //     $site->dossier = $request->dossier;
        //     $site->proprietaire = $request->proprietaire;
        //     $site->emplacement = $request->emplacement;
        //     $site->type = $request->type;
        //     $site->objet = $request->objet;
        //     $site->statut = $request->statut;
        //     $site->autorisation = $request->autorisation;
        //     $site->camouflage = $request->camouflage;
        //     $site->observation = $request->observation;
        //     $site->description = $request->description;
        //     $site->date = $request->date;

        // $site->update();


        return redirect('admin/sites')->with('status', 'Vous avez modifier un site avec succès!');

    }

    public function destroy(Request $request){

        $site = Site::find($request->site_delete_id);

        if ($site) {
           $site->delete();
           return redirect('admin/sites')->with('status', 'Vous avez supprimer un site avec succès!');
        }
        else{

            return redirect('admin/sites')->with('status', 'Impossible de supprimer ID manquant!');
        }
    }

    // public function destroy($sites_id){

    //     $site = site::find($sites_id);
    //     if ($site) {
    //        $site->delete();
    //        return redirect('admin/sites')->with('status', 'Vous avez supprimer une localité avec succès!');
    //     }else {
    //         return redirect('admin/sites')->with('status', 'Impossible de supprimer ID manquant!');
    //     }

    // }

    
    // public function detail_site($id){
       
    //     $site = Site::all();
    //     return view('admin.site.detail', compact('site'));

    // }
public function detail_site($id)
{
    // Récupérer un seul enregistrement en utilisant l'ID
    $site = Site::findOrFail($id);
    return view('admin.site.detail', compact('site'));
}


}
