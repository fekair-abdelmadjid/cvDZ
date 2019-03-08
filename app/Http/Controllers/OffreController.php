<?php

namespace App\Http\Controllers;

use App\Http\Requests\OffreRequest;
use Illuminate\Http\Request;
use App\Offre;
use Illuminate\Support\Facades\Storage;
use Auth;

class OffreController extends Controller
{

    public function index()
    {
        $offres = Auth::user()->offres;
        return view('offre.index', ['offres' => $offres]);
    }

    public function Parcourir()
    {
        $offres = Offre::all();
        return view('offre.parcourir', ['offres' => $offres]);
    }

    public function create()
    {
        return view('offre.create');
    }

    public function store(OffreRequest $request)
    {
        $offre = new Offre();

        $offre->titre = $request->input('titre');
        $offre->entrprise = $request->input('entrprise');
        $offre->Wilaya = $request->input('Lieu');
        $offre->Date = $request->input('Date');
        $offre->Nombre_post = $request->input('Nombre');
        $offre->Niveau = $request->input('Niveau');
        $offre->Type_contrat = $request->input('Type');
        $offre->Dossier = $request->input('Dossier');
        $offre->user_id = Auth::user()->id;
        if ($request->hasFile('Logo')) {
            $request->file('Logo');
            $offre->logo = Storage::disk('uploads')->put('LogoEntreprise', $request->Logo);
        }
        $offre->save();
        session()->flash('success', 'Le offre bien enregistrer');
        return redirect('offre');

    }

    public function edit($id)
    {
        $offre = Offre::find($id);
        return view('offre.edit', ['offre' => $offre]);
    }

    public function update(OffreRequest $request, $id)
    {
        $offre = Offre::find($id);

        $offre->titre = $request->input('titre');
        $offre->presentation = $request->input('Presentation');
        $offre->entrprise = $request->input('entrprise');
        $offre->Secteur = $request->input('Secteur');
        $offre->Wilaya = $request->input('Lieu');
        $offre->Date = $request->input('Date');
        $offre->Nombre_post = $request->input('Nombre');
        $offre->Niveau = $request->input('Niveau');
        $offre->Type_contrat = $request->input('Type');
        $offre->Dossier = $request->input('Dossier');
        $offre->adrasse = $request->input('Adrasse');
        $offre->phone = $request->input('Telephone');
        $offre->source = $request->input('Source');
        $offre->Profil_recherche = $request->input('Profil');
        $offre->Missions_poste = $request->input('Missions');
        $offre->user_id = Auth::user()->id;
        if ($request->hasFile('Logo')) {
            $request->file('Logo');
            $offre->logo = Storage::disk('uploads')->put('LogoEntreprise', $request->Logo);
        }
        $offre->save();
        session()->flash('success', 'Le offre bien enregistrer');
        return redirect('offre');
    }

    public function destroy($id)
    {
        $offre = Offre::find($id);
        $offre->delete();
        return redirect('offre');
    }


    public function presente($id)
    {
        $offre = Offre::find($id);
        return view('offre.presente', ['offre' => $offre]);
    }


    public function search(Request $request)
    {
        $offres = Offre::all();

        if ($request->offreTitre && $request->offreTitre != null) {
            $offres = $offres->where('titre', 'like', '%' . $request->offreTitre . '%');
        }

        return view('offre.parcourir', ['offres' => $offres]);

    }
}
