<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Http\Requests\ContentRequest;
use Auth;


class ExperienceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        return view('experience.create');
    }


    public function store(ContentRequest $request)
    {
        $experience = new Experience();
        $cv = Auth::user()->cvs;

        $experience->titre = $request->input('titreex');
        $experience->DateDebut = $request->input('DateDebutex');
        $experience->DateFin = $request->input('DateFinex');
        $experience->NomEntreprise = $request->input('NomEntrepriseex');
        $experience->cv_id = $cv->id;

        $experience->save();

        session()->flash('success', 'Le experience bien enregistrer');
        return redirect('cvs');
    }


    public function edit($id)
    {
        $experience = Experience::find($id);
        if(isset($experience)){
        if(Auth::user()->cvs->id==$experience->cv->id){
        return view('experience.edit', ['experience' => $experience]);
        }else{
         return view('errors.403');
        }
        }else{
        return view('errors.403');
        }
    }


    public function update(ContentRequest $request, $id)
    {
        $experience = Experience::find($id);
        $experience->titre = $request->input('titreex');
        $experience->DateDebut = $request->input('DateDebutex');
        $experience->DateFin = $request->input('DateFinex');
        $experience->NomEntreprise = $request->input('NomEntrepriseex');

        $experience->save();
        return redirect('cvs');

    }


    public function destroy($id)
    {
        $experience = Experience::find($id);
        $experience->delete();
        return redirect('cvs');
    }
}
