<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\LocalitesImport;
use Illuminate\Http\Request;
use App\Models\Localite;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\Admin\LocaliteFormRequest;

class localitesController extends Controller
{
    public function index(){
        $localite = Localite::all();
        return view('admin.localite.index', compact('localite'));
    }

    public function create(){

        return view('admin.localite.create');
    }

    public function store(LocaliteFormRequest $request){
        $data = $request->validated();

        $localite = new Localite;

        $localite->arrondissement = $data['arrondissement'];
        $localite->commune = $data['commune'];
        $localite->departement = $data['departement'];
        $localite->quartier = $data['quartier'];

        $localite->save();

        return redirect('admin/localite')->with('status', 'Vous avez ajouter une localité avec succès!');

    }


    public function edit($localite_id){

        $localite = Localite::find($localite_id);
        return view('admin.localite.edit', compact('localite'));

    }

    public function update(LocaliteFormRequest $request, $localite_id){

        $data = $request->validated();

        $localite = Localite::find($localite_id);

        $localite->arrondissement = $data['arrondissement'];
        $localite->commune = $data['commune'];
        $localite->departement = $data['departement'];
        $localite->quartier = $data['quartier'];

        $localite->update();

        return redirect('admin/localite')->with('status', 'Vous avez modifier une localité avec succès!');

    }

    public function destroy(Request $request){

        $localite = Localite::find($request->localite_delete_id);
        if ($localite) {
           $localite->delete();
           return redirect('admin/localite')->with('status', 'Vous avez supprimer une localité avec succès!');
        }else {
            return redirect('admin/localite')->with('status', 'Impossible de supprimer ID manquant!');
        }

    }

    public function import(Request $request){

        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        $file = $request->file('file');

        Excel::import(new LocalitesImport, $file);

        return redirect('admin/localite')->with('statut', 'File imported successfully.');
    }

        



    
}
